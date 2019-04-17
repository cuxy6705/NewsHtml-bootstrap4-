<template>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="logodiv">
          <h1 class="logo">{{ logo }}</h1>
        </div>
        <ul class="title">
          <li v-for="(item,index) in menu">{{ item.name }}</li>
        </ul>
        <div class="search">
          <input type="text" placeholder="搜尋">
          <i class="fas fa-search"></i>
        </div>
        <div class="user">
          <span></span>
          <p></p>
        </div>
        <a class="loging" href>
          <i class="fas fa-user"></i>登入
        </a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      logo: "LOGO",
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
      ]
    };
  }
};
</script>

