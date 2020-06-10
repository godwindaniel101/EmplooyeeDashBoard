
require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueProgressBar from 'vue-progressbar'
import moment from 'moment'

const options = {
  color: '#bffaf3',
  failedColor: 'red',
  thickness: '3px',
  transition: {
    speed: '0.4s',
    opacity: '0.6s',
    termination: 300
  },
}
Vue.filter("myDate" , function (date) {
    return moment(date).format('MMMM Do YYYY');
  })
  Vue.filter("myTime" , function (date) {
    return moment(date).format('h:mm:ss a');
  })
Vue.use(VueProgressBar, options)
Vue.use(VueRouter);
Vue.use(moment);
window.Vue = require('vue');
Vue.component('edit-component', require('./components/EditEmployee.vue'));
Vue.component('view-component', require('./components/ViewEmployee.vue'));
Vue.component('main-component', require('./components/MainComponent.vue'));
Vue.component('create-component', require('./components/CreateEmployee.vue'));

const app = new Vue({
    el: '#app',
});
