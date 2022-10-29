<template>
    <main class="content bonus" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <div class="progress-heading">{{progressHeading}}</div>
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section">
            <div class="wrapper d-column">
                <h2>Бонус!!! Как выбрать свое место учебы/работы?</h2>
            </div>
        </section>

        <section class="section section_1">
            <div class="wrapper">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_1">
                        Самое главное правило - выбирать лучшее и стремиться к лучшему! Ставь перед собой амбициозные цели.
                        <br>
                        <br>
                        Если хотеть заработать миллион, то если не миллион, так тысяч 500 заработаешь
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_2">
            <div class="wrapper">
                <img src="/images/bonus.png" class="bonus">

                <p class="bubble__text text_2">
                    Также и с местом обучения - ищи то место, где лучшие преподаватели, передовые знания. Этот университет или другое место учебы должны приближать тебя максимально близко к твоей мечте.
                </p>
            </div>
        </section>

        <div class="section section_3">
            <div class="wrapper d-column">
                <p class="bubble__text text_3">
                    Тебе стоит:
                </p>
                <ul class="bubble__text text_3">
                    <li>узнать мировой рейтинг выбранного учебного заведения;</li>
                    <li>рейтинг учебного заведения в своей сфере;</li>
                    <li>прочитать отзывы;</li>
                    <li>написать текущим студентам и проверить отзывы;</li>
                    <li>посмотреть программу обучения - сопоставить с тем, что требует работодатель (поищи вакансии по своей специальности на сайтах с работой и посмотри требования);</li>
                    <li>посмотреть профили твоих будущих преподавателей - какой у них профессиональный опыт и чему они могут научить;</li>
                    <li>определиться с учебным заведением и готовиться к поступлению в соответствии с требованиями конкретно этого места.</li>
                </ul>
                <p class="bubble__text text_3">
                    Во время обучения надо также активно практиковаться, чтобы приобретать реальные профессиональные навыки - делать проекты, стажироваться.
                    <br>
                    <br>
                    И помни: для достижения своей желанной жизни через 10 лет и далее, есть множество путей - выбирай тот, что ближе тебе. Возможно, жизнь будет заставлять тебя с него сворачивать, но если твоя мечта не изменится и после вынужденных поворотов, то продолжай за ней идти и использовать возможности для ее достижения. Дерзай!

                </p>
            </div>
        </div>

        <section class="section section_4">
            <div class="wrapper">
                <router-link class="next" to="step-finish"><span>Получить результаты</span></router-link>
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
            progressHeading: "10/10",
            talentsDescription: '',
            interestsDesc: '',
            activitiesDesc: '',
            talent1: '',
            talent2: '',
            talent3: '',
            talent4: '',
            talent5: '',
            talent6: '',
            talent7: '',
            talent8: '',
            talent9: '',
            progress: 100,
        }
    },
    validators: {

    },
    watch: {


        talent1(newValue) {
            localStorage.talent1 = newValue;
            this.disabled = false
        },
        talent2(newValue) {
            localStorage.talent2 = newValue;
            this.disabled = false
        },
        talent3(newValue) {
            localStorage.talent3 = newValue;
            this.disabled = false
        },
        talent4(newValue) {
            localStorage.talent4 = newValue;
            this.disabled = false
        },
        talent5(newValue) {
            localStorage.talent5= newValue;
            this.disabled = false
        },
        talent6(newValue) {
            localStorage.talent6 = newValue;
            this.disabled = false
        },
        talent7(newValue) {
            localStorage.talent7 = newValue;
            this.disabled = false
        },
        talent8(newValue) {
            localStorage.talent8 = newValue;
            this.disabled = false
        },
        talent9(newValue) {
            localStorage.talent9 = newValue;
            this.disabled = false
        },

        interestsDesc(newValue) {
            localStorage.interestsDesc = newValue;
            this.disabled = false
        },

        activitiesDesc(newValue) {
            localStorage.activitiesDesc = newValue;
            this.disabled = false
        },

        talentsDescription(newValue) {
            localStorage.steptalentsTalentsDescription = newValue;
            this.disabled = false
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = 100;
        }

        if (localStorage.talent1) {
            this.talent1 = localStorage.talent1;
        }

        if (localStorage.talent2) {
            this.talent2 = localStorage.talent2;
        }

        if (localStorage.talent3) {
            this.talent3 = localStorage.talent3;
        }

        if (localStorage.talent4) {
            this.talent4 = localStorage.talent4;
        }

        if (localStorage.talent5) {
            this.talent5 = localStorage.talent5;
        }

        if (localStorage.talent6) {
            this.talent6 = localStorage.talent6;
        }

        if (localStorage.talent7) {
            this.talent7 = localStorage.talent7;
        }

        if (localStorage.talent8) {
            this.talent8 = localStorage.talent8;
        }

        if (localStorage.talent9) {
            this.talent9 = localStorage.talent9;
        }

        if (localStorage.talentsDescription) {
            this.talentsDescription = localStorage.steptalentsTalentsDescription;
        }

        if (localStorage.interestsDesc) {
            this.interestsDesc = localStorage.interestsDesc;
        }

        if (localStorage.activitiesDesc) {
            this.activitiesDesc = localStorage.activitiesDesc;
        }
    },

    beforeRouteLeave (to, from, next) {
        console.log(to)
        if(to.name === "stepFinish") {
            var that = this;
            this.$validate()
                .then(function(success) {
                    if (success) {
                        localStorage.progress = 100;
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


