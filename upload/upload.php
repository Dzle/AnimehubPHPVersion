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

<?php require_once"../header.php";
function checklogin(){

    if(empty($_SESSION['user_info'])){//检查一下session是不是为空

        if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){//如果session为空，并且用户没有选择记录登录状

            header("location:login.php?req_url=".$_SERVER['REQUEST_URI']);//转到登录页面，记录请求的url，登录后跳转过去，用户体验好。

        }else{//用户选择了记住登录状态

            $user=getUserInfo($_COOKIE['username'],$_COOKIE['password']);//去取用户的个人资料

            if(empty($user)){//用户名密码不对没到取到信息，转到登录页面

                header("location:login.php?req_url=".$_SERVER['REQUEST_URI']);

            }else{

                $_SESSION['user_info']=$user;//用户名和密码对了，把用户的个人资料放到session里面

            }

        }

    }

}
?>

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
