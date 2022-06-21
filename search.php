<link rel="stylesheet" href="style/index.css">
<?php
require_once"header.php";?>
<?php

@$word = $_GET[word];
$con = mysqli_connect('localhost','root','','bangumi','3306');
$sql = "SELECT*FROM main WHERE name LIKE '%$word%'";
foreach (mysqli_query($con,$sql) as $row){
    $name = $row['name'];
    $img = $row['imglinks'];
    $story = $row['story'];
    $bid = $row['bid'];
    $sname = $row['sname'];
    $class = $row['class'];

echo "<div class=\"list\">\n";
echo "<img class=\"img\" src=\"$img\" width=\"97\" height=\"137\">\n";
echo "<a class=\"title\" href=\"bangumi.php?bid=$bid\">$name</a>\n";
    echo "<p class=\"video_class\">$sname 字幕组</p>\n";
    echo "<p class=\"video_class\">类型：$class </p>\n";
echo "</div>\n";


}
$stmt = mysqli_query($con,$sql);
echo"共有".mysqli_num_rows($stmt)."条记录喵(〃'▽'〃)";//统计在该表中此用户的记录数
?>
<!------xinyuu design------>