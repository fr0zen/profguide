<template>
    <main class="content stepA" >
       <section class="demo-bar">
            <span>Demo version</span>
        </section>
      <h2 @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>Давай определимся с точкой А</h2>
      <section class="section section_1">
        <div class="wrapper">
          <div class="block half-block align-start">
            <div class="bubble">
              <p class="bubble__text text_1"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
                Where are you now?
              </p>
            </div>
            <div class="text-group">
              <div class="text-input-group">
                <label class="text-input-label" for="country">Country</label>
                <input id="country" :class="{error: validation.hasError('country')}" type="text" v-model="country" maxlength="90" class="text-input" placeholder="Sweden"></input>
              </div>
              <div class="text-input-group">
                <label class="text-input-label" for="city">City</label>
                <input id="city" :class="{error: validation.hasError('city')}" type="text" v-model="city" maxlength="90" class="text-input" placeholder="Säffle"></input>
              </div>
            </div>
          </div>
          <img class="a-icon" src="/images/A-m.svg"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        </div>
      </section>
      <section class="section section_2_1" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        <div class="wrapper">
          <img src="/images/stepA-1.png" class="stepA-1">
          <div class="bubble bubble_unstyled altered">
            <p class="bubble__text text_2_1">
              For some reason I am sure that this is not the last place on Earth. If you indicated a European country or one of the CIS countries, then you already have at least access to a good education and other opportunities to realize your ambitions. And from here you can start anywhere
            </p>
          </div>
        </div>
      </section>
      <section class="section section_2"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        <div class="wrapper">
          <img src="/images/stepA-2.png" class="stepA-2">
          <div class="block flex-end">
            <div class="bubble bubble_unstyled bubble_inverted altered">
              <p class="bubble__text text_2">
                Family, whatever you have, it is the best because it is yours. God, fate or natural selection, anything from this, gave you exactly the conditions you need from which you can form your unique personality and life. Use the resources you have out of your family wisely and look for resources outside
              </p>
            </div>
            <input class="styled-checkbox" id="confirmFamily" type="checkbox" v-model="confirmFamily" true-value="true" false-value="false" >
            <!--<label :class="{error: validation.hasError('confirmFamily')}" for="confirmFamily" class="checkbox">Понятно</label>-->
          </div>
        </div>
      </section>
      <section class="section section_3">
        <div class="wrapper wrapper_column centered">
          <div class="bubble self-start">
            <p class="bubble__text text_3"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
              Now please list all your special knowledge, skills, hobbies and interests:
            </p>
          </div>
          <textarea-autosize
              class="textarea"
              placeholder="I know English, I have been dancing since the age of 5, ..."
              ref="myTextarea"
              v-model="skills"
              maxlength="1000"
              :class="{error: validation.hasError('skills')}"
              :min-height="120"
              :max-height="500"
              @blur.native="onBlurTextarea"
          />
        </div>
      </section>

      <section class="section section_4"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        <div class="wrapper dr-reverse">
          <div class="block">
            <div class="bubble bubble_inverted bubble_unstyled">
              <p class="bubble__text text_4" >
                Please review everything you wrote above. Think about all the opportunities that your place of residence, family, country, Internet and the whole world provides you. How many are there?
              </p>
            </div>
          </div>
          <img src="/images/stepA-3.png" class="stepA-3">
        </div>
      </section>

      <section class="section section_spoiler" >
        <div class="wrapper">
          <spoiler title="See answer">
            <p class="text_5"  @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
              The correct answer is an infinite number. You just have to want and start working towards achieving your goal, go forward without a shadow of fear and doubt, then you will find the best place and the best people who will help you become who you want to be
            </p>
          </spoiler>
        </div>
      </section>

      <section class="section section_5">
        <div class="wrapper wrapper_column">
          <div class="bubble self-start">
            <p class="bubble__text text_6">
              Notes
            </p>
          </div>
          <textarea-autosize
              class="textarea"
              placeholder="If you have any other thoughts, just write them here so you don't forget :)"
              ref="myTextarea"
              v-model="notes"
              maxlength="1000"
              :class="{error: validation.hasError('notes')}"
              :min-height="205"
              :max-height="500"
              @blur.native="onBlurTextarea"
          />
        </div>
      </section>

        <section class="section section_6">
            <div class="wrapper">
                <a :class="{error: validation.hasError()}" class="next" @click="go" href="#next">Понятно, идем дальше</a>
            </div>
        </section>
        <modal v-if="showModal" @close="showModal = false">
            <!--
          you can use custom content here to overwrite
          default content
        -->

            <h3 slot="header" style="margin-bottom: 0px;">Buy the course to continue</h3>

          <form slot="body" action="/payment/check" method="get" class="payment" @submit="submitForm">

            <a class="button no-border" href="https://profguide.org/en/#course">buy</a>
          </form>
            <a slot="button"></a>

            <a class="modal-link" slot="back" href="https://profguide.org/en/">back</a>
        </modal>
    </main>
</template>

<script>
import {Validator} from "simple-vue-validator";
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
import Spoiler from './Spoiler'
import $ from "jquery";


export default {
  components: {
    "progress-bar": ProgressBar,
    "spoiler": Spoiler,
    "modal": Modal
  },
  data: function() {
    return {
      progressHeading: "1/10",

      confirmFamily: true,
      skills: '',
      notes: '',
      country: '',
      city: '',
      progress: 0,
      showModal: false,
      hash: this.$route.hash,
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('value'),
    }
  },
  validators: {
    skills: function (value) {
      return Validator.value(value).required();
    },
    country: function (value) {
      return Validator.value(value).required();
    },
    city: function (value) {
      return Validator.value(value).required();
    },
    confirmFamily: function (value) {
      return Validator.value(value).required().regex('^true$');
    },

  },
  watch: {

    confirmFamily(newValue) {
      localStorage.stepAconfirmFamily = newValue;
      this.disabled = false
    },

    skills(newValue) {
      localStorage.skills = newValue;
      this.disabled = false
    },

    notes(newValue) {
      localStorage.stepANotes = newValue;
      this.disabled = false
    },

    country(newValue) {
      localStorage.country = newValue;
      this.disabled = false
    },

    city(newValue) {
      localStorage.city = newValue;
      this.disabled = false
    }
  },
  mounted() {
    if (localStorage.progress) {
      this.progress = localStorage.progress;
    }

    if (localStorage.country) {
      this.country = localStorage.country;
    }

    if (localStorage.stepAconfirmFamily) {
      this.confirmFamily = true;
    }

    if (localStorage.city) {
      this.city = localStorage.city;
    }

    if (localStorage.sex) {
      this.sex = localStorage.sex;
    }

    if (localStorage.skills) {
      this.skills = localStorage.skills;
    }

    if (localStorage.stepANotes) {
      this.notes = localStorage.stepANotes;
    }
  },


  beforeRouteLeave (to, from, next) {
    if(to.name === "stepB") {
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
    keydown: function (e) {
      console.log(e)
    },
    go() {
      this.showModal = true
    },
    submitForm: function (e) {
      e.preventDefault();

      $.ajax({
        url: $('form').attr('action'),
        type: 'get',
        data: '',
        success: function (data) {


          if (data) {
            $('form').attr('action', 'https://profguide.org/#course');

            $("#order").val(data.info.order_num_id);
            $("#signatureOpen").val(data.info.wsb_signature_open);
            $("#signature").val(data.info.wsb_signature);
            $("#seed").val(data.info.wsb_seed);
            this.data = '';
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
<style lang="scss">
.modal-container a.button.no-border {
  border-color: transparent;
  color: white !important;

    color: white !important;
    text-decoration: none !important;
    text-align: center !important;;
    line-height: 225% !important;;

  font-weight: 600;
}
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


