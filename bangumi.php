
<?php
header("Content-Type: text/html;charset=utf-8");
require_once"header.php";
$bid = $_GET["bid"];
$con = mysqli_connect('localhost','root','','bangumi','3306');
$sql = "SELECT*FROM main WHERE bid=$bid";
$listsql = "SELECT*FROM videolist WHERE bid=$bid";
header("Content-Type: text/html;charset=utf-8");
?>
<head>
    <link rel="stylesheet"href="style/bangumiV1.0.css">

<?php

foreach (mysqli_query($con,$sql) as $row){
$name = $row['name'];
$img = $row['imglinks'];
$story = $row['story'];
$class = $row['class'];
$sname = $row['sname'];
$rowtype = $row['row'];


    echo "   <meta name=\"referrer\" content=\"no-referrer\">\n";
    echo "   \n";
    echo "   <title>$name</title>\n";


    echo "	<div class=\"body\">\n";
echo "  <div class=\"info\">\n";
echo "    <img src=\"$img\" alt=\"\" width=\"746\" height=\"982\"/>\n";
echo "    <div class=\"port\">\n";
echo "      <h1>$name</h1>\n";
echo "      <P style=\"color:#666666; line-height:50PX;\">字幕组：$sname</P>\n";
echo "		\n";
echo "      <div class=\"player\">\n";
echo "		<p style=\"color:#666666; line-height:50PX;\">类型：$class</p>\n";
echo "		 <p>简介：</p>\n";
echo "	\n";
echo "      </div>\n";
echo "	<div class=\"player\">$story</div>\n";
}


echo "         <div class=\"player\">\n";
echo "           <ul>\n";
foreach (mysqli_query($con,$listsql) as $row){
echo "             <li><a href=\"video.php?bid=$bid&vid={$row['vid']}&name=$name&imglinks={$row['imglinks']}&listname={$row['name']}\" target=\"_blank\">{$row['name']}</a></li>\n";
}
echo"            </ur>";
echo "            \n";
echo "         </div>\n";

echo "    </div>\n";
echo "  </div>\n";
echo "</div>\n";



?>
