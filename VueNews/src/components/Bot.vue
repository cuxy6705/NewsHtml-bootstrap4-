<template>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="ftop">
          <a href="javascript:0;" v-for="(item,index) in footer">{{ item.link }}</a>
        </div>
        <span>©Arkker 2019 All Rights Reserved</span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      footer: [
        {
          index: 1,
          link: "相關連結"
        },
        {
          index: 2,
          link: "相關連結"
        },
        {
          index: 3,
          link: "相關連結"
        },
        {
          index: 4,
          link: "相關連結"
        },
        {
          index: 5,
          link: "相關連結"
        },
        {
          index: 6,
          link: "相關連結"
        },
        {
          index: 7,
          link: "相關連結"
        },
        {
          index: 8,
          link: "相關連結"
        }
      ]
    };
  }
};
</script>

