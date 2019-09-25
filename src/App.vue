<template>
  <div id="app">
    <camelize />
  </div>
</template>

<script>
import Camelize from "./components/Camelize.vue";
import { page } from "vue-analytics";

export default {
  name: "app",

  components: {
    camelize: Camelize
  },

  methods: {
    track() {
      page("/");
    }
  }
};
</script>
