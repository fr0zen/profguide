<template>
    <main class="content stepB">
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <h2  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>А теперь представь, куда бы ты хотел(а) прийти?</h2>

        <section class="section section_1"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <img class="header-icon only-mobile" src="/images/stepB-road.png">
                <img class="header-icon only-desktop" src="/images/stepB-road-d.png">
            </div>
        </section>
        <section class="section section_2"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <div class="bubble bubble_inverted">
                        <p class="bubble__text text_2">
                            Чтобы представить себе точку B, первое, что тебе нужно сделать - это откинуть все условности и здравый смысл) Да-да
                        </p>
                    </div>
                </div>
                <img src="/images/stepA-3.png" class="stepA-3">
            </div>
        </section>
        <section class="section section_3"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <p class="text_3">
                    Благодаря своей воле и желанию, а также случаю и другим людям, при наличии многочисенных возможностей современного мира и тем более в многолетней перспективе, ты способен(на) на Очень многое. Сегодняшним голивудским знаменитостям, великолепным ученым, бизнесменам и всем другим людям, имевшим мечту и добившимся ее реализации, пришлось пройти свой путь, включавший в себя поиск этой мечты, труд для ее достижения и “долю везения и чудес”. Ты сейчас делаешь первый шаг - определяешь свою мечту. А мечтать нужно смело и дерзко, не беря во внимание никакие “если” и “у меня не получится”, “нет подходящего вуза” и т.д. Все решаемо, если захотеть и задаться целью. Поэтому пока просто помечтай.
                </p>
                <input class="styled-checkbox" id="confirmFirst" type="checkbox" v-model="confirmFirst" true-value="true" false-value="false">
                <!--<label for="confirmFirst" :class="{error: validation.hasError('confirmFirst')}" class="checkbox">Понятно</label>-->
            </div>
        </section>
        <section class="section section_4" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper centered">
                <div class="bubble self-start">
                    <p class="bubble__text text_4">
                        Представь себя через 10 лет
                    </p>
                </div>
                <p class="text_5">
                    Тебе <strong>{{ (Number(age) + 10) }}</strong> - это прекрасный возраст, возраст твоего профессионального расцвета. Ты здоров(а) и успешен(на), и каждый день проходит так, как ты для себя определил(а).
                    <br>
                    <br>
                    Расскажи о своем типичном дне через 10 лет. Помни, что мы мечтаем - нет ограничений, подумай, как бы ты хотел(а), чтобы проходил твой будний день?
                </p>
            </div>
        </section>

        <section class="section section_5" >
            <div class="wrapper wrapper_column centered" >
                <div class="bubble bubble_inverted"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <p class="bubble__text text_6">
                        Начнем с того, где ты просыпаешься утром через 10 лет? Для начала географически.
                        <br>

                        <strong>Напиши страну и/или город, в котором ты бы хотел(а) жить?</strong> Вариант "пока не знаю" - тоже вариант, но все же вряд ли это Зимбабве и т.п., напиши хотя бы примерно / опиши это место, если еще не уверен(а)
                    </p>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="Я хочу жить в ..."
                    ref="futurePlaceTextarea"
                    v-model="futurePlace"
                    maxlength="1000"
                    :class="{error: validation.hasError('futurePlace')}"
                    :height="40"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_6" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_7">
                        Через 10 лет ты живешь в городе или за городом? Если город, то он большой или маленький? Опиши поподробнее, пожалуйста, что это за место, и почему тебе нравится именно такой вариант
                    </p>
                </div>
                <img src="/images/home.png" class="home">
            </div>
        </section>
        <section class="section section_7" >
            <div class="wrapper">
                <textarea-autosize
                    class="textarea"
                    placeholder="Я хочу жить в ....., потому что ......."
                    ref="futurePlaceDescriptionTextarea"
                    v-model="futurePlaceDescription"
                    maxlength="1000"
                    :min-height="120"
                    :class="{error: validation.hasError('futurePlaceDescription')}"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_8" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <div class="bubble bubble_inverted">
                        <p class="bubble__text text_8">
                            Ты живешь в квартире или в доме, как выглядит твое жилище?
                        </p>
                    </div>
                </div>
                <img src="/images/room.png" class="room">
            </div>
        </section>

        <section class="section section_9">
            <div class="wrapper">
                <textarea-autosize
                    class="textarea"
                    placeholder="Я живу в ..."
                    ref="currentPlaceTextarea"
                    v-model="currentPlace"
                    maxlength="1000"
                    :class="{error: validation.hasError('currentPlace')}"
                    :min-height="120"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_10">
            <div class="wrapper wrapper_column centered">
                <div class="bubble self-start" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <p class="bubble__text text_9">
                        Во сколько ты встаешь утром?
                    </p>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="Я встаю в ..."
                    ref="upTimeTextarea"
                    v-model="upTime"
                    maxlength="1000"
                    :min-height="120"
                    :class="{error: validation.hasError('upTime')}"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_11">
            <div class="wrapper wrapper_column centered">
                <div class="bubble bubble_inverted bubble_unstyled" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <p class="bubble__text text_10">
                        Что ты делаешь потом - занимаешься ли йогой, например, или сразу идешь готовить завтрак, или кушаешь в ближайшем кафе?
                        <br>
                        Опиши, как ты проводишь свое утро после пробуждения в жизни через 10 лет?
                    </p>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="Утром я ..."
                    ref="morningDealsTextarea"
                    v-model="morningDeals"
                    maxlength="1000"
                    :class="{error: validation.hasError('morningDeals')}"
                    :min-height="120"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_12">
            <div class="wrapper wrapper_column centered">
                <div class="bubble self-start" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <p class="bubble__text text_11">
                        А потом куда ты едешь/идешь, или остаешься дома? Опиши подробнее, как продолжается твой день
                    </p>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="После своих любимых утренних активностей, я ..."
                    ref="afterMorningDealsTextarea"
                    v-model="afterMorningDeals"
                    :min-height="120"
                    :class="{error: validation.hasError('afterMorningDeals')}"
                    maxlength="1000"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>


        <section class="section section_13">
            <div class="wrapper dr-reverse" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                <div class="block half-block">
                    <div class="bubble bubble_unstyled bubble_inverted">
                        <p class="bubble__text text_12">
                            Отметь здесь, пожалуйста, что ты выбрал(а): остаться работать дома (как фрилансер, например) или пойти работать в конкретное место (в компанию, офис и т.д.)?
                        </p>
                    </div>
                </div>
                <div class="block half-block">
                    <div :class="{error: validation.hasError('workplace')}" class="radio-block">
                        <p>
                            <input type="radio" id="test3" name="radio-group" v-model="workplace" value="outside">
                            <label for="test3" class="radio-label">Иду/еду на работу</label>
                        </p>
                        <p>
                            <input type="radio" id="test2" name="radio-group" v-model="workplace" value="inside">
                            <label for="test2" class="radio-label">Остаюсь дома</label>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section section_14">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" :to="next"><span>Готово, идем дальше</span></router-link>
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
            progressHeading: "2/10",
            futurePlace: '',
            futurePlaceDescription: '',
            confirmFirst: true,
            currentPlace: '',
            upTime: '',
            progress: 0,
            age: '',
            morningDeals: '',
            afterMorningDeals: '',
            workplace: '',
            next: "step-company",
        }
    },

    validators: {

        futurePlace: function (value) {
            return Validator.value(value).required();
        },
        futurePlaceDescription: function (value) {
            return Validator.value(value).required();
        },
        currentPlace: function (value) {
            return Validator.value(value).required();
        },
        upTime: function (value) {
            return Validator.value(value).required();
        },
        morningDeals: function (value) {
            return Validator.value(value).required();
        },
        afterMorningDeals: function (value) {
            return Validator.value(value).required();
        },
        workplace: function (value) {
            return Validator.value(value).required();
        },
        confirmFirst: function (value) {
            return Validator.value(value).required().regex('^true$');
        },


    },
    watch: {
        confirmFirst(newValue) {
            localStorage.stepBconfirmFirst = newValue;
            this.disabled = false
        },

        futurePlace(newValue) {
            localStorage.futurePlace = newValue;
            this.disabled = false
        },

        futurePlaceDescription(newValue) {
            localStorage.futurePlaceDescription = newValue;
            this.disabled = false
        },

        currentPlace(newValue) {
            localStorage.currentPlace = newValue;
            this.disabled = false
        },

        upTime(newValue) {
            localStorage.upTime = newValue;
            this.disabled = false
        },

        morningDeals(newValue) {
            localStorage.morningDeals = newValue;
            this.disabled = false
        },

        afterMorningDeals(newValue) {
            localStorage.afterMorningDeals = newValue;
            this.disabled = false
        },

        workplace(newValue) {

            localStorage.workplace = newValue;
            if(newValue === "inside") this.next = "step-remote"
                else
                    this.next = "step-company"
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.age) {
            this.age = localStorage.age;
        }

        if (localStorage.stepBconfirmFirst) {
            this.confirmFirst = true;
        }

        if (localStorage.futurePlace) {
            this.futurePlace = localStorage.futurePlace;
        }

        if (localStorage.upTime) {
            this.upTime = localStorage.upTime;
        }

        if (localStorage.futurePlaceDescription) {
            this.futurePlaceDescription = localStorage.futurePlaceDescription;
        }

        if (localStorage.currentPlace) {
            this.currentPlace = localStorage.currentPlace;
        }

        if (localStorage.morningDeals) {
            this.morningDeals = localStorage.morningDeals;
        }

        if (localStorage.afterMorningDeals) {
            this.afterMorningDeals = localStorage.afterMorningDeals;
        }

        if (localStorage.workplace) {
            this.workplace = localStorage.workplace;
        }
    },
    beforeRouteLeave (to, from, next) {
        if((to.name === "stepCompany") || (to.name === "stepRemote")) {
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
