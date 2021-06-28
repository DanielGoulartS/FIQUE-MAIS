<style>
    *{
        padding: 0px;
        margin: 0px;
        font-family: fantasy;
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
        font-family: fantasy;
        color:white;
        position:relative;
        top:-70px;
    }
    div{
        width: 100%;
    }
    #div1{
        width:100%;
        height: 100%;
        position: fixed;
        background-image: url(IMG/80s2.gif);
        background-size: cover;
        background-position: center;
    }
    #div2{
          height: 720px;
          background-color: <?php echo 'rgba(' . rand(50, 255) . ',' . rand(50, 255) . ',' . rand(50, 255) . ',' . rand(0, 1) . '.' . rand(0, 9) . ')'; ?>;
          backdrop-filter: blur(15px);
          font-family: fantasy;
          font-size: 200px;
          color: <?php echo 'rgb(' . rand(0, 255) . ',' . rand(50, 255) . ',' . rand(50, 255) . ')'; ?>;
          text-align: center;
    }
    #div2 h2{
        font-family: fantasy;
        font-size: 150px;
        color: white;
        text-align: center;
        background: rgba(0,0,0,0.5);
        margin-top: 100px;
        border-top:1px solid black;
        border-bottom: 1px solid black;
    }
    #div3{
        font-family: fantasy;
        font-size: 100px;
        color: white;
        text-align: center;
        height: 550px;
        position: relative;
        top: 650px;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(15px);
    }
    #divcent{
        background: rgba(0,0,0,0.5);
        border-top:1px solid black;
        border-bottom: 1px solid black;
        display:flex;
        flex-direction: row;
        justify-content:center;
    }
    #final{
        width: 1343px;
        background-color: rgba(300,300,300,0.7);
        font-family:Sans-serif;
        color:black;
        position: absolute;
        bottom:0px;
        text-align: center;
        border-top:1px solid black;
    }
    h1{ 
        width: 1000px;
        text-align: left;
        font-family: fantasy;
        font-size: 200px;
        color: <?php echo 'rgb(' . rand(0, 255) . ',' . rand(50, 255) . ',' . rand(50, 255) . ')'; ?>;
    }
    #nickname{
        color:rgba(209, 38, 38,1);
    }
    table{
        width:100%;
        position:relative;
        color:white;
        background-color: rgba(0,0,0,0.0);
        font-size: 30px;
        text-align: center;
        border-collapse:collapse;
        top:70px;
    }
    #td, #td-2, #td1, #td1-2, #td2, #td2-2, #td3, #td3-2, #td4, #td4-2{
        padding:10px;
        padding-left:50px;
        padding-right:50px;
    }
    #tr , #tr2 , #tr4 {
        background-color: rgba(200,200,200,0.7);
    }
</style>
