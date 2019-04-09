<template>
  <div id="app">
    <NewsTitle/>
    <Banner/>
  </div>
</template>

<script>
import NewsTitle from './components/NewsTitle.vue'
import Banner from './components/Banner.vue'
export default {
  name: 'app',
  components: {
  NewsTitle,
  Banner
  }
}
</script>


<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
