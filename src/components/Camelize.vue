<template>
  <div class="flex flex-col justify-center items-center content-center p-8 min-h-screen">
    <div class="w-full md:w-3/4 lg:w-2/3 flex flex-col">
      <h1 class="font-light text-blue-darker text-right -mb-1 pr-2">Camelize</h1>

      <div class="bg-blue-darker shadow-lg rounded-lg p-2">
        <input
          type="text"
          v-model.trim="message"
          placeholder="Begin typing..."
          class="appearance-none rounded block text-lg w-full py-2 px-3 text-blue-dark leading-tight focus:outline-none focus:shadow-outline"
        />
        <div
          class="rounded p-20 my-2 bg-blue-dark text-3xl text-blue-lighter font-mono text-center leading-loose"
          style="min-height: 220px; word-break: break-word;"
        >{{ camelizedMessage }}</div>

        <div
          class="flex flex-col md:flex-row md:justify-between px-2 text-center md:text-left leading-loose md:leading-normal"
        >
          <small class="font-light text-white">
            &copy;{{ year }}
            <a
              href="https://www.forefrontsoftware.com"
              target="_blank"
              class="text-blue-light hover:text-blue-lighter no-underline"
            >Forefront Software</a>
          </small>
          <small class="font-light text-white">
            <a
              href="https://www.ctosumo.com"
              target="_blank"
              class="text-blue-light hover:text-blue-lighter no-underline"
            >Need Tech Consulting? Try CTO Sumo!</a>
          </small>
          <small class="font-light">
            <a
              href="http://en.wikipedia.org/wiki/CamelCase"
              target="_blank"
              class="text-blue-light hover:text-blue-lighter no-underline"
            >What is this?</a>
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
      message: "",
      year: 2019
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
};
</script>
