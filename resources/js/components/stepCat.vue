<template>
    <main class="content stepCat" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section">
            <div class="wrapper d-column">
                <h2>Теперь давай определимся: ты “дикий” или “домашний котик”?</h2>
            </div>
        </section>

        <section class="section section_1">
            <div class="wrapper">
                <div class="block">
                    <div class="bubble bubble_unstyled">
                        <p class="bubble__text text_1">
                            Выбери то, что ближе именно тебе. Это два абсолютно разных стиля профессиональной жизни и ни один из них ни хорош, ни плох. Важно, чтобы именно тебе было комфортно и не приходилось ломать психику, играя не свою роль
                        </p>
                    </div>
                </div>
                <img src="/images/stepA-3.png" class="lady">
            </div>
        </section>

        <section class="section section_2">
            <div class="wrapper">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_2">
                        <strong>Дикий котик</strong> - свободный, он идет куда хочет и когда захочет: захочет посидит под деревом, захочет запрыгнет на забор. Охотится он также самостоятельно или в группе, и добычу выбирает себе сам, никто не может его контролировать, у него нет хозяина. Но у этой свободы есть большая цена - это риск и персональная ответственность за то, что котик будет сегодня-завтра-послезавтра кушать и будет ли у него теплое место на ночлег. Никто ему еды не наложит и воды не нальет - дикий кот самостоятельно охотится. Если у него это не получается, то он рискует заболеть, остаться голодным, и тогда ему придется либо отдаваться превратностям судьбы под ближайшим кустиком, либо ползти к людям и просить о помощи, но люди уже сами будут решать помогать или нет подняться. В случае, если котику удастся научиться успешно охотиться на мышей, а потом на дичь и побольше, то он и сам вымахает до размеров гепарда и станет весомой силой, с которой придется считаться всем остальным.
                    </p>
                </div>

                <img src="/images/wild-cat.png" class="wildcat">
            </div>
        </section>

        <section class="section section_3">
            <div class="wrapper">
                    <p class="bubble__text text_2">
                        Дикий кот в мире людей - это <strong>предприниматель</strong>. У него нет начальства, но он сам должен ставить себе цели и находить стратегию привлечения "мышей", т.е. клиентов. Его доход и уровень жизни напрямую зависит от того насколько хорошо он научился охотиться за клиентами и насколько последним нравится продукт или услуга.
                        <br><br>
                        Предприниматель постоянно учится и в том числе на своих ошибках. И он имеет моральное право ошибаться, потому что действует в условиях риска и неопределенности, создавая новый продукт.</p>
            </div>
        </section>

        <section class="section section_4">
            <div class="wrapper dr-reverse">
                <div class="bubble bubble_unstyled">
                    <p class="bubble__text text_2">
                        <strong>Домашний котик</strong> живет у хозяина в доме. Он не может себе позволить своевольно уходить куда и когда захочет и должен подчиняться правилам дома хозяина. Но за это домашний котик всегда находится в тепле, ему ставят еду и воду, кормушка всегда полная. А если такой кот будет особенно радовать хозяина и, например, давать очень дорогое родовитое потомство или побеждать на кошачьих выставках, благодаря чему хозяин будет получать большие деньги, то хозяин будет выполнять капризы такого котика и идти ему на уступки: покупать вкусные лакомства, лучшие игрушки и т.д.
                    </p>
                </div>

                <img src="/images/home-cat.png" class="homecat">
            </div>
        </section>

        <section class="section section_5">
            <div class="wrapper">
                <p class="bubble__text text_2">
                    Домашний котик в мире людей - это <strong>профессионал</strong>, который отлично знает свое дело, добросовестно с рвением его выполняет и получает за это вознаграждение от компании, на которую он работает. Профессионал должен быть очень точен, его ошибки почти не простительны, потому что компания нанимая специалиста, ожидает, что тот будет четко выполнять свою работу. А если такой специалист будет выполнять ее лучше всех, то о нем пойдет слух, как о крутом профессионале, и другие компании будут стараться переманить его к себе на лучшую зарплату и лучшие условия труда, на интересные проекты. В таком случае профессионал может выдвигать свои условия сотрудничества и просить о повышении заработной платы, улучшения условий у текущего работодателя, если последний не хочет его потерять. Такие профессионалы очень ценны и имеют высокий уровень дохода.
                </p>
            </div>
        </section>

        <section class="section section_6">
            <div class="wrapper dr-reverse">
                <div class="bubble bubble_inverted self-end">
                    <p class="bubble__text text_3">
                        Выбери то, что ближе именно тебе
                    </p>
                </div>

                <div :class="{error: validation.hasError('cat')}" class="radio-block" >
                    <p>
                        <input type="radio" id="catw" name="radio-group" v-model="cat" value="wild">
                        <label for="catw" class="radio-label">Дикий котик</label>
                    </p>
                    <p>
                        <input type="radio" id="cath" name="radio-group" v-model="cat" value="home">
                        <label for="cath" class="radio-label">Домашний котик</label>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_7">
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



export default {
    components: {
        "progress-bar": ProgressBar,
    },
    data: function() {
        return {
            progressHeading: "5/10",
            progress: 0,
            cat: '',
            next: 'step-wild-cat',
        }
    },
    validators: {
        cat: function (value) {
            return Validator.value(value).required();
        },
    },
    watch: {
        cat(newValue) {
            localStorage.cat = newValue;
            if(newValue === "wild") this.next = "step-wild-cat"
            else
                this.next = "step-home-cat"

        },
    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.cat) {
            this.cat = localStorage.cat;
        }
    },

    beforeRouteLeave (to, from, next) {
        console.log("route");
        if(to.name === "stepWildCat" || to.name === "stepHomeCat") {
            var that = this;
            this.$validate()
                .then(function(success) {

                    if (success) {
                        localStorage.progress = parseInt(localStorage.progress) + 10;
                        next();
                    }
                    else {
                        console.log("validation");
                        console.log(validation);
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
    display: none;
    line-height: 22px;
    background: #FFFFFF;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #3C9194;
}

</style>


