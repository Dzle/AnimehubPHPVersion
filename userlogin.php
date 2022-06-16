<?php
require_once"header.php";
$use = $_POST['username'];
$pass = $_POST['password'];
if($use == "" || $pass == "")

{

    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";

} else{
    $sqlit = mysqli_connect('localhost','root','','user_info','3306');
    if (mysqli_connect_errno($sqlit))
    {
        echo "infoI.:连接数据库失败。。。(；д；) ：" . mysqli_connect_error();
    }else{
        echo"infoI.:欢迎登录，$use.。连接数据库成功，即将验证信息。。。٩(๑>◡<๑)۶ <br>";
        echo "正在查找...<br>";
    }
}
    $sql = "SELECT user,pswd FROM users WHERE user = '$use' and pswd = '$pass'";
    $re = mysqli_query($sqlit,"$sql");
    $num = mysqli_num_rows($re);
    if($num) {

        $row = mysqli_fetch_array($re);
        echo"infoII.:欢迎回来，".$row[0];
    } else {

        echo "用户名或密码不正确！</script>";

    }
