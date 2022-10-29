<template>
    <main id="header" class="content stepA">
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <h2 @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>Давай определимся с точкой А</h2>
        <section class="section section_1">
            <div class="wrapper">
                <div class="block half-block align-start">
                    <div class="bubble">
                        <p class="bubble__text text_1"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                            Где ты сейчас находишься?
                        </p>
                    </div>
                    <div class="text-group">
                        <div class="text-input-group">
                            <label class="text-input-label" for="country">Страна</label>
                            <input id="country" :class="{error: validation.hasError('country')}" type="text" v-model="country" maxlength="90" class="text-input" placeholder="Беларусь"></input>
                        </div>
                        <div class="text-input-group">
                            <label class="text-input-label" for="city">Город</label>
                            <input id="city" :class="{error: validation.hasError('city')}" type="text" v-model="city" maxlength="90" class="text-input" placeholder="Гродно"></input>
                        </div>
                    </div>
                </div>
                <img class="a-icon" src="/images/A-m.svg"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            </div>
        </section>
        <section class="section section_2_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <img src="/images/stepA-1.png" class="stepA-1">
                <div class="bubble bubble_unstyled altered">
                    <p class="bubble__text text_2_1">
                        Почему-то я уверена, что это не самое последнее место на Земле. Если ты указал(а) европейскую страну или одну из стран СНГ, значит ты уже как минимум имеешь доступ к хорошему образованию и другим возможностям реализовать свои амбиции. И отсюда можно стартовать куда угодно - главное действительно захотеть
                    </p>
                </div>
            </div>
        </section>
        <section class="section section_2"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <img src="/images/stepA-2.png" class="stepA-2">
                <div class="block flex-end">
                    <div class="bubble bubble_unstyled bubble_inverted altered">
                        <p class="bubble__text text_2">
                            Семья - какая бы она у тебя ни была - она самая лучшая, потому что она твоя. Бог, судьба или естественный отбор - что угодно из этого -  дали тебе именно те, нужные для тебя условия, из которых ты можешь сформировать свою неповторимую личность и жизнь. Используй этот ресурс с умом и ищи ресурсы вовне
                        </p>
                    </div>
                    <input class="styled-checkbox" id="confirmFamily" type="checkbox" v-model="confirmFamily" true-value="true" false-value="false" >
                    <!--<label :class="{error: validation.hasError('confirmFamily')}" for="confirmFamily" class="checkbox">Понятно</label>-->
                </div>
            </div>
        </section>
        <section class="section section_3">
            <div class="wrapper wrapper_column centered">
                <div class="bubble self-start">
                    <p class="bubble__text text_3"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                        А теперь перечисли, пожалуйста, все свои особые знания, умения, хобби и интересы:
                    </p>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="Знаю английский на уровне B2, занимаюсь танцами с 5 лет ..."
                    ref="myTextarea"
                    v-model="skills"
                    maxlength="1000"
                    :class="{error: validation.hasError('skills')}"
                    :min-height="120"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_4"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <div class="bubble bubble_inverted bubble_unstyled">
                        <p class="bubble__text text_4" >
                            Пересмотри, пожалуйста, все, что ты написал(а) выше. Подумай о всех тех возможностях, которые тебе предоставляет твое место жительства, семья, страна, интернет и весь мир. Насколько их много?
                        </p>
                    </div>
                </div>
                <img src="/images/stepA-3.png" class="stepA-3">
            </div>
        </section>

        <section class="section section_spoiler" >
            <div class="wrapper">
                <spoiler title="Смотреть ответ">
                    <p class="text_5"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                        Правильный ответ - бесконечное множество - стоит только захотеть и начать работать в направлении достижения своей цели, идти вперед без тени страха и сомнения, тогда ты найдешь лучшее место и лучших людей, которые помогут тебе стать тем, кем ты хочешь
                    </p>
                </spoiler>
            </div>
        </section>

        <section class="section section_5">
            <div class="wrapper wrapper_column">
                <div class="bubble self-start">
                    <p class="bubble__text text_6">
                        Заметки
                    </p>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="Если есть еще какие-то мысли, просто напиши их сюда, чтобы не забыть :)"
                    ref="myTextarea"
                    v-model="notes"
                    maxlength="1000"
                    :class="{error: validation.hasError('notes')}"
                    :min-height="205"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_6">
            <div class="wrapper">
                <div class="wrapper">
                    <router-link :class="{error: validation.hasError()}" class="next" to="step-B"><span>Понятно, идем дальше</span></router-link>
                </div>
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
            ready: false
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
            progressHeading: "1/10",

            confirmFamily: true,
            skills: '',
            notes: '',
            country: '',
            city: '',
            progress: 0,
        }
    },
    validators: {
        skills: function (value) {
            return Validator.value(value).required();
        },
        country: function (value) {
            return Validator.value(value).required();
        },
        city: function (value) {
            return Validator.value(value).required();
        },
        confirmFamily: function (value) {
            return Validator.value(value).required().regex('^true$');
        },

    },
    watch: {

        confirmFamily(newValue) {
            localStorage.stepAconfirmFamily = newValue;
            this.disabled = false
        },

        skills(newValue) {
            localStorage.skills = newValue;
            this.disabled = false
        },

        notes(newValue) {
            localStorage.stepANotes = newValue;
            this.disabled = false
        },

        country(newValue) {
            localStorage.country = newValue;
            this.disabled = false
        },

        city(newValue) {
            localStorage.city = newValue;
            this.disabled = false
        }
    },
    mounted() {
        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.country) {
            this.country = localStorage.country;
        }

        if (localStorage.stepAconfirmFamily) {
            this.confirmFamily = true;
        }

        if (localStorage.city) {
            this.city = localStorage.city;
        }

        if (localStorage.sex) {
            this.sex = localStorage.sex;
        }

        if (localStorage.skills) {
            this.skills = localStorage.skills;
        }

        if (localStorage.stepANotes) {
            this.notes = localStorage.stepANotes;
        }
    },


    beforeRouteLeave (to, from, next) {
        if(to.name === "stepB") {
            var that = this;
            this.$validate()
                .then(function(success) {
                    if (success) {
                        localStorage.progress = parseInt(localStorage.progress) + 10;
                        next();
                    }
                    else {
                        next(false);

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
<style lang="scss">

.vue-spoiler {
    margin-bottom: 10px;

    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    border-radius: 20px;
    outline: none;

    font-family: Open Sans, sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;

    line-height: 22px;

    .title {
        padding: 10px 15px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;

        .arrow {
            margin-left: 10px;
            background-image: url(/images/arrow-down.svg);
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
    border-bottom: 1px solid #dbdbdb;
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
    line-height: 22px;
    display: none;
    background: #FFFFFF;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #3C9194;
}


</style>


