<?php
$con = mysqli_connect('localhost','root','','user_info','3306')
or die(连接数据库失败。。。);
mysqli_query($con,'user')
or die('不能选择数据库文件');
mysqli_set_charset($con,'utf8');
switch (@$_GET['uid']){

}