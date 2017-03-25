
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

let util = require('./util/config'); //2015방식
util.ajaxConfig();

require('./bootstrap');
require('./components/link'); // 사용할 js의 경로를 추가해준다. (확장자명x)
require('./components/effect');
require('./components/profile');
require('./components/category');
require('./components/career');
require('./components/post');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body'
});

// go to top of the page



