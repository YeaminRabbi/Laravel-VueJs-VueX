require('./bootstrap');
import Vue from 'vue';
import ElementUI from 'element-ui';
import { store } from './store/store.js';

import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en';

Vue.use(ElementUI, { locale })
window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('student-form-component', require('./components/student/StudentFormComponent.vue').default);
Vue.component('student-table-component', require('./components/student/StudentTableComponent.vue').default);


const app = new Vue({
    store,
    el: '#vue-app',
});
