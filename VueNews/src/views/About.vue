<template>
  <div class="about">
    <Detail/>
  </div>
</template>
<script>
// @ is an alias to /src
import Detail from "../components/Detail.vue";
export default {
  name: "home",
  components: {
    Detail
  },
  mounted: function() {
    FB.XFBML.parse();
  }
};
</script>

