<?php require_once "header.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link>
<title>上传</title>
    <style>
.title2 {font-size: 12px}
.title{
	font-size: 16px;
	color: #666666;
    display:block;
    line-height:60px
}
</style>
<!-------->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>



<div id="body">

<div class="dison">
    <div id="name-top">
      <h2>文件上传</h2><h3 class="title2" style="">FileUpload</h3>
 	</div>
	<form enctype="multipart/form-data" action="uploaded.php" method="post">
    <input type="hidden" name="max_file_size" value="30000000"/>
   选择文件：<input type="file" name="userfile"/>
   <input type="submit" value="上传文件"/>
    </form>
</div>


</div>
	

</body>
	
</html>
<!------xinyuu design------>