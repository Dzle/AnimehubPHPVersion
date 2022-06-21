<style type="text/css">
    .list {
        display: block;
        width: 70%;
        height: 160px;
        clip: rect(10px,auto,10px,auto);
        margin-top: 10px;
        margin-right: auto;
        margin-left: auto;
        border-radius:10px;
        background-color: beige;
    }
    .img {
        display: block;
        margin-top: 15px;
        margin-right: 10px;
        margin-left: 10px;
        float: left;
        border-radius: 5px;
    }
    .title {
        display: block;
        font-size: 25px;
        height: 40px;
        line-height: 40px;
        float: left;
        margin-top: 60px;
        color: #000000;
        text-decoration: none;
    }
    .left {
        width: 50%;
        display: block;
        height: 100%;
        float: left;
    }

    .video_class {
        height: 25px;
        width: auto;
        float: right;
        display: block;
        line-height: 25px;
        text-align: center;
        background-color: #FF6699;
        margin-top: 12.5px;
        color: #FFFFFF;
        border-radius:3px;
        padding-right: 5px;
        padding-left: 5px;
        margin-right: 5px;
    }
</style>

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
    echo "<p class=\"video_class\">汉化：$sname 字幕组</p>\n";
    echo "<p class=\"video_class\">类型：$class </p>\n";
    echo "</div>\n";


}
$stmt = mysqli_query($con,$sql);
echo"共有".mysqli_num_rows($stmt)."条记录喵(〃'▽'〃)";//统计在该表中此用户的记录数
?>