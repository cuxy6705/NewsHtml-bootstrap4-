<template>
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="top">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="back"></div>
                <img src="../assets/banner1.jpg" alt>
              </div>
              <div class="swiper-slide">
                <div class="back"></div>
                <img src="../assets/banner2.jpg" alt>
              </div>
              <div class="swiper-slide">
                <div class="back"></div>
                <img src="../assets/banner3.jpg" alt>
              </div>
              <div class="swiper-slide">
                <div class="back"></div>
                <img src="../assets/banner4.jpg" alt>
              </div>
              <div class="swiper-slide">
                <div class="back"></div>
                <img src="../assets/banner5.jpg" alt>
              </div>
              <div class="swiper-slide">
                <div class="back"></div>
                <img src="../assets/banner6.jpg" alt>
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
        <div class="bot">
          <h1>台股盤前─萬一關前面臨劇烈震盪 選股方向在兩大方向</h1>
          <span>2020/04/01 21:08</span>
          <p>台北股市 8 日在台積電 (2330-TW) 及大立光 (3008-TW) 的交叉掩護之下，收盤指數收盤大漲 96.19 點，收盤指數報 10800.57 點，市場成交值放大到 1556 億元，在台股將上攻 1 萬 1000 點的大關同時，選擇低位階及營收成長股，為現階段重要操作心法。</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted: function() {
    var mySwiper = new Swiper(".swiper-container", {
      loop: true,
      pagination: {
        el: ".swiper-pagination"
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        slideChangeTransitionStart: function() {
          $(".back").css("opacity", 0.5);
          $(".swiper-slide-active")
            .find(".back")
            .css("opacity", 0);
        }
      }
    });
  }
};
</script>
