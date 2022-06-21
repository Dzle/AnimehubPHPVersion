<?php include_once "header.php";?>
<head>
<link href="style/space.css" rel="stylesheet" type="text/css" />
</head>

<?php
$uid = @$_SESSION["uid"];
$user = @$_SESSION["user"];
?>


<div class="spacebody">
  <div class="spaceheader">
    <div class="userinfo">
      <div class="userleft"><img  src="images/headimg.jpg" width="166" height="124" class="userleftimg" /></div>
      <div class="userright">
        <div class="username"><?php echo"$user"?>
        </div>
        <p class="uid">UID:<?php echo"$uid" ?></p>
      </div>
    </div>
  </div>
  <div class="history">
  <h3>历史记录</h3>
  <table width="100%" border="3px">
    <tr>
        <th width="10%">VID</th>
        <th width="70%">视频名称</th>
        <th width="20%">链接</th>

    </tr>
    <?php
    //进入数据库
    $con = mysqli_connect('localhost','root','','user_info',"3306")
    or die('error');
    mysqli_set_charset($con,'utf8');//
    $sql= "SELECT*FROM history WHERE uid=$uid";//通过记录在SESSION中的UID查找在history表下属于该用户UID的历史记录
	//把取出的数据展示出来
    foreach(mysqli_query($con,$sql) as $row){
        echo"<tr>";
        echo"<td>{$row['vid']}</td>";//获取视频唯一ID VID
        echo"<td>{$row['videoname']}</td>";//视频名称
        echo"<td>{$row['links']}</td>";//链接
    }

    $stmt = mysqli_query($con,$sql);
    echo"共有".mysqli_num_rows($stmt)."条记录喵(〃'▽'〃)";//统计在该表中此用户的记录数
    ?>
</table>
  <?php
  
  ?>
  </div>
</div>
<!------xinyuu design------>