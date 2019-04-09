<template>
<div class="header">
 <div class="container">
        <div class="row">
            <div class="logodiv" ><h1 class="logo">{{ logo }}</h1></div>
            <ul class="title">
                <li v-for="(item,index) in menu">
                    {{ item.name }}
                </li>
            </ul>
            <div class="search">
                <input type="text" placeholder="搜尋"><i class="fas fa-search"></i>
            </div>
            <div class="user">
                <span></span>
                <p></p>
            </div>
            <a class="loging" href=""><i class="fas fa-user"></i>登入</a>
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
        color: white;
        font-size: 20px;
    }
    .header{
        background-color:rgb(77, 77, 77);
        margin-bottom: 50px;
    }
    .header .row{
        justify-content: space-between;
        height: 100px;
    }
    .search{
        margin: auto 0;
        position: relative;
    }
    .fa-search{
        position:absolute;
        right: 7px;
        top: 7px;
        color: rgb(77, 77, 77);
        font-size: 25px;
        cursor: pointer;
    }
    .search input{
        border-radius: 5px;
        height: 40px;
        border: 0;
        padding: 0px 10px;
    }
    
    .logodiv{
        margin:auto 0;
    }
    .logo{
        color: white;
        font-weight: bold;
        margin-bottom: 0;
    }
    .loging{
        position: relative;
        margin: auto 0;
        color: aliceblue;
        padding-left: 40px;
    }
    .loging:hover{
        color: white;
        text-decoration: none;
    }
    .fa-user{
        position: absolute;
        left: 10px;
        top: 0px;
        font-size: 25px;
    }
</style>
