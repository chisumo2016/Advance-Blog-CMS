require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy'
Vue.use(Buefy);

Vue.component('slug-widget', require('./components/slugWidget.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });

require('./manage')



// const app = new Vue({
//     el: '#app',
//     data: {}
// });


// $(document).ready(function() {
//     //  Dropdowns
//     $('.dropdown').hover(function(e) {
//         $(this).toggleClass('is-open')
//     })
// });




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Vue.component('example', require('./components/Example.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });