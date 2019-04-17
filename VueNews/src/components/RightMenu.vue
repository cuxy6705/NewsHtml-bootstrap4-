<template>
  <div class="rightmenu">
    <div class="top10">
      <h2>熱門</h2>
      <div id="select" class="select">
        <div class="swiper-wrapper">
          <div class="swiper-slide" v-for="(item,index) in menu">{{ item.name }}</div>
        </div>
        <div class="select-prev arrow">&lt;</div>
        <div class="select-next arrow">&gt;</div>
      </div>
      <div class="rightnews">
        <div v-for="(item,index) in rightnews">
          <li>
            <span>{{ item.index }}</span>
            <P>{{ item.title }}</P>
          </li>
          <p>{{ item.miniti }}</p>
        </div>
      </div>
    </div>
    <div class="fb">
      <iframe
        src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/ETtodayPETS/&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
        width="340"
        height="500"
        style="border:none;overflow:hidden"
        scrolling="no"
        frameborder="0"
        allowtransparency="true"
        allow="encrypted-media"
      ></iframe>
    </div>
    <div class="Ad">
      <div class="row">
        <p>廣告</p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      menu: [
        {
          name: "首頁"
        },
        {
          name: "熱門"
        },
        {
          name: "社會"
        },
        {
          name: "娛樂"
        },
        {
          name: "生活"
        },
        {
          name: "國際"
        },
        {
          name: "健康"
        },
        {
          name: "旅遊"
        }
      ],
      rightnews: [
        {
          index: 1,
          title: "六輕氣爆報告出爐／管線洩漏上午就發現 雲林縣長怒",
          miniti: "亞科新聞"
        },
        {
          index: 2,
          title: "日本 Janpara 店家 Google Pixel 3 超特價只要新台幣14,000元",
          miniti: "三立新聞"
        },
        {
          index: 3,
          title: "英若硬脫歐 聯合國盤點全球最大贏家與輸家",
          miniti: "公視新聞"
        },
        {
          index: 4,
          title: "《玩很大》黑隊隊長換他！　隔4年合體小鬼…網嗨翻：《角頭》團聚",
          miniti: "東森新聞"
        },
        {
          index: 5,
          title: "標普500指數終止連八漲 全球經濟和貿易摩擦又蒙陰霾",
          miniti: "民視新聞"
        },
        {
          index: 6,
          title: "英若硬脫歐 聯合國盤點全球最大贏家與輸家",
          miniti: "財經新聞"
        },
        {
          index: 7,
          title: "大甲媽遶彰化警察被打傷 方仰寧嗆黑道「相堵ㄟ丟！」",
          miniti: "八七新聞"
        },
        {
          index: 8,
          title:
            "神魔之塔x《聖鬥士星矢》合作確認 與雅典娜及眾多聖鬥士並肩作戰！",
          miniti: "想不到新聞"
        },
        {
          index: 9,
          title: "關於史上首張黑洞照片，這些是你需要的科普資料",
          miniti: "高雄新聞"
        },
        {
          index: 10,
          title: "慟!!!!中午不知道要吃什麼",
          miniti: "台灣新聞"
        }
      ]
    };
  },
  mounted: function() {
    var swiper2 = new Swiper(".select", {
      width: 50,
      spaceBetween: 0,
      freeMode: true,
      loop: false,
      autoHeight: true,
      navigation: {
        nextEl: ".select-next",
        prevEl: ".select-prev"
      }
    });
  }
};
</script>
