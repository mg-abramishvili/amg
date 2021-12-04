//require('./bootstrap');

import Vue from 'vue'

import CKEditor from '@ckeditor/ckeditor5-vue2';
Vue.use( CKEditor );

Vue.component('portfolio-edit', require('./components/admin/portfolio/PortfolioEdit.vue').default);

const app = new Vue({
    el: '#app'
});