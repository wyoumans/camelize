<template>
  <div id="app">
    <camelize/>
  </div>
</template>

<script>
import Camelize from './components/Camelize.vue'

export default {
  name: 'app',

  components: {
    'camelize': Camelize
  }
}
</script>
