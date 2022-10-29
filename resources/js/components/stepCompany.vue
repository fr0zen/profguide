<template>
    <main class="content stepCompany" >
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <h2>Хорошо, ты решил(а) отправиться в компанию</h2>
                <h3>Но компании бывают разные. Давай разберемся</h3>
            </div>
        </section>

        <section class="section section_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_1">
                        Опиши место, в котором ты работаешь в будущем:
                        <br>&nbsp; &nbsp; &#8226; Как оно выглядит?
                        <br>&nbsp; &nbsp; &#8226; На каком этаже находится?
                        <br>&nbsp; &nbsp; &#8226; Ты работаешь в команде с другими людьми или самостоятельно?
                        <br>&nbsp; &nbsp; &#8226; Ты один(на) в кабинете или с коллегами, сколько их?
                        <br>И помни - мы мечтаем
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_2">
            <div class="wrapper">
                <textarea-autosize
                    class="textarea"
                    placeholder="Это большое/маленькое здание ...."
                    ref="myTextarea"
                    v-model="building"
                    :class="{error: validation.hasError('building')}"
                    maxlength="1000"
                    :min-height="120"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_3" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <div class="bubble bubble_inverted self-end">
                    <p class="bubble__text text_2">
                        В какой компании тебе хотелось бы работать?
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_4" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="block">
                    <img src="/images/office.png" class="office">
                </div>
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_3">
                        <strong>Большая компания (от 200 чел.):</strong>
                        <br>
                        <br>1. У каждого есть своя конкретная функция. Это является хорошей возможностью стать высококлассным специалистом именно в своей специализации.
                        <br>2. Четкие бизнес-процессы с редкими изменениями, оправданная масштабами бюрократия.
                        <br>3. Все люди компании не могут знать друг друга, но они объединены общей корпоративной культурой, правилами
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_5" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper dr-reverse">
                <div class="block">
                    <img src="/images/office2.svg" class="office2">
                </div>

                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_4">
                        <strong>Маленькая компания (до 150 чел.):</strong>
                        <br>
                        <br>1. Один человек выполняет несколько функций, т.к. людей мало, а проекты делать нужно и не всегда хватает узких специалистов. Поэтому здесь можно многое попробовать и многому научиться, не только из своей узкой специализации.
                        <br>2. Больше гибкости и изменений в процессах, они протикают быстрее.
                        <br>3. Все сотрудники знают друг друга лично.
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_6">
            <div class="wrapper">
                <div class="radio-block" :class="{error: validation.hasError('size')}">
                    <h4>Я хочу работать:</h4>
                    <p>
                        <input type="radio" id="radio2" name="radio-group-2" v-model="size" value="В большой компании">
                        <label for="radio2" class="radio-label">В большой компании</label>
                    </p>
                    <p>
                        <input type="radio" id="radio3" name="radio-group-2" v-model="size" value="В маленькой компании">
                        <label for="radio3" class="radio-label">В маленькой компании</label>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_7" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="bubble">
                    <p class="bubble__text text_5">
                        В какой роли ты себя видишь? (выбери наиболее близкий тебе вариант)
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_8" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="radio-block" :class="{error: validation.hasError('role')}">
                    <p>
                        <input type="radio" id="work2" name="radio-group" v-model="role" value="1">
                        <label for="work2" class="radio-label"><strong>Сотрудник в команде</strong> - твоя основная задача вместе с командой произвести продукт или оказать услугу. Вы все вместе добиваетесь поставленной перед вами общей цели, и попутно личных профессиональных целей.</label>
                    </p>
                    <p>
                        <input type="radio" id="work3" name="radio-group" v-model="role" value="2">
                        <label for="work3" class="radio-label"><strong>Руководитель команды или подразделения</strong> - твоя задача как руководителя планировать, ставить сотрудикам задачи, сроки и контролировать достижение общей цели, стоящей перед командой или подразделением. Он сам практически не выполняет работу. Например, руководитель дизайнерского отдела сам практически не имеет времени на практику в дизайне, но раз он стал руководителем, то у него уже есть многолетний опыт и он его использует для координации команды и менторства. Он сам ответственен за работу сотрудников подразделения/команды и достижение целей.</label>
                    </p>
                    <p>
                        <input type="radio" id="work4" name="radio-group" v-model="role" value="3">
                        <label for="work4" class="radio-label"><strong>Отдельно работающий профессионал</strong> - у тебя отдельный кабинет или ты работаешь удаленно, твои услуги высоко ценятся и ты единственный специалист, к которому обращаются в компании для решения определенного ряда вопросов. Ты работаешь в основном самостоятельно, а не в команде.</label>
                    </p>
                    <p>
                        <input type="radio" id="work5" name="radio-group" v-model="role" value="4">
                        <label for="work5" class="radio-label"><strong>Основатель/один из основателей</strong> - твоя задача строить прибыльный бизнес, анализировать показатели и принимать стратегически важные решения, от которых будет зависеть судьба компании. Основатели ставят задачи перед рукововодителями и следят за достижением высокоуровневых целей, а также решают какова будет корпоративная культура компании. Основная забота основателя, чтобы его бизнес был конкурентоспособным и прибыльным.</label>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_9">
            <div class="wrapper d-column">
                <div class="bubble bubble_inverted self-end">
                    <p class="bubble__text text_6">
                        Заметки
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_10">
            <div class="wrapper">
                <textarea-autosize
                    class="textarea"
                    placeholder="Если есть еще какие-то мысли, просто напиши их сюда, чтобы не забыть :)"
                    ref="myTextarea"
                    v-model="notes"
                    maxlength="1000"
                    :min-height="120"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>

        <section class="section section_11">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" to="step-departments"><span>Готово, идем дальше</span></router-link>
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
            progressHeading: "3/10",
            notes: '',
            building: '',
            role: '',
            size: '',
            progress: ''
        }
    },
    validators: {
        role: function (value) {
            return Validator.value(value).required();
        },
        building: function (value) {
            return Validator.value(value).required();
        },

        size: function (value) {
            return Validator.value(value).required();
        },
    },
    watch: {

        role(newValue) {
            localStorage.role = newValue;
            this.disabled = false
        },

        building(newValue) {
            localStorage.building = newValue;
            this.disabled = false
        },

        notes(newValue) {
            localStorage.stepCompanyNotes = newValue;
            this.disabled = false
        },

        size(newValue) {
            localStorage.size = newValue;
            this.disabled = false
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.role) {
            this.role = localStorage.role;
        }

        if (localStorage.building) {
            this.building = localStorage.building;
        }

        if (localStorage.stepCompanyNotes) {
            this.notes = localStorage.stepCompanyNotes;
        }

        if (localStorage.size) {
            this.size = localStorage.size;
        }
    },

    beforeRouteLeave (to, from, next) {
        console.log(to)
        if(to.name === "stepDepartments") {
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


