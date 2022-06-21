<?php
header("Content-type: text/html;charset=utf-8");
@$sname = $_POST[sname];
@$names = $_POST[banguminame];
@$stores = $_POST[story];
@$class = $_POST [bclass];
@$images = $_POST[bangumiurl];
@$type = $_POST[type];
$con = mysqli_connect('localhost','root','','bangumi',"3306")
or die('error');
$sql = "INSERT INTO main (sname,name,class,story,imglinks,row) VALUES ('$sname','$names','$class','$stores','$images','$type')";

if (mysqli_query($con, "$sql")) {
    echo "infoII.:递交成功(*^▽^*)！";


} else {
    echo "infoII.:写入数据库失败,。。。(；д；) ：用户名已被占用或数据不合法";


}