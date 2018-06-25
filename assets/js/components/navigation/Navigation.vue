<template>
  <div :class="[$style.Navigation]">
    <div class="grid-container">
        <div class="grid-x align-justify align-middle">
          <div :class="[$style.Navigation__logo, 'cell', 'small-5', 'large-3']">
            <router-link
                to="/"
                @click.native="hideMenu">
                <a :class="$style.Navigation__logoLink">CSAF</a>
              </router-link>
          </div>      
        
          <input type="checkbox"  id="burger" v-model="isChecked" @change="disableScrollify" :class="[$style.Navigation__toggle, 'cell', 'small-1']">
          <label for="burger" :class="[$style.Navigation__toggleLabel, 'cell', 'small-1', 'hide-for-large']"><span></span></label>

          <nav :class="[$style.Navigation__menuContainer,'cell', 'small-12', 'large-9']">
            <ul :class="[$style.Navigation__menu, 'grid-x', 'align-right']">
              
              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Découvrir</a>
              </router-link>

              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Actualités</a>
              </router-link>

              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Métiers</a>
              </router-link>

              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Processus de recrutement</a>
              </router-link>

              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Engagez-vous</a>
              </router-link>

              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/contact"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Contactez-nous</a>
              </router-link>

              <router-link 
                @click.native="hideMenu"
                tag="li"
                to="/contact"
                :class="$style.Navigation__item" >
                <a :class="$style.Navigation__itemLink">Mon compte</a>
              </router-link>
            </ul> 
          </nav>
        </div>
    </div>
  </div>
</template>
<script>
import scrollify from 'jquery-scrollify';

export default {
  data() {
    return {
      isChecked: false,
    };
  },
  mounted(){
    
  },
  methods: {
    hideMenu() {
      this.isChecked = false;
      scrollify.disable();
    },
    disableScrollify(){
      if(this.isChecked){
        scrollify.disable();
        return;
      }
      scrollify.enable();
    }
  },
};
</script>

<style lang="scss" module>
@import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');

.Navigation {
  font-size: 16px;
  position: fixed;
  padding: 1em 0;
  top: 0;
  left: 0;
  right: 0;
  font-family: 'Rajdhani', sans-serif;
  background: #000;
  color: #ffffff;
  z-index: 6;

  &__logo {
    position: relative;
    z-index: 8;
  }

  &__logoLink {
    font-size: 24px;
    font-weight: bold;
  }

  &__menuContainer {
    position: fixed;
    top: 0;
    left: 0;
    padding: 0;
    margin: 0;
    height: 100vh;
    z-index: -2;
    opacity: 0;
    width: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    transition: opacity 0.26s ease-in;
    background: rgba(0, 0, 0, 0.9);

    @media screen and (min-width: 64em) {
      overflow: auto;
      position: static;
      height: auto;
      opacity: 1;
      z-index: 1;
    }
  }

  &__toggle {
    display: none;

    &:checked ~ .Navigation__menuContainer {
      z-index: 7;
      opacity: 1;
    }

    &:checked ~ .Navigation__menuContainer .Navigation__menu {
      transform: translateX(0%);
      opacity: 1;
    }

    &:checked ~ .Navigation__menuContainer .Navigation__menu .Navigation__item {
      opacity: 1;
    }
  }

  &__toggleLabel {
    font-size: 16px;
    padding: 0.5em 0;
    color: #ffffff;
    position: relative;
    z-index: 5;
  }

  &__item {
    display: block;
    margin: 1em 0;
    text-align: center;
    font-size: 28px;
    opacity: 0.2;
    width: 100%;
    @media screen and (min-width: 64em) {
      font-size: 16px;
      margin: 0.5em 1em;
      width: auto;
      opacity: 1;
      display: inline-block;
      text-align: right;
    }

    &:nth-child(1) {
      transition: opacity 0.26s 0.26s;
    }
    &:nth-child(2) {
      transition: opacity 0.26s 0.4s;
    }
    &:nth-child(3) {
      transition: opacity 0.26s 0.54s;
    }
    &:nth-child(4) {
      transition: opacity 0.26s 0.68s;
    }

    &:nth-child(1):hover .Navigation__itemLink {
      transition: color 0.26s 0s;
    }
    &:nth-child(2):hover .Navigation__itemLink {
      transition: color 0.26s 0s;
    }
    &:nth-child(3):hover .Navigation__itemLink {
      transition: color 0.26s 0s;
    }
    &:nth-child(4):hover .Navigation__itemLink {
      transition: color 0.26s 0s;
    }
  }

  &__itemLink {
    color: #fff;
    text-decoration: none;

    &:hover {
      text-shadow: rgba(255, 255, 255, 0.3);
    }
  }

  &__menu {
    width: 100%;
    margin: 5em 0;
    padding: 0;
    transform: translateX(-100%);
    transition: transform 0.26s ease-in 0.1s;
    opacity: 0;
    @media screen and (min-width: 64em) {
      margin: 0;
      opacity: 1;
      transform: translateX(0%);
    }
  }
}

.Navigation__toggleLabel {
  cursor: pointer;
  z-index: 999;
}

/* Hide the Checkbox */

.menu-input {
  position: absolute;
  opacity: 0;
  /* 	display: none; */
}

/*
	 Base menu button
	 styles and transitions
*/

.Navigation__toggleLabel > span,
.Navigation__toggleLabel > span::before,
.Navigation__toggleLabel > span::after {
  content: '';
  width: 2.5em;
  height: 0.3em;
  display: block;
  position: relative;
  transition: background-color 0s ease-in-out 0.2s, top 0.1s ease-in-out 0.25s,
    transform 0.1s ease-in-out 0.1s;
  overflow: visible;
}

/* To increase size of label */

.Navigation__toggleLabel > span {
  background-color: white;
}

/* Positioning top bar */

.Navigation__toggleLabel > span::before {
  top: -0.6em;
  right: -0.6em;
  width: 75%;
  background-color: white;
}

/* Positioning bottom bar */

.Navigation__toggleLabel > span::after {
  width: 75%;
  right: -0.6em;
  top: 0.3em;
  background-color: white;
}

/*
	 Transition times for
	 when checked
*/

.Navigation__toggle:checked + .Navigation__toggleLabel > span,
.Navigation__toggle:checked + .Navigation__toggleLabel > span::before,
.Navigation__toggle:checked + .Navigation__toggleLabel > span::after {
  transition: background-color 0s linear 0.1s, top 0.1s linear 0s,
    transform 0.1s linear 0.1s;
}

/* Styles when checked */

.Navigation__toggle:checked + .Navigation__toggleLabel > span {
  background-color: transparent;
}

.Navigation__toggle:checked + .Navigation__toggleLabel > span::before {
  top: 0rem;
  transform: rotate(45deg);
  background-color: white;
}

.Navigation__toggle:checked + .Navigation__toggleLabel > span::after {
  top: -0.3em;
  transform: rotate(-45deg);
  background-color: white;
}

@keyframes shine {
  0% {
    color: rgba(255, 255, 255, 0.3);
  }
  100% {
    color: rgba(255, 255, 255, 1);
  }
}
</style>

