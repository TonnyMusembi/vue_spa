require("./bootstrap");
import vue from "vue";
window.Vue = vue;

import { createApp } from "vue";

import App from "./components/App.vue";
import router from "vue-router";
import VueAxios from "vue-axios";
import axios from "axios";
import { routes } from "./routes.js";
import { RouterLink, RouterView } from "vue-router";

// vue.use(VueRouter);
// vue.use(VueAxios, axios);

const app = createApp(App);

app.use(routes);
app.use(router);
//app.use(axios);

app.use(RouterLink);

app.mount("#app");