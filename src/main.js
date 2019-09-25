import Vue from "vue";
import App from "./App.vue";
import VueAnalytics from "vue-analytics";
import "./main.css";

Vue.config.productionTip = false;

Vue.use(VueAnalytics, {
  id: "UA-11130262-12"
});

new Vue({
  render: h => h(App)
}).$mount("#app");
