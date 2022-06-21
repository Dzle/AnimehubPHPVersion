<?php
$actino = @$_GET['action'];

$con = mysqli_connect('localhost','root','','user_info')
or die('不能连接数据库');
mysqli_set_charset($con,"utf8");
switch ($actino){
    case'add':{
        $uid = @$_POST['uid'];
        $suid = @$_POST['suid'];
        $user = @$_POST['user'];
        $pswd = @$_POST['pswd'];
    $sql = "INSERT INTO users(user,pswd,suser) VALUES ('$user','$pswd','pswd')";
    if(mysqli_query($con,$sql)){
        echo "<script>
alert('增加成功');
</script>";
    }
    break;
    }case "del":{
        $uid = @$_GET['id'];
        $sql = "DELETE FROM users WHERE uid=$uid";
        mysqli_query($con,$sql);
}case "edit":{
    $uid = @$_POST[@uid];
    $use = $_POST[user];
    $suse = $_POST[suser];
    $psw = $_POST[pswd];
    $sql = "UPDATE user SET user='{$use}',pswd='{$psw}',suser='{$suse}'WHERE id='{$uid}'";
    //echo "<script>alert('修改成功');window.location='userinfo.php'</script>";
}
//break;
}

