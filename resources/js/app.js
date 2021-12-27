require('./bootstrap');

// Vue
window.Vue = require('vue').default;
// мультиязычность
import './ml';
// плавная прокрутка
var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo)

Vue.component('nav-bar', require('./components/NavBar.vue').default);


const app = new Vue({
    el: '#app',
});
