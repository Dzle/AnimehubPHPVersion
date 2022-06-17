<?php
@$use = $_POST[uset];
@$psw = $_POST[pwdt];
//require_once"header.php";

if($use == "" || $psw == ""){
    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
}else {
    $con = mysqli_connect('localhost', 'root', '', 'user_info', '3306');
    if (mysqli_connect_errno($con)) {
        echo "infoI.:连接数据库失败。。。(；д；) ：" . mysqli_connect_error();
    } else {
        echo "infoI.:欢迎新用户$use.。连接数据库成功，即将递交注册信息。。。٩(๑>◡<๑)۶ <br>";
        echo "正在记录...<br>";
    }

    $sql = "INSERT INTO users (user,pswd) VALUES('$use','$psw')";;
    if (mysqli_query($con, "$sql")) {
        echo "infoII.:递交成功，注册完毕(*^▽^*)！请 <a href='login.php'>立即登录</a>";
        header("Location: login.php");
    } else {
        echo "infoII.:写入数据库失败,。。。(；д；) ：用户名已被占用或数据不合法";


    }
}