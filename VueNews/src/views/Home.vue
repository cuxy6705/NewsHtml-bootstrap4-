<template>
  <div class="home">
    <Banner/>
    <MainNews/>
  </div>
</template>

<script>
// @ is an alias to /src
import MainNews from "../components/Mainnews.vue";
import Banner from "../components/Banner.vue";
export default {
  name: "home",
  components: {
    MainNews,
    Banner
  }
};
</script>
