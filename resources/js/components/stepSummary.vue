<template>
    <main class="content summary" >
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <h2>Давай подводить итоги</h2>
            </div>
        </section>

        <section class="section section_1">
            <div class="wrapper">
                <div class="block" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <div class="bubble bubble_unstyled">
                        <p class="bubble__text text_1">
                            Наверняка у тебя уже сложилась картинка в голове, кем ты хочешь стать и к чему стремишься. Опиши здесь свою мечту:
                        </p>
                    </div>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="Я хочу стать ... И при этом жить в таких-то условиях и таким-то образом проводить свой день."
                    ref="myTextarea"
                    v-model="future"
                    maxlength="1000"
                    :class="{error: validation.hasError('future')}"
                    :min-height="325"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_2">
            <div class="wrapper dr-reverse" >
                <div class="block" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <div class="bubble bubble_unstyled bubble_inverted">
                        <p class="bubble__text text_2">
                            Что тебе нужно сделать для реализации этой мечты? (напиши свой план - возможно тебе понадобится английский язык, или надо подобрать подходящий ВУЗ, найти репетитора, пройти курсы, сделать свой первый проект и т.д.)
                            <br><br>
                        </p>
                    </div>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="1. Повысить уровень английского до уровня С1 за следующие 2 года, сдать TOEFL на 92 балла.
2. Подготовиться к поступлению в такой-то ВУЗ.
3. Поволонтерить на 2-3 мероприятиях, посвещенных тому, что мне интересно.
4. ..."
                    ref="myTextarea"
                    :class="{error: validation.hasError('steps')}"
                    v-model="steps"
                    maxlength="1000"
                    :min-height="325"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <div class="section section_3">
            <div class="wrapper" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                <div class="block">
                    <div class="bubble">
                        <p class="bubble__text text_3">
                            Взгляни также на пройденные тобой заранее тесты. Подтверждают ли они твои склонности и интересы?
                        </p>
                    </div>
                    <img src="/images/stepA-3.png" class="only-mobile lady">
                    <div class="radio-block" :class="{error: validation.hasError('confirmation2')}">
                        <p>
                            <input type="radio" id="work2" name="radio-group" v-model="confirmation2" value="1">
                            <label for="work2" class="radio-label">Да, скорее да</label>
                        </p>
                        <p>
                            <input type="radio" id="work3" name="radio-group" v-model="confirmation2" value="2">
                            <label for="work3" class="radio-label">Нет, скорее нет (значит ты немного лукавил(а), когда проходил(а) ;)</label>
                        </p>
                    </div>
                </div>

                <img src="/images/stepA-3.png" class="only-desktop lady">
            </div>
        </div>

        <section class="section section_4">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" to="step-bonus"><span>Подходим к концу</span></router-link>
            </div>
        </section>

    </main>
</template>

<script>
import {Validator} from "simple-vue-validator";

var ProgressBar = {
    name: 'ProgressBar',
    props: {
        value: {
            type: Number,
            default: 0
        },
        barClass: {
            type: String,
            default: ''
        },
        origin: {
            type: String,
            default: 'left'
        },
        scale: {
            type: String,
            default: 'X',
            validator: v => ['X', 'Y'].includes(v)
        }
    },
    data() {
        return {
            ready: false,
        }
    },
    computed: {
        barStyle() {
            if (!this.ready) {
                return {
                    transform: `scale${this.scale}(0)`
                }
            }

            return {
                transform: `scale${this.scale}(${this.value * 0.01})`,
                transformOrigin: `${this.origin}`
            }
        }
    },
    mounted() {
        setTimeout(() => { this.ready = true }, 0)
    },
    template: `
        <div
            class="progressbar"
        >
        <div
            :class="barClass"
            :style="barStyle"
            class="progressbar-bar"
        >
            <slot/>
        </div>
        </div>
    `
};
import Spoiler from './Spoiler'


export default {
    components: {
        "progress-bar": ProgressBar,
        "spoiler": Spoiler
    },
    data: function() {
        return {
            progressHeading: "9/10",
            future: '',
            steps: '',
            confirmation2: '',
            progress: 0

        }
    },
    validators: {
        future: function (value) {
            return Validator.value(value).required();
        },
        steps: function (value) {
            return Validator.value(value).required();
        },
        confirmation2: function (value) {
            return Validator.value(value).required();
        },
    },
    watch: {



        confirmation2(newValue) {
            localStorage.confirmation2 = newValue;
            this.disabled = false
        },
        future(newValue) {
            localStorage.future = newValue;
            this.disabled = false
        },

        steps(newValue) {
            localStorage.steps = newValue;
            this.disabled = false
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.confirmation2) {
            this.confirmation2 = localStorage.confirmation2;
        }
        if (localStorage.future) {
            this.future = localStorage.future;
        }

        if (localStorage.steps) {
            this.steps = localStorage.steps;
        }

    },

    beforeRouteLeave (to, from, next) {
        console.log(to)
        if(to.name === "stepBonus") {
            var that = this;
            this.$validate()
                .then(function(success) {
                    if (success) {
                        localStorage.progress = parseInt(localStorage.progress) + 10;
                        next();
                    }
                    else {
                        next(false);
                        console.log(that);

                        that.$nextTick(() => {
                            const el = that.$el.querySelector(".error:first-of-type");
                            //console.log(el.offsetTop)
                            //var top = el.offsetTop + (window.innerHeight / 2);
                            console.log(el)
                            console.log(top)
                            el.scrollIntoView({
                                behavior: 'smooth'
                            });
                            //window.scrollTo(0, top);
                            return;
                        });
                    }
                });
        }
        else {
            localStorage.progress = parseInt(localStorage.progress) - 10;
            next();
        }



    },
    methods: {
        keydown: function(e) {
            console.log(e)
        }
    },
}






</script>
<style lang="scss" scoped>

.vue-spoiler {
    margin-bottom: 10px;

    background: #FFFFFF;
    border: none;
    box-sizing: border-box;
    border-radius: 20px;
    outline: none;

    font-family: Open Sans, sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;

    line-height: 22px;

    .title {

        width: 165px;
        height: 40px;
        padding: 10px 15px;

        font-family: Open Sans, sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 22px;
        color: #FFFFFF;

        background: #3C9194;
        border-radius: 20px;
        border: none;

        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;

        .arrow {
            margin-left: 0px !important;
            background-image: none !important;
            padding: 0px;
        }
    }

    .content {
        padding: 15px 30px;
        font-family: Open Sans, sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 22px;
        color: #000000;
    }
}

@media all and (min-width: 1024px) {
    .vue-spoiler {
        font-size: 20px;

        .content {
            font-size: 20px;
            line-height: 27px;
        }
    }
}

.vue-spoiler.expanded .title {
    border-bottom: none;
}

$progressbar-height: 10px !default;
$progressbar-background: #FFF !default;
$progressbar-bar-height: 100% !default;
$progressbar-bar-background: #3C9194 !default;
$progressbar-bar-transition: transform 2s ease !default;

.progressbar {
    height: $progressbar-height;
    overflow: hidden;
    border-radius: 20px;
    background: $progressbar-background;

    &-bar {
        height: 10px;
        background: $progressbar-bar-background;
        transition: $progressbar-bar-transition;
        border-radius: 20px;
    }
}

.progress-bar {
    background: #fff;
    margin-top: 15px;
}
.progress-heading {
    font-family: Open Sans, sans-serif;
    font-size: 16px;
    display: none;
    line-height: 22px;
    background: #FFFFFF;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #3C9194;
}

</style>


