<?php
require_once"header.php";

$con = mysqli_connect('localhost','root','','user_info','3306');
if (mysqli_connect_errno($con))
{
    echo "infoI.:连接数据库失败。。。(；д；) ：" . mysqli_connect_error();
}else{
    echo"infoI.:欢迎新用户$_POST[uset]。连接数据库成功，即将递交注册信息。。。٩(๑>◡<๑)۶ <br>";
    echo "正在记录...<br>";
}

$sql = "INSERT INTO users (user,pswd) VALUES('$_POST[uset]','$_POST[pwdt]')";

;
if(mysqli_query($con,"$sql")){
    echo "infoII.:递交成功，注册完毕(*^▽^*)！请 <a href='login.php'>立即登录</a>";
} else {
    echo "infoII.:写入数据库失败,。。。(；д；) ：用户名已被占用或数据不合法";


}