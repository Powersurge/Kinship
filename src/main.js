import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

const app = createApp(App);

app.config.globalProperties.$appName = 'kinship';

app.use(router);

app.mount('#kinship');
