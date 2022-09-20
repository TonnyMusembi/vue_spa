require("./bootstrap");
import vue from "vue";
window.Vue = vue;

import { createApp } from "vue";

import App from "./components/App.vue";
import router from "vue-router";
import VueAxios from "vue-axios";
import axios from "axios";
import { routes } from "./routes";

// vue.use(VueRouter);
// vue.use(VueAxios, axios);

const app = createApp(App);

app.use(router);
// app.use(store);
// app.use(RouterLink);
//app.component("Datepicker", Datepicker);

app.mount("#app");