<template>
<div class="header">
 <div class="container">
        <div class="row">
            <div><h1 class="logo">{{ logo }}</h1></div>
            <ul class="title">
                <li v-for="item,index in menu">
                    {{ item.name }}
                </li>
            </ul>
            <div class="search">
                <input type="text" placeholder="搜尋"><i></i>
            </div>
            <div class="user">
                <span></span>
                <p></p>
            </div>
            <a href="">登入</a>
        </div>
    </div>
</div>  
</template>

<script>
export default {
    name: 'NewsTitle',
    data(){
        return {
            logo:'LOGO',
            menu: [
                { name: '首頁' },
                { name: '熱門' },
                { name: '社會' },
                { name: '娛樂' },
                { name: '生活' },
                { name: '國際' },
                { name: '健康' },
                { name: '旅遊' },
            ]
        }
    }
}

</script>


<style >
    .title{
        list-style-type: none;
        display: flex;
        margin: auto 0;
    }
    .title li{
        margin-right: 15px;
    }
    .header{
        background-color: grey;
    }
    .header .row{
        justify-content: center;
    }
    .search{
        margin: auto 0;
    }
    .search input{
        border-radius: 5px;
    }
</style>
