<template>
    <main class="content stepWildCat" >
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section">
            <div class="wrapper d-column" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                <h2>Итак, ты дикий котик</h2>
            </div>
        </section>

        <section class="section section_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <img src="/images/wild-cat.png" class="wildcat">
                <div class="block">
                    <p class="bubble__text text_1">
                        Это значит, что тебе нужно научиться создавать продукт/услугу, находить клиентов и продавать. А еще, если ты не хочешь охотиться на мышей в одиночку или у тебя в планах построить большую компанию - тебе понадобятся навыки управления людьми и процессами.
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_2" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">

                    <div class="bubble bubble_unstyled">
                        <p class="bubble__text text_2">
                            Тебе как предпринимателю для обучения в ВУЗе полезнее всего будет выбрать одно из 4 направлений. И тут решать тебе, в зависимости от того, что ты считаешь для себя более полезным:
                        </p>
                    </div>
            </div>
        </section>

        <section class="section section_3" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                    <p class="bubble__text text_1">
                        1. <i>Маркетинг</i> - любому предпринимателю нужно уметь находить клиентов, это основное.
                        <br><br>
                        2. <i>Менеджмент</i> - этому тоже нужно учиться, если ты собираешься координировать команду, строить компанию.
                        <br><br>
                        3. <i>Финансовый менеджмент</i> - бизнес - это про деньги, нужно уметь ими распоряжаться, чтобы они были. Тоже скорее, если вы хотите работать не самостоятельно, а создать компанию. Грамотно просчитывать и вести финансы важно для компании, чтобы понимать она прибыльная или убыточная и принимать верные управленческие решения.
                        <br><br>
                        4. Конкретно то, <i>ЧТО</i> ты собираешься продавать в качестве продукта или услуги. Ты можешь научиться и сам поработать специалистом в той сфере, которую выбираешь для бизнеса, чтобы понимать ее как никто, знать как работают профессионалы в этой сфере. Это поможет настроить верные процессы в своей компании.
                        <br><br>
                        Но главное, что должен делать предприниматель - это ДЕЙСТВОВАТЬ. И учиться на своем опыте, а также на опыте других предпринимателей.
                    </p>
            </div>
        </section>

        <section class="section section_4" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <img src="/images/wild-cat-2.png" class="homecat">
                <p class="bubble__text text_4">
                    Тебе будет очень полезно попасть в бизнес-сообщество и начать делать свои проекты, или присоединяться к идеям друзей и начинать зарабатывать первые деньги. Предприниматели учатся на опыте, тем более что мир нестабилен и вам необходимо развивать свою чуткость к проблемам, которые может решить ваш бизнес и быстро тестировать гипотезы на клиентах.
                </p>
            </div>
        </section>

        <section class="section section_5" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="bubble bubble_unstyled bubble_inverted">
                    <p class="bubble__text text_5">
                        А сейчас ответь честно. Продавал(а) ли ты уже что-нибудь? (даже на куфаре, но лучше, если у тебя есть чуть более серьезный опыт предпринимательских инициатив, как сбор и продажа ягод и т.п.)   </p>
                </div>

                <div :class="{error: validation.hasError('sell')}" class="radio-block">
                    <p>
                        <input type="radio" id="test2" name="radio-group" v-model="sell" value="true">
                        <label for="test2" class="radio-label">Да</label>
                    </p>
                    <p>
                        <input type="radio" id="test3" name="radio-group" v-model="sell" value="false">
                        <label for="test3" class="radio-label">Нет</label>
                    </p>
                </div>
            </div>
        </section>


        <section class="section section_6" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <p class="bubble__text text_1">
                    Если да, то скорее всего тебе правда в бизнес. Развивайся в этой теме. Продолжай учиться и делать свои предпринимательские проекты. Если тебе еще нет 18, посмотри какие есть бизнес-курсы для подростков вроде detimba и teenguru, или даже like-центр - ты попадешь в сообщество таких же ребят  как ты сам и будешь учиться у лучших, а это дорогого стоит - чем раньше начнешь учиться предпринимательству, тем лучше.
                    <br><br><br>
                    Если ты ничего не продавал(а), тогда это странно: либо твой потенциал еще не раскрылся, либо это все-таки не твое. Чтобы проверить ты должен(на) поставить перед собой цель по системе SMART (загугли:)) - заработать первые деньги к определенному дню. Или как минимум собрать всех на свой мастер-класс или подобное, и собрать с пришедших, если не деньги, то пускай шоколадки или апельсинки) Тебе надо прочувствовать как это - привлекать клиентов и брать с них деньги/что-то еще за свою работу - подходит тебе такой формат или нет.
                </p>
            </div>
        </section>

        <section class="section section_7">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" to="step-talents"><span>Дальше</span></router-link>
            </div>
        </section>

        <section class="section section_8">
            <div class="wrapper">
                <router-link class="back" to="step-cat"><span>Назад</span></router-link>
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



export default {
    components: {
        "progress-bar": ProgressBar,
    },
    data: function() {
        return {
            progressHeading: "6/10",
            sell: '',
            progress: 0
        }
    },
    validators: {
        sell: function (value) {
            return Validator.value(value).required();
        },
    },
    watch: {
        sell(newValue) {
            localStorage.sell = newValue;
            this.disabled = false
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.sell) {
            this.sell = localStorage.sell;
        }
    },

    methods: {
        keydown: function(e) {
            console.log(e)
        }
    },

    beforeRouteLeave (to, from, next) {
        console.log(to)
        if(to.name === "stepTalents") {
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
                            const el = that.$el.querySelector(".error");
                            console.log(el);
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
    line-height: 22px;
    display: none;
    background: #FFFFFF;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #3C9194;
}

</style>


