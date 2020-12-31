<template>
  <div
    class="flex flex-col items-center content-center justify-center min-h-screen p-8"
  >
    <div class="flex flex-col w-full md:w-3/4 lg:w-2/3">
      <h1 class="pr-2 -mb-1 text-3xl text-right text-blue-900 font-400">
        Camelize
      </h1>

      <div class="p-2 bg-blue-900 rounded-lg shadow-lg">
        <input
          type="text"
          v-model.trim="message"
          placeholder="Begin typing..."
          class="block w-full px-3 py-2 text-lg leading-tight text-blue-500 rounded appearance-none focus:outline-none focus:shadow-outline"
        />
        <div
          class="p-20 my-2 font-mono text-3xl leading-loose text-center text-blue-100 bg-blue-500 rounded"
          style="min-height: 220px; word-break: break-word;"
        >
          {{ camelizedMessage }}
        </div>

        <div
          class="flex flex-col px-2 leading-loose text-center md:flex-row md:justify-between md:text-left md:leading-normal"
        >
          <small class="text-white font-400">
            &copy;{{ year }}
            <a
              href="https://www.forefrontsoftware.com"
              target="_blank"
              class="text-blue-300 no-underline hover:text-blue-200"
              >Forefront Software</a
            >
          </small>
          <small class="text-white font-400">
            <a
              href="https://www.ctosumo.com"
              target="_blank"
              class="text-blue-300 no-underline hover:text-blue-200"
              >Need Tech Consulting? Try CTO Sumo!</a
            >
          </small>
          <small class="font-400">
            <a
              href="http://en.wikipedia.org/wiki/CamelCase"
              target="_blank"
              class="text-blue-300 no-underline hover:text-blue-200"
              >What is this?</a
            >
          </small>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Camelize",

  data() {
    return {
      message: ""
    };
  },

  computed: {
    camelizedMessage() {
      // https://ourcodeworld.com/articles/read/608/how-to-camelize-and-decamelize-strings-in-javascript
      return this.message.replace(/^([A-Z])|[\s-_]+(\w)/g, (match, p1, p2) => {
        if (p2) return p2.toUpperCase();
        return p1.toLowerCase();
      });
    },

    year() {
      let d = new Date();
      return d.getFullYear();
    }
  },
};
</script>
