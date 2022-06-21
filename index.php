
<?php require_once"header.php"?>
<head>
    <title>Animehub</title>
    <link rel="stylesheet" href="style/index.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body><div class="inputstylea">
<form action="search" method="get">
    <p><input  type="text" name="word" class="inputstyle" placeholder="输入番剧名进行检索,如“间谍“ ”间谍过家家“ ""/>&nbsp;<input name="" type="submit" class="button"value="搜索"></p>

</form></div>

</body>
<form action="bangumi.php" method="get">
<?php
echo "   <meta name=\"referrer\" content=\"no-referrer\">\n";
@$word = $_GET[word];
$con = mysqli_connect('localhost','root','','bangumi','3306');
$sql = "SELECT*FROM main WHERE name LIKE '%$word%'";//通过用户给的关键词
foreach (mysqli_query($con,$sql) as $row){
    $name = $row['name'];//番剧名
    $img = $row['imglinks'];//番剧图片
    $story = $row['story'];//故事
    $bid = $row['bid'];//番剧BID
    $sname = $row['sname'];//字幕组
    $class = $row['class'];//类型
    $rowtype = $row['row'];

echo "<DIV class=\"class\">\n";
echo "<div class=\"list\">\n";
echo "<img class=\"img\" src='$img'>\n";
echo "<div class=\"left\">\n";
echo "<div class=\"name\">\n";
echo "<a class=\"title\">$name</a>\n";
echo"    <a class=\"video_class\">状态：$rowtype</a>\n";
echo  "  <a class=\"video_class\">$class</a>\n";
echo "</div>\n";
echo "</div>\n";
echo "<div class=\"right\">\n";
echo "<a class=\"blook\" href='bangumi.php?bid=$bid'>查看详情</a>\n";
echo "</div>\n";
echo "</div>\n";
echo "</DIV>\n";



}
$stmt = mysqli_query($con,$sql);
echo"共有".mysqli_num_rows($stmt)."条记录喵(〃'▽'〃)";//统计在该表中此用户的记录数
?>
</form>
<!------xinyuu design------>
