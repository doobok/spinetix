require('./bootstrap');

// Vue
window.Vue = require('vue').default;

// плавная прокрутка
var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo)

// Vue.component('smpl-button', require('./components/SimpleButton.vue').default);


const app = new Vue({
    el: '#app',
});
