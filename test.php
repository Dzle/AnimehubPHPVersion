<?php
@$video = $_GET[vid];
$con = mysqli_connect('localhost','root','','bangumi','3306')or die('error');;
$videoli = "SELECT*FROM videolist WHERE bid=$video";
foreach (mysqli_query($con,$videoli) as $row) {
    $bbid = $row['bid'];
    $bname = $row['name'];

}
?>