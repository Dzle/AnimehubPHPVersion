<?php
$uid = @$_POST[uid];
$user = @$_POST[user];
$suser = @$_POST[suser];
$psw = @$_POST[pswd];
$con = mysqli_connect('localhost','root','','user_info');
$sql = "UPDATE users SET user='{$user}',pswd='{$psw}',suser='{$suser}'WHERE uid='{$uid}'";
if(mysqli_query($con,$sql)){
    echo'修改成功';
}else{
    echo 'ERROR';
}