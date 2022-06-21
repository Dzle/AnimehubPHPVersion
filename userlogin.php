<?php
//require_once"header.php";
$use = $_POST['username'];
$pass = $_POST['password'];
if($use == "" || $pass == "")//判断用户名和密码是否为空

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

    $sql = "SELECT user,pswd FROM users WHERE user = '$use' and pswd = '$pass'";

    $re = mysqli_query($sqlit,"$sql");
    $num = mysqli_num_rows($re);
    if($num) {

        $row = mysqli_fetch_array($re);
        //获取用户UID，并记录到session中
        $uid = "SELECT*FROM users WHERE user ='$use'";
        foreach (mysqli_query($sqlit,$uid) as $row){
        echo"infoII.:欢迎回来，".$row[0];
//记录session，
        session_start();
        $_SESSION["user"] = $use;
        $_SESSION["password"] = $pass;
        $_SESSION["uid"] =$row['uid'];
            $getuid = $row['uid'];
            //备用入口，如果浏览器无响应则提示用户手动跳转
        echo"infoIII.:SESSION已记录您的登录信息您的UID为$getuid<br>正在跳转至首页。。如无响应请<a href='index.php'>手动跳转至首页</a>";
        header("Location: index.php");
        }
    } else {

        echo "用户名或密码不正确！</script>";

    }
}
//<!------xinyuu design------>