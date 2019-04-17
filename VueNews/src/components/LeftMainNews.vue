<template>
  <div class="col-8 leftmain">
    <div class="icontitle">
      <div>
        <i class="fas fa-eye"></i>
        <p>{{ textnews.view }}</p>
        <i class="fas fa-calendar-alt"></i>
        <p>{{ textnews.time }}</p>
      </div>
      <div>
        <a href="javascript:0;">
          <i class="fab fa-line"></i>
        </a>
        <a href="javascript:0;">
          <i class="fab fa-facebook"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="maintext">
        <img src alt>
      </div>
    </div>
    <div class="outBoxtext">
      <div>
        <a href="javascript:0;">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="javascript:0;">
          <i class="fab fa-line"></i>
        </a>
      </div>
      <div>
        <p>{{ textnews.text }}</p>
      </div>
    </div>
    <div class="videonews">
      <h2>留言</h2>
    </div>
    <div class="row message">
      <div
        class="fb-comments"
        data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
        data-numposts="3"
        width="100%"
      ></div>
    </div>
    <div class="videonews">
      <h2>更多娛樂新聞</h2>
    </div>
    <div class="row secendVer">
      <div class="newstitle newsMiniTitle" v-for="(item,index) in mininews">
        <div class="playbox col-5"></div>
        <div class="time col-7">
          <h3>{{ item.title }}</h3>
          <p>{{ item.time }}</p>
          <p>{{ item.mininews }}</p>
        </div>
        <div class="bottomline">
          <div class="hide" v-if="index == mininews.length-1"></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      textnews: {
        title: "維基解密創辦人艾山吉 被拖出倫敦大使館",
        time: "2019/04/12 04:10",
        view: "94878",
        text:
          "揭露40萬筆美國機密檔案的揭密網站「維基解密」創辦人艾山吉，在滯留厄瓜多駐英大使館近7年後，遭倫敦警方強行拖出大使館，警方表示逮捕行動是應美國當局的引渡要求。美國司法部證實，已向英國提出引渡要求，一旦艾山吉被引渡到美國，入侵電腦罪名成立，刑期為5年。英國首相府稱未向厄國政府遊說下逐客令，而英國法院昨稍後裁決，艾山吉當年棄保躲入厄使館有罪。 美司部法 已要求引渡 昨天上午，厄國基於艾山吉違反政治庇護條件，戲劇性翻臉撤銷庇護，結束他在使館內6年9個月又24天的「作客」生涯。7、8名彪形大漢把他又拉又抬挪出大使館，久未公開露臉的艾山吉蓄著滿臉落腮鬍，在被上銬強行帶上車前，他對著大使館外的群眾高喊「英國一定要抵抗(美國)到底！」表達抗議。他被捕時手上拿著美國知名小說兼劇作家戈爾·維達爾的作品《國家安全狀態史》。 史諾登批 黑暗的一天 英國警方稍早證實，他們是在「厄瓜多政府撤銷庇護後，應厄國大使要求，進入館內逮捕艾山吉」，理由是違反2012年逮捕令。維基解密在艾山吉被捕後發推文批評，厄國以非法之舉中止政治庇護違反國際法，同為揭密者、目前流亡俄羅斯的美國前國安局雇員史諾登，則表示這是「新聞自由史上黑暗的一天」。 一心想攆走艾山吉的厄國總統莫雷諾昨天說，「厄方對艾山吉舉止的耐性已到極限，」且對方「多次違反國際公約和日常生活協議。」 厄總統稱 忍他到極限 維基解密因公開40萬件美國機密外交與軍事電文，讓美國與盟邦滿臉豆花，包括台灣在內的政治人物都被牽連其中，被稱為「外交界的911事件」，艾山吉因此成華府眼中釘，美國早磨刀霍霍意圖把他引渡至美報洩密之仇。 但導致艾山吉淪為通緝犯的源頭，是他2010年在瑞典涉嫌性侵與性騷擾，他離境後遭瑞典通緝而向英國自首。他為避免遭引渡至美國，乾脆違反保釋條款，在2012年6月進入厄國駐倫敦大使館尋求政治庇護並獲准。 厄瓜多為保護艾山吉不惜槓上英、美，但時日一久，他們的耐性逐漸消磨殆盡。莫雷諾還下令，撤除使館的額外保安人員，因為代號「訪客行動」( 或飯店行動)的艾山吉保護專案，每月耗資近200萬台幣。"
      },
      mininews: [
        {
          index: 1,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22",
          mininews: "亞科新聞"
        },
        {
          index: 2,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22",
          mininews: "亞科新聞"
        },
        {
          index: 3,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22",
          mininews: "亞科新聞"
        },
        {
          index: 4,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22",
          mininews: "亞科新聞"
        },
        {
          index: 5,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22",
          mininews: "亞科新聞"
        },
        {
          index: 6,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22",
          mininews: "亞科新聞"
        }
      ]
    };
  }
};
</script>

