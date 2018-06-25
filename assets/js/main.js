import Vue from 'vue';
import VueRouter from 'vue-router';

import index from './views/index.vue';
import contact from './views/contact.vue';
import '../../node_modules/reset-css/reset.css';
import '../../node_modules/foundation-sites/dist/css/foundation.min.css';
Vue.use(VueRouter);

// const index = () => import('./views/index.vue');
// const contact = () => import('./views/contact.vue');

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: index,
    },
    {
      path: '/contact',
      component: contact,
    },
    {
      path: '*',
      redirect: '/',
    },
  ],
});

new Vue({
  el: '#app',
  router: router,
  render: (h) => h(require('./App.vue').default),
});
