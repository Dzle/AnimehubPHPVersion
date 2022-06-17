<link href="style/navigation.css" rel="stylesheet" type="text/css">
<div id="bodymin"><span><a href="#">首页</a></span>
    <span><a href="#" target="_blank">百科</a></span>
    <span><a href="#">游戏</a></span>
    <span><a href="#" target="_blank">搜索</a></span>
    <span><a href="#">热门</a></span> <span><a href="#">实验室</a></span>
    <span><a href="#">Wiki</a></span> <span><a href="#">搜索</a></span>

<span>
   <?php
   $username = @$_SESSION["user"];
       echo"<a href='userinfo.php'>$username</a>";

   ?>
</span>
