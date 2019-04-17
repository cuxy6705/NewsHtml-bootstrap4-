<template>
  <div id="app">
    <Newtitle/>
    <div id="nav">
      <router-link to="/">Home</router-link>|
      <router-link to="/about">About</router-link>
    </div>
    <router-view/>

    <Bot/>
  </div>
</template>


<script>
import Newtitle from "./components/Newtitle.vue";
import Bot from "./components/Bot.vue";
export default {
  components: {
    Newtitle,
    Bot
  }
};
</script>

<style>
@import "./assets/style.min.css";
</style>
