<template>
  <div>
    <h1>Camelize</h1>

    <input
      type="text"
      v-model.trim="message"
      placeholder="Begin typing..."
    >

    <p>{{ camelizedMessage }}</p>
  </div>
</template>

<script>
export default {
  name: 'Camelize',

  data() {
    return {
      message: ''
    };
  },

  computed: {
    camelizedMessage() {
      return this.message.split(' ').join('_');
    }
  }
}
</script>
