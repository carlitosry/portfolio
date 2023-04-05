import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import dotenv from 'dotenv';


//import './assets/scss/styles.scss'
import './assets/css/style.css'


const app = createApp(App)

app.use(router)

app.mount('#app')
