<template>
    <main class="content stepRemote" >
        <section class="progress-bar">
            <div class="progress-bar__wrapper">
                <progress-bar
                    :value="progress"
                />
            </div>
        </section>
        <section class="section" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper d-column">
                <h2>Хорошо, ты решил(а) остаться дома</h2>
                <h3>Теперь определимся, что же ты делаешь?</h3>
            </div>
        </section>

        <section class="section section_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
            <div class="wrapper">
                <img :src="remoteimg" class="remote">
                <div class="radio-block" :class="{error: validation.hasError('remoteType')}">
                    <p>
                        <input type="radio" id="radio2" name="radio-group-2" v-model="remoteType" value="freelancer">
                        <label for="radio2" class="radio-label">Я самостоятельно ищу заказчиков, и они ищут меня. Беру проекты и выполняю их у себя дома
                        </label>
                    </p>
                    <p>
                        <input type="radio" id="radio3" name="radio-group-2" v-model="remoteType" value="department" checked>
                        <label for="radio3" class="radio-label">Я работаю на компанию, но удаленно, в удобных для меня условиях и с подходящим графиком</label>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section_11">
            <div class="wrapper">
                <router-link :class="{error: validation.hasError()}" class="next" :to="next"><span>Дальше</span></router-link>
            </div>
        </section>

        <section class="section section_12">
            <div class="wrapper">
                <router-link class="back" to="step-B"><span>Назад</span></router-link>
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
            progressHeading: "3/10",
            remoteimg: '/images/remote-f.png',
            remoteType: '',
            next: 'step-cat',
            progress: 0
        }
    },
    validators: {
        remoteType: function (value) {
            return Validator.value(value).required();
        },
    },
    watch: {

        remoteType(newValue) {
            localStorage.remoteType = newValue;
            if(newValue === "freelancer") this.next = "step-cat"
            else
                this.next = "step-departments"
            this.disabled = false
        },


    },

    mounted() {

        if (localStorage.progress) {
            this.progress = localStorage.progress;
        }

        if (localStorage.sex === 'f') {
            this.remoteimg = "/images/remote-f.png";
        }
        else {
            this.remoteimg = "/images/remote-m.png";
        }

        if (localStorage.remoteType) {
            this.remoteType = localStorage.remoteType;
        }
    },

    beforeRouteLeave (to, from, next) {
        console.log(to)
        if((to.name === "stepCat") || (to.name === "stepDepartments")) {
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
    line-height: 22px;
    background: #FFFFFF;
    display: none;
    padding-left: 0;
    padding-top: 8px;
    padding-bottom: 4px;

    color: #3C9194;
}

</style>


