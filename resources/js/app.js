import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js'

import App from './App.vue'
import LandingPage from './user/LandingPage.vue';
import LoginRegisterComponent from './management/LoginRegisterComponent.vue'

const app= createApp({})

app.component('App',App);
app.component('LandingPage',LandingPage);
app.component('LoginRegisterComponent',LoginRegisterComponent);


app.mount('#app');
