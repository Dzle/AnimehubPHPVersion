<style>
    *{
        margin:0px;
        padding:0px;}
    body{
        cursor: url("images/cur/miku1.png"),auto;
        overflow: visible;
    }
    a{cursor: url("images/cur/miku2.png"),auto;}
    .nav-mask{
        left: 2px;
        width: 100%;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.4);
        box-shadow: rgba(0, 0, 0, 0.1) 0 1px 2px;
        float: left;
    }
    .nav-mask .p {
        line-height: 50px;
        color: #333333;
        text-decoration: none;
        background-position: center center;
        height: 50px;
        width: 60px;
        list-style-image: none;
        list-style-type: none;
        float: left;
    }
    .nav-mask  .p  a  {
        text-decoration: none;
        color: #333333;
        height: 50px;
        width: 60px;
        display: block;
        text-align: center;
        list-style-image: none;
    }

    .u-link {
        display: block;
        width: 68px;
        height: 55px;
        line-height: 55px;
        text-align: center;
        font-size: 14px;
        color: #fff;
        background-color: #f45a8d;
        border-radius: 0 0 6px 6px;
        float: left;
        position: absolute;
        top: 0px;
        right: 50px;
        text-decoration: none;
    }
    #bg{
        margin-left: auto;
        width: 100%;
        height: 180px;
        margin-right: auto;
        background-image: url( "images/bg.png");
        background-repeat: no-repeat;
        position: relative;
        background-position: center;

    }
    #tip {
        background-color: #FFFF99;
        height: 40px;
        line-height: 40px;
        font-size: 12px;
        color: #FF6633;
        text-align: center;
    }
    .logol {
        color: #FFFFFF;
        display: block;
        float: left;
        line-height:150px;
        margin-left: 30px;
    }
    .logor{
        color: #000000;
        background-color: #FF9900;
        display: block;
        width: auto;
        float: left;
        height: 45px;
        margin-top: 54px;
        line-height: 45px;
        border-radius:5px;
        text-align: center;
        padding-right: 5px;
        padding-left: 5px;
    }
</style>

<!------xinyuu------>
<div id="bg">
  <div class="nav-mask">
    
    <a href="upload/upload.php" target="_blank" class="u-link"> 投稿 </a></div>
  <div class="logo">
    <h1 class="logol">Anime</h1><div class="logor">
    <h1>Hub</h1>
  </div></div>
</div>
<div id="tip"><?php $sid= session_start();   echo"站点目前正在使用的SESSION文件数共:".$sid."个。"; ?></div>
