<?php
$uid = @$_GET[uid];
$con = mysqli_connect('localhost','root','','user_info','3306') or die('连接数据库失败');

$sql = "SELECT*FROM users WHERE uid=$uid";
$user = mysqli_query($con,$sql);
if(mysqli_query($con,$sql)){
    $use = mysqli_fetch_array($user,MYSQLI_ASSOC);
}else{
    die("没有要修改的数据");
}?>

<form action="edit.php" method="post">
<table width="500" border="1">
  <tr>
    <td width="147">用户名</td>
    <td width="337"><label for="textfield"></label>
      <input type="text" name="user" id="textfield"  value="<?php echo $use['user']?>"/>      </td>
  </tr>
  <tr>
    <td>密码</td>
    <td><input name="pswd" type="password" / value="<?php echo $use['pswd']?>"></td>
  </tr>
  <tr>
    <td>是否为超级用户</td>
    <td>    是<input name="suser" type="radio" value="yes" />
        否<input name="suser" type="radio" value="no" /></td>
  </tr>
  <tr>
    <td>UID</td>
    <td><input name="uid" type="password" / value="<?php echo $use['uid']?>"></td>
  </tr>
  <tr>

  </tr>

</table>
  <input name="" type="submit"  value="提交"/>
  <input name="" type="reset" value="重置" />
</form>