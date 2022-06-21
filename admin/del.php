<?php
$con = mysqli_connect('localhost','root','','user_info');
$uid = @$_GET['uid'];
$sql = "DELETE FROM users WHERE uid=$uid";
if(mysqli_query($con,$sql)){
    echo'删除成功';
}else{
    echo'error';
}