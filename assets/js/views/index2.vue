<template>
  <div>
    <full-page :options="options">
      <section-element :class="[$style.header, 'section','grid-x', 'align-middle']">
        <canvas-bg :class="$style.header__background"></canvas-bg>
        <div :class="['grid-container', 'cell', $style.header__hover]">
          <div class="grid-x align-middle">
            <div class="cell small-10 large-8">
              <div class="grid-x grid-padding-x">
                <h1 :class="[$style.header__title, 'cell', 'large-12']">Corps spatial de l'armée française</h1>
                <p :class="[$style.header__text, 'cell', 'large-7']">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, possimus ab? 
                </p>
                <div class="cell large-12">
                  <router-link to="/">
                    <a >Engagez-vous</a>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section-element>
      <section-element :class="[$style.header, 'section', 'grid-x', 'align-middle']">
        <div :class="['grid-container','cell', $style.header__hover]">
          <div class="grid-x align-middle">
            <div class="cell small-10 large-8">
              <div class="grid-x grid-padding-x">
                <h1 :class="[$style.header__title, 'cell', 'large-12']">Nos emplois</h1>
                <p :class="[$style.header__text, 'cell', 'large-7']">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, possimus ab? 
                </p>
                <div class="cell large-12">
                  <router-link to="/">
                    <a >Engagez-vous</a>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section-element>
      <section-element :class="[$style.header, 'section', 'grid-x', 'align-middle']">
        <div :class="['grid-container','cell', $style.header__hover]">
          <div class="grid-x align-middle">
            <div class="cell small-10 large-8">
              <div class="grid-x grid-padding-x">
                <h1 :class="[$style.header__title, 'cell', 'large-12']">Parcours de recrutement</h1>
                <p :class="[$style.header__text, 'cell', 'large-7']">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, possimus ab? 
                </p>
                <div class="cell large-12">
                  <router-link to="/">
                    <a >Engagez-vous</a>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section-element>
    </full-page>
    
    <div :class="[$style.progress, 'grid-x']">
      <div :class="[$style.progress__number, 'cell', 'large-12']">
        01
      </div>
      <div :class="[$style.progress__bar, 'cell', 'large-12']">
        <span></span>
      </div>
      <div :class="[$style.progress__number, $style.progress__number__isActive, 'cell', 'large-12']">
        06
      </div>
    </div>
  </div>
</template>
<script>
import canvasBg from '../components/canvasBg/canvasBg.vue';
import sectionElement from '../components/sectionElement';
import FullPage from 'vue-fullpage.js';

export default {
  components:{
    canvasBg,
    sectionElement,
    FullPage
  },
  data() {
    return {
      options: {
        paddingTop: this.$parent.$children[0].$el.offsetHeight + 'px',
        scrollBar:true,
        autoScrolling: false,
      },
    }
  },
  created(){
    if(window.innerWidth > 760){
      this.options = {
        paddingTop: this.$parent.$children[0].$el.offsetHeight + 'px',
        scrollBar:true
      }
    }
  },
  mounted(){
    console.log(this.$children);
    
  },
  destroyed(){
    $.fn.fullpage.destroy('all');
  }
  
}
</script>

<style lang="scss" module>
@import url('https://fonts.googleapis.com/css?family=Allerta+Stencil');
@import url('https://fonts.googleapis.com/css?family=Rajdhani:400,600,700');
body {
  font-family: 'Rajdhani', sans-serif;
}

.header {
  position: relative;
  overflow: hidden;

  &__background {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 0;
  }

  &__title {
    color: #ffffff;
    text-transform: uppercase;
    margin-bottom: 1rem;
    line-height: 1;
    font-size: 40px;
    font-family: 'Allerta Stencil', sans-serif;
    @media screen and (min-width: 64em) {
      font-size: 68px;
    }
  }

  &__hover {
    position: relative;
    z-index: 1;
  }

  &__text {
    color: #ffffff;
    font-size: 16px;
  }
}

.progress {
  position: fixed;
  right: 5.5vw;
  top: 50%;
  transform: translateY(-50%);
  z-index: 5;
  text-align: center;
  font-size: 32px;

  &__bar {
    margin: 0.5em 0;
    span {
      display: inline-block;
      height: 30vh;
      width: 2px;
      background: #ffffff;
    }
  }

  &__number {
    transform: rotate(90deg);

    &__isActive {
      color: #074887;
    }
  }
}
</style>

