<template>
  <div class="mainnews">
    <BigTitle/>
    <div class="container">
      <div class="row">
        <LeftMainNews/>
        <div class="col-4">
          <RightMenu/>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import BigTitle from "./BigTitle.vue";
import LeftMainNews from "./LeftMainNews.vue";
import RightMenu from "./RightMenu.vue";
export default {
  components: {
    BigTitle,
    LeftMainNews,
    RightMenu
  },
  created() {
    window.FB.XFBML.parse();
  }
};
</script>
