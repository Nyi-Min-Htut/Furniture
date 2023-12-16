import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js'

import App from './App.vue'
import LandingPage from './user/LandingPage.vue';
import LoginComponent from './management/LoginComponent.vue';
import RegisterComponent from './management/RegisterComponent.vue';
import VariationCrudComponent from './management/VariationCrudComponent.vue';

const app= createApp({})

app.component('App',App);
app.component('LandingPage',LandingPage);
app.component('LoginComponent',LoginComponent);
app.component('RegisterComponent',RegisterComponent);
app.component('VariationCrudComponent',VariationCrudComponent);

app.mount('#app');
