<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    *{
        padding: 0px;
        margin: 0px;
        font-family: Fantasy, Impact, Arial, Lucida Console;
        font-family: 'Roboto', sans-serif;
    }
    body::-webkit-scrollbar{
        display:none;
    }
    .box{
        width:170px;
        height:60px;
        border: 1px solid black;
        background: rgba(0,0,0,0.5);
        font-size: 30px;
        color:white;
        position:relative;
        margin-top:5px;
    }
    
    #toggle{
        display: none;
    }
    
    #toggle:checked~#balao{
        margin-left: -10%;
    }
    
    #balao{
        color:<?php echo 'rgb(' . rand(150, 255) . ',' . rand(150, 255) . ',' . rand(150, 255) . ')'; ?>;
        text-shadow: 2px 0 #000,
            -2px 0 #000,
            0 2px #000,
            0 -2px #000,
            1px 1px #000,
            -1px -1px #000,
            1px -1px #000,
            -1px 1px #000;
        text-align: center;
        border: 1px solid black;
        z-index: 1;
        position: fixed;
        background-color: <?php echo 'rgba(' . rand(0, 100) . ',' . rand(50, 100) . ',' . rand(50, 100) . ',' . 0.8 . ')'; ?>;
        margin: 10px;
        aspect-ratio: 1 / 1;
        transition: 0.5s;
    }
    
    #balao h2{
        font-size: 200%;
        margin-top: 15%;
    }
    
    #balao ul{
        font-size: 90%;
        color: lightgray;
        list-style: none;
        line-height: 20px;
;
        text-shadow: none;
    }
    ul a{
        color: lightskyblue ;
    }

    #balao ul #pixKey{
        color:<?php echo 'rgb(' . rand(150, 255) . ',' . rand(150, 255) . ',' . rand(150, 255) . ')'; ?>;
        text-shadow: 2px 0 #000,
            -2px 0 #000,
            0 2px #000,
            0 -2px #000,
            1px 1px #000,
            -1px -1px #000,
            1px -1px #000,
            -1px 1px #000;
    }
    
    #balao ul #arrow{
        color: black;
        font-size: 200%;
        margin-top:5%;
    }

    #div1{
        width:100%;
        height: 100%;
        position: fixed;
        background-image: url(./Media/80s2.gif);
        background-size: cover;
        background-position: center;
        z-index:-1; /*//Obrigado pela Contribuição Ana-Chan*/
    }
    @media(max-width: 700px){
        #div1{
            height:120%;
        }
    }
    #div2{
        height:100%;
        background-color: <?php echo 'rgba(' . rand(50, 255) . ',' . rand(50, 255) . ',' . rand(50, 255) . ',' . rand(0, 1) . '.' . rand(0, 9) . ')'; ?>;
        backdrop-filter: blur(15px);
        font-size: 200px;
        color: <?php echo 'rgb(' . rand(0, 255) . ',' . rand(50, 255) . ',' . rand(50, 255) . ')'; ?>;
        text-align: center;
    }
    @media(min-width: 0px){
        #div2{
            height: 112%;
        }
     }
    @media(max-width: 700px){
        #div2 #lol{
            font-size:50%;
        }
        #div1{
            height:120%;
        }
    }
    #div3{
        font-size: 380%;
        color: white;
        text-align: center;
        width: 100%;
        height: 460px;
        position: relative;
        top: 650px;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(15px);
    }
    @media(max-width: 700px){
        #div3{
            font-size:300%;
        }
    }
    
    #divcent{
        background: rgba(0,0,0,0.5);
        border-top:1px solid black;
        border-bottom: 1px solid black;
        width: 100%;
    }
    #divcent h1{
        text-align: center;
        font-size: 80%;
        color: <?php echo 'rgb(' . rand(0, 255) . ',' . rand(50, 255) . ',' . rand(50, 255) . ')'; ?>;
    }
    @media(max-width: 1200px){
        #divcent h1{
            font-size: 60%;
        }
    }
    @media(max-width: 1000px){
        #toggle:checked~#balao{
            margin-left: -37%;
        }

        #balao{
            margin-top: 120%;
        }

        #divcent h1{
            font-size: 50%;
        }
    }
    @media(max-width: 700px){
        #divcent h1{
            font-size: 40%;
        }
    }
    @media(max-width: 500px){
        #divcent h1{
            font-size: 25%;
        }
     }
    #nickname{
        color:rgba(209, 38, 38,1);
    }
    table{
        width: 100%;
        position:relative;
        color:white;
        background-color: transparent;
        font-size: 50%;
        text-align: center;
        border-collapse:collapse;
        top:70px;
    }
    #td, #td-2, #td1, #td1-2, #td2, #td2-2, #td3, #td3-2, #td4, #td4-2{
        padding: 5px;
        padding-left:0%;
        padding-right:5%;
    }
    #tr , #tr2 , #tr4 {
        background-color: rgba(200,200,200,0.7);
    }
</style>
