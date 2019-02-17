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
  name: 'camelize',

  data() {
    return {
      message: ''
    };
  },

  computed: {
    camelizedMessage() {
      // https://ourcodeworld.com/articles/read/608/how-to-camelize-and-decamelize-strings-in-javascript
      return this.message.replace(/^([A-Z])|[\s-_]+(\w)/g, (match, p1, p2) => {
          if (p2) return p2.toUpperCase();
          return p1.toLowerCase();
      });
    }
  }
}
</script>
