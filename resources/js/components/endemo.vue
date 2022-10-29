<template>
    <main class="content welcome" >
       <section class="demo-bar">
            <span>Demo version</span>
        </section>
        <section class="header" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>

            <div class="wrapper d-column">
                <h2>
                   Hi!
                </h2>
                <h3 @click.right.prevent @keydown="keydown">
                    This is where your journey to define your profession begins.
                </h3>
                <div class="road">
                </div>
                <a class="down" href="#start">
                    Let's go!
                </a>
            </div>
        </section>
        <section id="start" class="section section_1">
            <div class="wrapper">
                <div class="block half-block">
                    <div class="bubble">
                        <p class="bubble__text text_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                            How many years ago did your parents take you out of the maternity hospital, as small and defenseless baby, on their arms?
                        </p>
                    </div>
                    <input type="number" min="1" max="150" name="age" class="text-input" v-model="age" placeholder="Age: years" :class="{error: validation.hasError('age')}"></input>
                </div>

                <div class="block half-block d-reverse" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <div class="block block-row flex-end">
                        <div :class="{error: validation.hasError('sex')}" class="radio-block" >
                            <p>
                                <input type="radio" id="sexm" name="radio-group" v-model="sex" value="m">
                                <label for="sexm" class="radio-label">Male</label>
                            </p>
                            <p>
                                <input type="radio" id="sexf" name="radio-group" v-model="sex" value="f">
                                <label for="sexf" class="radio-label">Female</label>
                            </p>
                        </div>
                        <div class="bubble bubble_inverted">
                            <p class="bubble__text text_2">
                                Sex
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
                    <p class="bubble__text text_3" >
                       When you were a small child, you couldn't take care of yourself
                    </p>
                </div>
                <div class="bubble bubble_unstyled bubble_inverted altered">
                    <p class="bubble__text text_4">
                      So your parents and other family members took care of you and drove the machine of life, deciding where you would go (for dinner, on vacation, which school you would go to, etc.), and you were sitting in the back seat, although more or less often your opinion was also taken into account - but still you were not a person sitting behind the wheel.
                    </p>
                </div>
                <img src="/images/car.svg" class="car">
            </div>
        </section>
        <section class="section section_3" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_5">
                     But as you become an adult, your primary task is to take the wheel into your own hands and learn to manage your life by making independent adult decisions. The choice of a profession is the first adult choice, so it is not always easy because you feel that this decision has far-reaching consequences for you personally </p>
                </div>
                <img src="/images/driving.png" class="driving">
            </div>
        </section>
        <section class="section section_4" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <div class="bubble bubble_inverted">
                        <p class="bubble__text text_6">
                            In the next hour, I will be your "driving" instructor, so listen carefully and write down your answers to my questions
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
                        To start, here's what else you need to know about adulthood:
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_6" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <ul class="list list-1">
                    <li>
                        <p>
                            You choose your own path, you set yourself the goals you want to achieve - this is your freedom.
                        </p>
                    </li>
                    <li>
                        <p>
                            But adult life is also responsibility for the decisions made, and therefore for the risks taken. If something goes wrong, there is no one to blame, you need to draw conclusions, design a new plan and make new more wise decisions.
                        </p>
                    </li>
                    <li>
                        <p>
                            On the road you turn onto, bumps, potholes may appear, unpleasant fellow travelers will meet, and you will have to learn how to go around it all, i.e. solve problems along the way. This means learning from experience.
                        </p>
                    </li>
                    <li>
                        <p>
                           Only you determine how much you deserve and how much you want to achieve. And it depends only on your desire and actions where you are now, how you feel and where you are going.
                        </p>
                    </li>
                    <li>
                        <p>
                           If the goal is really important and yours personally, then you will finally achieve it by overcoming the obstacles that arise on the way.
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
                            One more thing. The path to the goal is not always straight, and that's okay. There are many options for achieving your dream. It depends on you which path you choose and what adjustments you will make along the way, if suddenly there are obstacles on the way or you, your values or priorities will change over time
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
          <router-link :class="{error: validation.hasError()}" class="next" to="/en/course-demo2">Continue</router-link>
        </div>
      </section>

    </main>
</template>

<script>
import Modal from "./modal";

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
import $ from "jquery";

    export default {
        components: {
            "progress-bar": ProgressBar,
            "modal": Modal
        },

        data: function() {
            return {
                progressHeading: "0/10",
                babysrc: "/images/baby-m.svg",
                sex: '',
                confirmGoal: true,
                confirmCourse: true,
                seed: Date.now(),
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('value'),
                age: '',
                showModal: false,
                hash: this.$route.hash,
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
            },
        },
        mounted() {
            localStorage.clear()
            this.babysrc = "/images/baby-m.svg";
            this.sex = "";
            this.confirmGoal = true;
            this.confirmCourse = true;
            this.age = '';
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
            },
            go() {
                this.showModal = true
            },
            submitForm: function (e) {
                e.preventDefault();

                $.ajax({
                    url: $('form').attr('action'),
                    type: 'post',
                    data: $('form').serialize(),
                    success: function (data) {


                        if (data) {
                            $('form').attr('action', 'https://payment.webpay.by');

                            $("#order").val(data.info.order_num_id);
                            $("#signatureOpen").val(data.info.wsb_signature_open);
                            $("#signature").val(data.info.wsb_signature);
                            $("#seed").val(data.info.wsb_seed);
                            this.data = $('form').serialize();
                            $('form').unbind('submit').submit();
                        } else {
                            console.log("order not created");
                        }
                    },
                    error: function () {
                        console.log("ajax call error");
                    }
                });
        },


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
.modal-footer {
    display: none;
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
.modal-footer {
    display: none;
}
.payment {

    .textbox {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 328px;
        height: 48px;
        border: none;
        outline: none;
        font-family: "Open Sans", sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 27px;
        text-align: center;
        margin-top: 25px;

        &::placeholder {
            color: lightgray;
        }


        border-radius: 25px;
        border: 1px solid #3c9194;

        margin-left: auto;
        margin-right: auto;

        z-index: 4;

    }
    @media all and (min-width: 1024px) {
        .textbox {
            font-size: 20px;
            &::placeholder {
                color: lightgray;
            }
        }
    }
    .button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 328px;
        height: 48px;
        border: none;
        outline: none;
        font-family: "Open Sans", sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 27px;
        text-align: center;

        color: #FFFFFF;
        margin-top: 30px !important;

        background: #41c0c4;
        border-radius: 25px;
        display: flex;
        margin-left: auto;
        margin-right: auto;
        transition: all .1s ease-in-out;
        cursor: pointer;
        z-index: 4;
        position: relative;
        text-decoration: none;
    }

    .button:hover {
        background-color: #4c9fa1;
        transition: all .1s ease-in-out;
    }
    .button_text {
        display: block;
        font-family: "Open Sans", sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 27px;
        text-align: center;

        color: #FFFFFF;
    }
}
</style>


