<?php
require_once"header.php";
@$bid = $_POST[bid];
@$link = $_POST[links];
@$name = $_POST[name];
$con = mysqli_connect('localhost', 'root', '', 'bangumi', "3306")
or die('error');
$sql = "INSERT INTO videolist (bid,name,imglinks) VALUES ('$bid','$name','$link')";

if (mysqli_query($con, "$sql")) {
    echo "infoII.:递交成功(*^▽^*)！";


} else {
    echo "infoII.:写入数据库失败,。。。(；д；) ：用户名已被占用或数据不合法";


}