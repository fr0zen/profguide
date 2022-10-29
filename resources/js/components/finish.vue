<template>
    <main class="content finish">

        <section class="section" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <h2>Поздравляю тебя. Теперь ты можешь получить свой результат!</h2>
            </div>
        </section>

        <section class="section section_1">
            <div class="wrapper d-column">
                <p class="bubble__text text_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    Поделись, пожалуйста, твоим впечатлением от пройденного курса, мы это очень ценим!*
                </p>

                <textarea-autosize
                    class="textarea"
                    placeholder=""
                    ref="myTextarea"
                    v-model="impression"
                    :class="{error: validation.hasError('impression')}"
                    maxlength="1000"
                    :min-height="120"
                    :max-height="1000"

                />
            </div>
        </section>

        <section class="section section_2">
            <div class="wrapper d-column">
                <p class="bubble__text text_2" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    А теперь покритикуй нас! Скажи, если было что-то неудобно или что-то хотелось изменить/убрать/добавить? Любые замечания:*
                </p>

                <textarea-autosize
                    class="textarea"
                    placeholder="Например: было бы прикольно сделать ..."
                    ref="myTextarea"
                    v-model="critic"
                    :class="{error: validation.hasError('critic')}"
                    maxlength="1000"
                    :min-height="120"
                    :max-height="1000"

                />
            </div>
        </section>

        <section class="section section_3">
            <div class="wrapper d-column">
                <p class="bubble__text text_3" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    С какой вероятностью ты посоветовал(а) бы этот курс друзьям?
                </p>
                <div class="radio-block" :class="{error: validation.hasError('advice')}">
                    <div class="column1">
                        <p>
                            <input type="radio" id="radio1" name="advice" v-model="advice" value="1">
                            <label for="radio1" class="radio-label">1</label>
                        </p>
                        <p>
                            <input type="radio" id="radio2" name="advice" v-model="advice" value="2">
                            <label for="radio2" class="radio-label">2</label>
                        </p>
                        <p>
                            <input type="radio" id="radio3" name="advice" v-model="advice" value="3">
                            <label for="radio3" class="radio-label">3</label>
                        </p>
                        <p>
                            <input type="radio" id="radio4" name="advice" v-model="advice" value="4">
                            <label for="radio4" class="radio-label">4</label>
                        </p>
                        <p>
                            <input type="radio" id="radio5" name="advice" v-model="advice" value="5">
                            <label for="radio5" class="radio-label">5</label>
                        </p>
                    </div>
                    <div class="column2">
                        <p>
                            <input type="radio" id="radio6" name="advice" v-model="advice" value="6">
                            <label for="radio6" class="radio-label">6</label>
                        </p>
                        <p>
                            <input type="radio" id="radio7" name="advice" v-model="advice" value="7">
                            <label for="radio7" class="radio-label">7</label>
                        </p>
                        <p>
                            <input type="radio" id="radio8" name="advice" v-model="advice" value="8">
                            <label for="radio8" class="radio-label">8</label>
                        </p>
                        <p>
                            <input type="radio" id="radio9" name="advice" v-model="advice" value="9">
                            <label for="radio9" class="radio-label">9</label>
                        </p>
                        <p>
                            <input type="radio" id="radio10" name="advice" v-model="advice" value="10">
                            <label for="radio10" class="radio-label">10</label>
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="section section_4">
            <div class="wrapper d-column">
                <p class="bubble__text text_4">
                    Спасибо!
                </p>
            </div>
        </section>


        <section class="section section_5"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">

                <p class="bubble__text text_5">
                    Особую благодарность мы выражаем Анне Исаенко за то, что  поделилась своими методами профориентации, которые легли в основу этого курса. Если у тебя остались вопросы и ты все-таки хотел(а) бы получить консультацию - рекомендуем обратиться к ней через ее <a href="https://www.instagram.com/annaisayenko/?hl=ru" target="_blank">Инстаграм</a> или <a href="https://www.prof-wybor.by" target="_blank">сайт</a>.
                    <br><br>
                    Упомяни, что ты от teenjob, и тебе будет скидка 20%</p>

                <img src="/images/stepA-3.png" class="lady">
            </div>
        </section>

        <section class="section section_6">
            <div class="wrapper d-column">
                <p class="bubble__text text_6" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    Твой емейл для получения результатов (перепроверь правильность!):
                </p>
                <div class="text-input-group">
                    <input id="email" :class="{error: validation.hasError('email')}" type="text" v-model="email" maxlength="90" class="text-input" placeholder="email@email.com"></input>
                </div>
            </div>
        </section>

        <section class="section section_7">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="button button-finish" to="welcome"><span>Завершить курс</span></router-link>
            </div>
        </section>

        <modal v-if="showModal" @close="showModal = false">
            <!--
          you can use custom content here to overwrite
          default content
        -->


            <div class="loader" v-if="modalLoading" slot="header">
            </div>
            <h3 v-else slot="header">Результаты уже на пути<br>(проверьте спам)</h3>

            <div slot="body" href="https://profguide.org">
                <a class="button" href="https://profguide.org">
                    <span class="button_text">
                            OK
                    </span>
            </a>
            </div>
        </modal>

    </main>
</template>

<script>
import {Validator} from "simple-vue-validator";
import Modal from "./modal"

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
        "spoiler": Spoiler,
        "modal": Modal
    },
    data: function() {
        return {
            progressHeading: "3/10",
            email: '',
            impression: '',
            critic: '',
            advice: '',
            showModal: false,
            modalLoading: false,
            payload: '',
            progress: 0,
        }
    },
    validators: {

        email: function (value) {
            return Validator.value(value).required().email();
        },

        advice: function (value) {
            return Validator.value(value).required();
        },

        impression: function (value) {
            return Validator.value(value).required();
        },

        critic: function (value) {
            return Validator.value(value).required();
        },
    },
    watch: {
        email(newValue) {
            localStorage.email = newValue;
            this.disabled = false
        },

        critic(newValue) {
            localStorage.critic = newValue;
            this.disabled = false
        },

        impression(newValue) {
            localStorage.impression = newValue;
            this.disabled = false
        },

        advice(newValue) {
            localStorage.advice = newValue;
            this.disabled = false
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.advice) {
            this.advice = localStorage.advice;
        }

        if (localStorage.email) {
            this.email = localStorage.email;
        }

        if (localStorage.critic) {
            this.critic = localStorage.critic;
        }

        if (localStorage.impression) {
            this.impression = localStorage.impression;
        }
    },

    methods: {
        click() {


        },


        keydown: function(e) {
            console.log(e)
        },

        getCookie (name) {
            let value = `; ${document.cookie}`;
            let parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        },
    },



    beforeRouteLeave (to, from, next) {

        if(to.name === "welcome") {
            var that = this;
            this.$validate()
                .then(function(success) {
                    if (success) {
                        that.modalLoading = true
                        that.showModal = true
                        next(false);
                        that.payload = {

                            age: localStorage.age,
                            country: localStorage.country,
                            city: localStorage.city,
                            skills: localStorage.skills,
                            stepANotes: localStorage.stepANotes,

                            futurePlace: localStorage.futurePlace,
                            futurePlaceDescription: localStorage.futurePlaceDescription,
                            currentPlace: localStorage.currentPlace,
                            upTime: localStorage.upTime,
                            morningDeals: localStorage.morningDeals,
                            afterMorningDeals: localStorage.afterMorningDeals,
                            workplace: localStorage.workplace,

                            building: localStorage.building,
                            size: localStorage.size,
                            role: localStorage.role,
                            stepCompanyNotes: localStorage.stepCompanyNotes,

                            departments:  localStorage.departments,
                            stepDepartmentsNotes: localStorage.stepDepartmentsNotes,

                            cat: localStorage.cat,

                            interestsDesc: localStorage.interestsDesc,
                            activitiesDesc: localStorage.activitiesDesc,
                            talents: localStorage.talents,
                            steptalentsTalentsDescription: localStorage.steptalentsTalentsDescription,

                            remoteType: localStorage.remoteType,

                            future: localStorage.future,
                            steps: localStorage.steps,

                            email: localStorage.email,

                            advice: localStorage.advice,
                            critic: localStorage.critic,
                            impression: localStorage.impression,
                        };
                        var data = that.payload
                        var headers = {
                            'content-type': 'application/json',
                            //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }

                        try {
                            that.axios
                                .post('/send', data, {
                                    headers
                                })
                                .then(data => {
                                    console.log("Done")
                                    that.modalLoading = false
                                })
                                .catch(err => {
                                    console.log("err")
                                    that.modalLoading = false
                                });
                        }
                        catch (e) {
                           console.log(e)
                           that.modalLoading = false
                        }
                    }
                    else {

                        next(false);

                        that.$nextTick(() => {
                            const el = that.$el.querySelector(".error:first-of-type");

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
            next();
        }
    }
}






</script>
<style lang="scss" scoped>

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
    display: none;
    line-height: 22px;
    background: #FFFFFF;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #3C9194;
}

</style>


