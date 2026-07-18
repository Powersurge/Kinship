import Vue from 'vue';
import App from './App.vue';
import router from './router';

Vue.prototype.$appName = 'kinship';

new Vue({
    router,
    render: h => h(App),
}).$mount('#content');
