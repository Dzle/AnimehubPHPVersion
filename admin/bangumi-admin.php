<!doctype html>
<?php
header("Content-type: text/html;charset=utf-8");
?>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN新番数据登记工具-BangumiTools</title>

</head>

<body>
<H4>ADMIN新番数据登记工具-BangumiTools</H4>
<form action="admin-bangumi.php" method="POST">
<p>番剧名称：<input name="banguminame" type="text"></p>
别名:<input name="sname" type="text"><BR>

    分类<input  name="bclass"type="text"><br>
    图片URL：<input name="bangumiurl" type="text" width="300px;"><br>
    状态<br>
    <input name="type" type="radio" value="更新中">即将上映
    <input name="type" type="radio" value="更新中">更新中
    <input name="type" type="radio" value="更新中">已完结
    
<p>简介</p>
<textarea  style="height:520px; width:90%;" name="story" cols="" rows=""></textarea>
<input name="" type="submit">
</form>

</body>
</html>
