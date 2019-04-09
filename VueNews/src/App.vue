<template>
  <div id="app">
    <NewsTitle/>
  </div>
</template>

<script>
import NewsTitle from './components/NewsTitle.vue'
export default {
  name: 'app',
  components: {
  NewsTitle
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
