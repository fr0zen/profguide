<template>
    <main class="content welcome" >
                <section class="header">

            <div class="wrapper d-column" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                <h2>
                    Привет!
                </h2>
                <h3>
                    Здесь начинается твое путешествие в определение своей профессии
                </h3>
                <div class="road">
                </div>
                <a class="down" href="#start">
                    Поехали
                </a>
            </div>
        </section>
        <section id="start" class="section section_1" >
            <div class="wrapper">
                <div class="block half-block">
                    <div class="bubble">
                        <p class="bubble__text text_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                            Сколько лет назад родители вынесли тебя маленького и совсем беззащитного на ручках из роддома?
                        </p>
                    </div>
                    <input type="number" min="1" max="150" name="age" class="text-input" v-model="age" placeholder="Возраст: лет" :class="{error: validation.hasError('age')}"></input>
                </div>

                <div class="block half-block d-reverse">
                    <div class="block block-row flex-end">
                        <div :class="{error: validation.hasError('sex')}" class="radio-block" >
                            <p>
                                <input type="radio" id="sexm" name="radio-group" v-model="sex" value="m">
                                <label for="sexm" class="radio-label">М</label>
                            </p>
                            <p>
                                <input type="radio" id="sexf" name="radio-group" v-model="sex" value="f">
                                <label for="sexf" class="radio-label">Ж</label>
                            </p>
                        </div>
                        <div class="bubble bubble_inverted">
                            <p class="bubble__text text_2">
                                Твой пол
                            </p>
                        </div>
                    </div>
                    <img class="baby" :src="babysrc">
                </div>
            </div>
        </section>
        <section class="section section_2" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble">
                    <p class="bubble__text text_3">
                        Когда ты был(а) совсем маленьким(ой), то ты не мог(ла) позаботиться о себе самостоятельно
                    </p>
                </div>
                <div class="bubble bubble_unstyled bubble_inverted altered">
                    <p class="bubble__text text_4">
                        Поэтому твои родители и другие члены семьи заботились о тебе и вели машину жизни, решая, куда вы поедете (на ужин, в отпуск, в какую школу ты пойдешь и т.д.), а ты сидел(а) на заднем сидении и просто ехал(а), хотя твое мнение иногда тоже учитывалось - но все же не ты был(а) у руля
                    </p>
                </div>
                <img src="/images/car.svg" class="car">
            </div>
        </section>
        <section class="section section_3" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_5">
                        Но ты становишься взрослым(ой), и твоя первостепенная задача - взять руль в свои руки и научиться управлять своей жизнью, принимая самостоятельные взрослые решения. Выбор профессии - это первый взрослый выбор, поэтому он далеко не всегда дается легко. Ведь ты чувствуешь, что за этим решением далеко идущие последствия, касающиеся тебя лично  </p>
                </div>
                <img src="/images/driving.png" class="driving">
            </div>
        </section>
        <section class="section section_4" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <div class="bubble bubble_inverted">
                        <p class="bubble__text text_6">
                            В ближайший час я буду твоим инструктором по “вождению”, так что внимательно слушай и записывай свои ответы на мои вопросы
                        </p>
                    </div>
                    <input class="styled-checkbox" id="confirmCourse" type="checkbox" true-value="true" false-value="false" v-model="confirmCourse">
                    <!--<label for="confirmCourse" :class="{error: validation.hasError('confirmCourse')}" class="checkbox">Понятно</label>-->
                </div>
                <img src="/images/lady.png" class="lady">
            </div>
        </section>

        <section class="section section_5" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble">
                    <p class="bubble__text text_7">
                        Для начала - вот, что еще тебе важно знать про взрослую жизнь:
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_6" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <ul class="list list-1">
                    <li>
                        <p>
                            Ты сам(а) выбираешь себе путь, сам(а) ставишь перед собой цели, которых хочешь достичь - в этом заключается твоя свобода.
                        </p>
                    </li>
                    <li>
                        <p>
                            Но взрослая жизнь - это и ответственность за принятые решения, а значит, и за принятые риски. Если что-то пойдет не так, то винить некого, нужно делать выводы, обдумывать план действий и принимать новые решения.
                        </p>
                    </li>
                    <li>
                        <p>
                            На дороге, на которую ты свернешь, могут появляться кочки, выбоины, будут встречаться неприятные попутчики, и тебе придется научиться это все объезжать, т.е. решать проблемы, возникшие на пути. Это означает - учиться на своем опыте.
                        </p>
                    </li>
                    <li>
                        <p>
                            Только ты определяешь, как многого ты достоен(на) и как многого ты хочешь добиться - и только от твоего желания и действий зависит, где ты сейчас находишься, как себя чувствуешь и куда идешь.
                        </p>
                    </li>
                    <li>
                        <p>
                            Если цель действительно важна и лично твоя, то ты ее добьешься, преодолевая возникающие на пути преграды.
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section section_7" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <div class="bubble bubble_unstyled bubble_inverted">
                        <p class="bubble__text text_8">
                            И еще одно. Путь к цели не всегда прямой, и это нормально. Есть множество вариантов ее достижения. От тебя зависит какой вариант выберешь именно ты и какие коррективы будешь вносить по дороге, если вдруг на пути встретятся преграды или ты сам(а), твои ценности со временем будут меняться
                        </p>
                    </div>
                    <input class="styled-checkbox" id="confirmGoal" type="checkbox" v-model="confirmGoal" true-value="true" false-value="false" >
                    <!--<label :class="{error: validation.hasError('confirmGoal')}" for="confirmGoal" class="checkbox only-desktop">Понятно</label>-->
                </div>

                <img class="path" src="/images/path.svg">

                <input class="styled-checkbox" id="confirmGoal-2" type="checkbox" true-value="true" false-value="false" v-model="confirmGoal">
                <!--<label :class="{error: validation.hasError('confirmGoal')}" for="confirmGoal-2" class="checkbox only-mobile checkbox-padded">Понятно</label>-->
            </div>
        </section>
        <section class="section section_8">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" to="step-A">Продолжить путь</router-link>
            </div>
        </section>
    </main>
</template>

<script>
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

import {Validator} from 'simple-vue-validator'

    export default {
        components: {
            "progress-bar": ProgressBar,

        },

        data: function() {
            return {
                progressHeading: "0/10",
                babysrc: "/images/baby-m.svg",
                sex: '',
                confirmGoal: true,
                confirmCourse: true,
                age: '',
                hash: this.$route.hash,
                progress: 0
            }
        },
        validators: {
            sex: function (value) {
                return Validator.value(value).required();
            },
            age: function (value) {
                return Validator.value(value).required().integer().greaterThan(1);
            },
            confirmGoal: function (value) {
                return Validator.value(value).required().regex('^true$');
            },
            confirmCourse: function (value) {
                return Validator.value(value).required().regex('^true$');
            },
        },
        watch: {
            sex(newValue) {
                if(newValue === 'f') {
                    this.babysrc = "/images/baby.png"
                }
                else {
                    this.babysrc = "/images/baby-m.svg"
                }

                localStorage.sex = newValue;

            },

            age(newValue) {
                localStorage.age = newValue;
                this.disabled = false
            },

            confirmGoal(newValue) {
                localStorage.confirmGoal = newValue;
                this.disabled = false
            },

            confirmCourse(newValue) {
                localStorage.confirmCourse = newValue;
                this.disabled = false
            },
        },
        mounted() {
            //localStorage.clear()
            localStorage.progress = 0;

            if (localStorage.progress) {
                this.progress = localStorage.progress;
            }

            if (localStorage.sex) {
                this.sex = localStorage.sex;
            }

            if (localStorage.age) {
                this.age = localStorage.age;
            }

            if (localStorage.confirmGoal) {
                this.confirmGoal = true;
            }

            if (localStorage.confirmCourse) {
                this.confirmCourse = true;
            }
        },
        methods:{
            scrollMeTo(refName) {
                var element = this.$refs[refName];
                var top = element.offsetTop;

                window.scrollTo(0, top);
            },

            scrollToError() {
                    const el = document.querySelector(".error")[0];
                    var top = el.offsetTop;
                    console.log(el)
                    console.log(top)
                    window.scrollTo(0, top);
            },

            keydown: function(e) {
                console.log(e)
            }
        },

        beforeRouteLeave (to, from, next) {
            console.log("route")
            if(to.name === "stepA") {
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



        }
    }
</script>
<style lang="scss" scoped>
$progressbar-height: 0.5rem !default;
$progressbar-background: #3C9194 !default;
$progressbar-bar-height: 100% !default;
$progressbar-bar-background: #ffffff !default;
$progressbar-bar-transition: transform 2s ease !default;

.progressbar {
    height: $progressbar-height;
    background: $progressbar-background;

    &-bar {
        height: $progressbar-bar-height;
        background: $progressbar-bar-background;
        transition: $progressbar-bar-transition;
    }
}
.progress-heading {
    font-family: Open Sans, sans-serif;
    font-size: 16px;
    line-height: 22px;
    background: #3C9194;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #FFFFFF;
}
.bg-info {
    background-color: #ffffff;
}
</style>


