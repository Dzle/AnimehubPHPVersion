<!doctype html>
<?php
require_once"header.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<H4>ADMIN新番数据登记工具-BangumiTools</H4>
<p>单话登记</p>
<form action="video_admin.php" method="post">
<p>Bangumi编号【BID】</p>
<input name="bid" type="text">
    名称
    <input name="name" type="text">
<p>资源链接</p>
<input name="links" type="text"><br>
如果是本地资源请在文件名前加【video/】前缀，如（video/文件名.mp4）<br>
互联网资源请添加【http/https】协议前缀，如http://localhost/video/xxx.mp4
<p><input name="" type="submit"></p>
</form>
</body>
</html>
