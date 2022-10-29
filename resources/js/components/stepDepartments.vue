<template>
    <main class="content stepDepartments" >
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <h2>В каждой компании есть одни и те же отделы</h2>
            </div>
        </section>

        <section class="section section_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div class="block">
                    <div class="bubble">
                        <p class="bubble__text text_1">
                            Выбери, какой из этих ближе по духу тебе? (можно выбрать максимум 2 отдела, но лучше один наиболее приоритетный)
                        </p>
                    </div>
                </div>
                <img src="/images/stepA-3.png" class="lady">
            </div>
        </section>

        <section class="section section_2" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">

                <div class="checkbox-block" :class="{error: validation.hasError('departments')}">
                    <p>
                        <input class="styled-checkbox" id="department1" type="checkbox" v-model="departments[0]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[0] === "true"))'>
                        <label for="department1" class="checkbox"><strong>Производство продукта/услуги.</strong>
                            Каждая компания что-то производит. На кондитерской фабрике люди, занятые в производстве - это кондитеры, тестомесы, заготовщики, пекари. А в IT-компании - это программисты, дизайнеры, девопсы, тестировщики, проектные менеджеры, системные администраторы и т.д. Это непосредственно те люди, которые участвуют в создании конечного продукта для потребителя/компании.
                        </label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department2" type="checkbox" v-model="departments[1]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[1] === "true"))'>
                        <label for="department2" class="checkbox"><strong>Склад.</strong> Люди, работающие на складе, должны следить что-бы хватало всего необходимого для производства товаров и  услуг, заказывать и выдавать это все для производства во время и в надлежащем качестве. </label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department3" type="checkbox" v-model="departments[2]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[2] === "true"))'>
                        <label for="department3" class="checkbox"><strong>Отдел исследований и инновационных разработок.</strong> Данный отдел работает над улучшением текущего продукта и созданием нового с улучшенными характеристиками для существующих клиентов компании или для привлечения новых. Данный отдел тесно работает с маркетинговым, чтобы создать успешный продукт, который будет пользоваться популярностью, эффективно решать проблему клиента и приносить прибыль. </label>

                    </p>
                    <p>
                        <input class="styled-checkbox" id="department4" type="checkbox" v-model="departments[3]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[3] === "true"))'>
                        <label for="department4" class="checkbox"><strong>Маркетинговый отдел.</strong> Вопрос, который себе всегда задают маркетологи: "Чего хочет клиент?". Маркетологи тщательно изучают своего клиента, его желания и страхи, чтобы подсказать какую "изюминку" добавить в продукт, как его назвать, упаковать и преподнести, чтобы клиент покупал именно у нас. Также маркетологи отслеживают показатели спроса на различные продукты, занимаются его рекламой и продвижением, отслеживают, что делают конкуренты. Основная цель - привести как можно больше клиентов. </label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department5" type="checkbox" v-model="departments[4]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[4] === "true"))'>
                        <label for="department5" class="checkbox"><strong>Продажи.</strong>
                            Люди, работающие в отделе продаж, болтуны от природы в хорошем смысле слова. Им нравится подолгу общаться с людьми, они позитивны, энергичны, легко заводят знакомства и выстраивают дружеские отношения. 80-90% рабочего времени они в коммуникации с конкретными клиентами, рассказывают о преимуществах продукта и "убеждают" клиента его приобрести.</label>
                    </p>

                    <p>
                        <input class="styled-checkbox" id="department6" type="checkbox" v-model="departments[5]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[5] === "true"))'>
                        <label for="department6" class="checkbox"><strong>HR-отдел (отдел по работе с персоналом).</strong>
                            Сотрудники этого отдела производят набор, отбор и адаптацию новых сотрудников, а также заботится об образовании, развитии и проведении корпоративного досуга текущих. Для HR-отдела важно, чтобы входящий в компанию новый человек соответствовал корпоративной культуре организации, т.е. легко влился в коллектив и не создавал в нем проблем, а также был подходящим специалистом для данной вакансии.</label>
                    </p>

                    <p>
                        <input class="styled-checkbox" id="department7" type="checkbox" v-model="departments[6]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[6] === "true"))'>
                        <label for="department7" class="checkbox"><strong>Логистика.</strong>
                            Этот отдел отвечает за доставку товара клиентам во время в целостности и сохранности.</label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department8" type="checkbox" v-model="departments[7]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[7] === "true"))'>
                        <label for="department8" class="checkbox"><strong>Служба безопасности.</strong>
                            Охрана собственности компании и порядка в ее стенах.</label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department9" type="checkbox" v-model="departments[8]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[8] === "true"))'>
                        <label for="department9" class="checkbox"><strong>Юридический отдел.</strong>
                            Правовая защита компании, ее интеллектуальной и материальной собственности, составление грамотных договоров, которые уберегут компанию от проблем с клиентами и партнерами в будущем.</label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department10" type="checkbox" v-model="departments[9]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[9] === "true"))'>
                        <label for="department10" class="checkbox"><strong>Аналитический отдел.</strong>
                            Анализ показателей бизнеса, ведение и предоставление отчетности (бухгалтерия, финансовый менеджмент). На основе предоставляемой аналитики руководители организации принимают ключевые решения.</label>
                    </p>
                    <p>
                        <input class="styled-checkbox" id="department11" type="checkbox" v-model="departments[10]" true-value="true" false-value="false" :disabled='disableCheck && !((departments[10] === "true"))'>
                        <label for="department11" class="checkbox"><strong>Топ-менеджмент.</strong>
                            Управление организацией на высшем уровне, принятие ключевых решений, заключение договоров с партнерами. Топ-менеджер ответственен за всю работу организации, ее прибыльность или по отдельным крупным направлениям компании.</label>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_3">
            <div class="wrapper d-column">
                <div class="bubble bubble_inverted self-end">
                    <p class="bubble__text text_3">
                        Заметки
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_4">
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

        <section class="section section_5" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <div :class="{error: validation.hasError('right')}" class="radio-block">
                    <h4>Ты молодец! Думаю уже многое стало ясно, не так ли?</h4>
                    <p>
                        <input type="radio" id="test2" name="radio-group" v-model="right" value="true">
                        <label for="test2" class="radio-label">Да, мы на верном пути!</label>
                    </p>
                    <p>
                        <input type="radio" id="test3" name="radio-group" v-model="right" value="false">
                        <label for="test3" class="radio-label">Еще не совсем</label>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_6">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" :to="next"><span>Идем дальше</span></router-link>
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
            progressHeading: "4/10",
            notes: '',
            right: '',
            cat: '',
            next: 'step-cat',
            departments: [],
            disableCheck: false,
            remoteType: '',
            progress: 0
        }
    },
    validators: {
        right: function (value) {
            return Validator.value(value).required();
        },

        departments: function (value) {
            var summ = 0;
            return Validator.custom(function() {
                value.forEach(
                    function sum( currentValue ) {
                        if(currentValue === "true")
                            summ += 1;
                    }
                );

                if(summ > 2) return "Максимум  2 пункта"
                if(summ == 0) return "Ничего не выбрано"
            })
        }
    },
    watch: {

        departments: function (newValue) {
            var summ2 = 0;
            newValue.forEach(
                function sum2( currentValue ) {
                    if(currentValue === "true")
                        summ2 += 1;
                }
            );
            if(summ2 < 2) {
                localStorage.departments = this.departments;
                this.disableCheck = false
            }
            else if (summ2 == 2) {
                localStorage.departments = this.departments;
                this.disableCheck = true
            }
            else {
                this.disableCheck = true
            }
        },

        right(newValue) {
            localStorage.right = newValue;
            this.disabled = false
        },

        notes(newValue) {
            localStorage.stepDepartmentsNotes = newValue;
            this.disabled = false
        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.cat) {
            this.cat = localStorage.cat;
            this.remoteType = localStorage.remoteType;

            if((this.cat === "home") && (this.remoteType === "freelancer")) this.next = "step-talents"
            else
                this.next = "step-cat"
        }

        if (localStorage.departments) {
                this.departments = localStorage.departments.split(',');
        }

        if (localStorage.stepDepartmentsNotes) {
            this.notes = localStorage.stepDepartmentsNotes;
        }

        if (localStorage.right) {
            this.right = localStorage.right;
        }
    },


    beforeRouteLeave (to, from, next) {
        console.log(to)
        if(to.name === "stepCat" || to.name === "stepTalents") {
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


