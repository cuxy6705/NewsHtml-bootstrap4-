<template>
  <div class="mainnews">
    <div class="container">
      <div class="row">
        <div class="col-8 leftmain">
          <div class="videonews">
            <h2>影音新聞</h2>
          </div>
          <div id="sortable" class="row">
            <div class="newstitle" v-for="(item,index) in news">
              <div class="hide" v-if="item.index == 1"></div>
              <div class="playbox">
                <i class="far fa-play-circle"></i>
                <span class="minititle">{{ item.minititle }}</span>
              </div>
              <div class="time">
                <h3>{{ item.title }}</h3>
                <p>{{ item.time }}</p>
              </div>
            </div>
            <div class="newstitle newsMiniTitle" v-for="(item,index) in mininews">
              <div class="playbox col-5">
                <i class="far fa-play-circle"></i>
              </div>
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
          <a class="checkmore" href="javescript:0;">查看更多>></a>
          <div class="clearfix"></div>
          <div class="videonews">
            <h2>影音新聞</h2>
          </div>
          <div class="row secendVer">
            <div class="newstitle" v-for="(item,index) in news">
              <div class="hide" v-if="item.index == 1"></div>
              <div class="playbox">
                <span class="minititle">{{ item.minititle }}</span>
              </div>
              <div class="time">
                <h3>{{ item.title }}</h3>
                <p>{{ item.time }}</p>
              </div>
            </div>
          </div>
          <div class="row thirdVer">
            <div class="col-6 thirdLeft">
              <div
                class="newstitle newsMiniTitle"
                v-for="(item,index) in mininews"
                v-if="index < 3"
              >
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
            <div class="col-6 thirdR">
              <div class="thirdRight" v-for="(item,index) in mininews">
                <h3>{{ item.title }}</h3>
                <p>{{ item.time }}</p>
              </div>
              <div class="hide"></div>
              <a class="checkmore" href="javescript:0;">查看更多>></a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <RightMenu/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import RightMenu from "./RightMenu.vue";
export default {
  components: {
    RightMenu
  },
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
      news: [
        {
          index: 1,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22"
        },
        {
          index: 2,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22"
        },
        {
          index: 3,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22"
        },
        {
          index: 4,
          minititle: "社會",
          title: "新聞標題",
          time: "2019/04/01 22:22"
        }
      ],
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
