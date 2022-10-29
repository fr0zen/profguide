<template>
    <main class="content stepTalents" >
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <h2>А теперь расскажи, что тебе нравится делать больше всего?</h2>
            </div>
        </section>

        <section class="section section_1">
            <div class="wrapper">
                <div class="block" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                    <div class="bubble">
                        <p class="bubble__text text_1">
                            Что тебе нравится делать больше всего - когда ничего делать не нужно?
                            Когда все уроки сделаны, посуда помыта и т.д.
                        </p>
                    </div>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="1. ...
2. ...
3. ..."
                    ref="myTextarea"

                    :class="{error: validation.hasError('interestsDesc')}"
                    v-model="interestsDesc"
                    maxlength="1000"
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
                            Чем тебя так цепляет эта активность(и), что в ней тебе действительно нравится - в самом процессе? Подумай, что именно тебе приносит удовольствие в этой деятельности
                        </p>
                    </div>
                </div>
                <textarea-autosize
                    class="textarea"
                    placeholder="1. ...
2. ...
3. ..."
                    ref="myTextarea"
                    v-model="activitiesDesc"
                    :class="{error: validation.hasError('activitiesDesc')}"
                    maxlength="1000"
                    :min-height="325"
                    :max-height="500"
                    @blur.native="onBlurTextarea"
                />
            </div>
        </section>



        <section class="section section_3" >
            <div class="wrapper dr-column">
                <spoiler title="Дальше" @click.native="scroll">
                    <div class="section section_4" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                        <div class="wrapper">
                            <div class="bubble bubble_unstyled">
                                <p class="bubble__text text_4">
                                    Психологи выделяют 7 основных видов одаренности. И одна или даже несколько из них свойственны тебе. Вне зависимости от того, дикий ты котик или домашний, предпочел(ла) ты остаться дома или поехать на работу, давай узнаем в чем ты одарен(а) и в чем тебе стоит развиваться исходя из этой теории.
                                    <br>
                                    <br>

                                    <br class="only-desktop">
                                    <br class="only-desktop">
                                    <br class="only-desktop">
                                    Пересмотри свои ответы о том, что тебе нравится делать больше всего и почему, и сопоставь их с видами одаренности. Выбери 1-3, которые больше всего тебе подходят (косательно выбираемой профессии они все будут пересекаться в ней).
                                </p>
                            </div>
                            <img src="/images/stepA-3.png" class="lady">
                        </div>
                    </div>


                    <div class="section section_5" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                        <div class="wrapper">
                            <div class="checkbox-block" :class="{error: validation.hasError('talents')}">
                                <p>
                                    <input class="styled-checkbox" id="talent1" type="checkbox" v-model="talents[0]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[0] === "true"))'>
                                    <label for="talent1" class="checkbox"><strong>Академический</strong> - желание познавать мир через точные науки или же наоборот гуманитарные, открывать новые закономерности, узнавать самому и, иногда, просвещать других. Сфера таких людей - наука, исследования, изобретения.</label>
                                </p>
                                <p>
                                    <input class="styled-checkbox" id="talent2" type="checkbox" v-model="talents[1]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[1] === "true"))'>
                                    <label for="talent2" class="checkbox"><strong>Практический.</strong> Основная ценность для таких людей - это получение практического результата, а знания их интересуют только постольку поскольку они могут пригодиться в деле (обычно такие люди неравномерно учатся в школе и в университете, они берут только то, что считают для себя полезным, а не учат все). Подходящая сфера - спорт, бизнес, ремесло, строительство, инженерия, а также программирование, дизайн, звукорежиссура, видеомонтаж и любые другие профессии, в которых явно виден результат труда.</label>
                                </p>
                                <p>
                                    <input class="styled-checkbox" id="talent3" type="checkbox" v-model="talents[2]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[2] === "true"))'>
                                    <label for="talent3" class="checkbox"><strong>Социальный (Личностный).</strong> Основная ценность для таких людей - это помогать и приносить пользу людям, обществу. Обычно людям такого склада свойственны профессии как педагог, тренер, врач, психолог, HR (управление и развитие персонала). </label>

                                </p>
                                <p>
                                    <input class="styled-checkbox" id="talent4" type="checkbox" v-model="talents[3]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[3] === "true"))'>
                                    <label for="talent4" class="checkbox"><strong> Эмоциональный. </strong>Таким людям нередко нравится смотреть драматические сериалы и фильмы и переживать за героев. Они очень хорошо понимают эмоции других людей и ориентируются в социальной ситуации, понимают как оказать воздействие на собеседника или группу. Обычно люди этого типа выступают как - политик, лидер, спикер.</label>
                                </p>
                                <p>
                                    <input class="styled-checkbox" id="talent5" type="checkbox" v-model="talents[4]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[4] === "true"))'>
                                    <label for="talent5" class="checkbox"><strong>Артистический. </strong>
                                      Люди с этим видом одаренности проявляют себя этому миру через свое искусство - музыкант, художник (2d, 3d - художник), певец, актер, ведущий(ая), звукорежиссер, видеомонтажер и т.д.</label>
                                </p>

                                <p>
                                    <input class="styled-checkbox" id="talent6" type="checkbox" v-model="talents[5]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[5] === "true"))'>
                                    <label for="talent6" class="checkbox"><strong>Окружающей среды.</strong>
                                        Эти люди проявляют неподдельный интерес к растениям, животным, водным пространствам и т.д. И профессии они выбирают связанные с экологией, климатом, дрессурой, уходом за животными или растениями, деревьями и т.д.</label>
                                </p>

                                <p>
                                    <input class="styled-checkbox" id="talent7" type="checkbox" v-model="talents[6]" true-value="true" false-value="false" :disabled='disableCheck && !((talents[6] === "true"))'>
                                    <label for="talent7" class="checkbox"><strong>Духовно-ценностный.</strong>
                                        Для людей с этой одаренностью основная ценность - это мир во всем мире и помощь миру. Сферы деятельности - религия, благотворительность, социальные проекты/миссии.  </label>
                                </p>
                            </div>

                        </div>
                        <p class="bubble__text"><br>Если ты предварительно прошел(а) тесты, то взгляни еще на результаты теста интерсов Голомштока. Обрати внимание на показатели явно подсвеченные зеленым, т.е. на то, что тебе больше всего интересно. Но помни, это тест, он не всегда точен. Спроси себя, что из этого просто увлечение, а что действительно необходимо в твоей жизни, от чего ты правда получаешь удовльствие и чем живо интересуешься. Также обрати внимание, наоборот, на те сферы, которые тебе абсолютно не интересны. Знать, в чем тебе будет некомфортно, тоже важно, чтобы не тратить на это по-напрасну время.</p>

                    </div>

                    <section class="section section_6">
                        <div class="wrapper">
                            <div class="bubble self-end bubble_unstyled" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                                <p class="bubble__text text_5">
                                    Ориентируясь на твою одаренность и всю предыдущую информацию о себе, которую мы выяснили, какой род деятельности тебе пришелся бы по вкусу?
                                </p>
                            </div>

                            <textarea-autosize
                                class="textarea"
                                placeholder="Т.к. я дикий котик с практической одаренностью, я выберу маркетинг, мне это интересно и пригодится 100%.

Т.к. я домашний котик социальной одаренности и мне интересна биология и тайны устройства человеческого тела, я буду врачом-реабилитологом."
                                ref="myTextarea"
                                :class="{error: validation.hasError('talentsDescription')}"
                                v-model="talentsDescription"
                                maxlength="1000"
                                :min-height="333"
                                :max-height="500"
                                @blur.native="onBlurTextarea"
                            />
                        </div>
                    </section>

                    <section class="section section_7" >
                        <div class="wrapper dr-column">
                            <spoiler title="Дальше" @click.native="scroll2">
                                <div class="section section_9" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                                    <div class="wrapper">
                                        <img src="/images/stepA-3.png" class="lady lady_2">
                                        <div class="bubble bubble_unstyled">
                                            <p class="bubble__text text_9">
                                                <b>Приведет ли та профессия, которую ты выбрал(а), к твоей мечте через 10 лет?</b>
                                                <br>
                                                Если да, то супер!
                                                <br>
                                                <br>
                                                Если нет, то поищи еще, и ищи пока не найдешь.
                                                <br>
                                                Перейди на любые из этих платформ:
                                                <br>
                                                - <a href="https://skillbox.ru/courses/" target="_blank">skillbox</a>
                                                <br>
                                                - <a href="https://geekbrains.by/" target="_blank">geekbrains</a>
                                                <br>
                                                - <a href="https://netology.ru/" target="_blank">netology</a>
                                                <br>
                                                - <a href="https://rabota.by/" target="_blank">rabota.by</a> и <a href="https://hh.ru/" target="_blank">hh.ru</a> (доход, требования, условия)
                                                <br>
                                                <br>
                                                Посмотри, какие профессии тебя могли бы заинтересовать и при этом смогут привести к твоей мечте (выпиши их себе на лист А4 и пропиши + и - вариантов, чтобы решить)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </spoiler>
                        </div>
                    </section>



                    <section class="section section_8">
                        <div class="wrapper">
                            <router-link :class="{error: validation.hasError()}" class="next" to="step-summary"><span>Готово, идем дальше</span></router-link>
                        </div>
                    </section>
                </spoiler>
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
            progressHeading: "8/10",
            talentsDescription: '',
            interestsDesc: '',
            activitiesDesc: '',
            talents: [],
            disableCheck: false,
            progress: 0,
        }
    },
    validators: {
        interestsDesc: function (value) {
            return Validator.value(value).required();
        },
        activitiesDesc: function (value) {
            return Validator.value(value).required();
        },

        talentsDescription: function (value) {
            return Validator.value(value).required();
        },

        talents: function (value) {
            var summ = 0;
            return Validator.custom(function() {
                value.forEach(
                    function sum( currentValue ) {
                        if(currentValue === "true")
                            summ += 1;
                    }
                );

                if(summ > 3) return "Максимум  3 пункта"
                if(summ == 0) return "Ничего не выбрано"
            })
        }
    },
    watch: {


        talents: function (newValue) {
            var summ2 = 0;
            newValue.forEach(
                function sum2( currentValue ) {
                    if(currentValue === "true")
                        summ2 += 1;
                }
            );
            if(summ2 < 3) {
                localStorage.talents = this.talents;
                this.disableCheck = false
            }
            else if (summ2 == 3) {
                localStorage.talents = this.talents;
                this.disableCheck = true
            }
            else {
                this.disableCheck = true
            }
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
            this.progress = localStorage.progress;
        }

        if (localStorage.talents) {
            this.talents = localStorage.talents.split(',');
        }

        if (localStorage.steptalentsTalentsDescription) {
            this.talentsDescription = localStorage.steptalentsTalentsDescription;
        }

        if (localStorage.interestsDesc) {
            this.interestsDesc = localStorage.interestsDesc;
        }

        if (localStorage.activitiesDesc) {
            this.activitiesDesc = localStorage.activitiesDesc;
        }
    },
    methods: {
        scroll: function (event) {
            console.log(event.target.innerHTML)

            if (event.target.innerHTML === "Дальше") {
                var that = this;
                that.$nextTick(() => {
                    const el = that.$el.querySelector(".section_4");
                    //console.log(el.offsetTop)
                    //var top = el.offsetTop + (window.innerHeight / 2);
                    console.log("from scroll")
                    console.log(el)
                    console.log(top)
                    console.log("-from scroll")
                    el.scrollIntoView({
                        behavior: 'smooth'
                    });
                    //window.scrollTo(0, top);
                    return;
                });
            }

        },

        scroll2: function (event) {
            console.log(event.target.innerHTML)

            event.stopPropagation()
            if (event.target.innerHTML === "Дальше") {
                var that = this;
                that.$nextTick(() => {
                    const el = that.$el.querySelector(".section_9");
                    //console.log(el.offsetTop)
                    //var top = el.offsetTop + (window.innerHeight / 2);
                    console.log("from scroll2")
                    console.log(el)
                    console.log(top)
                    console.log("-from scroll2")
                    el.scrollIntoView({
                        behavior: 'smooth'
                    });
                    //window.scrollTo(0, top);
                    return;
                });
            }



        },


            keydown: function(e) {
                console.log(e)
            }

    },


    beforeRouteLeave (to, from, next) {
        console.log(to)
        if(to.name === "stepSummary") {
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



    }
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


