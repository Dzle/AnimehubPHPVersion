
<script>
    function doDel(id){
        if(confirm("确定删除吗？")){
            window.location = 'reportjs.php'?action=del$id=+id;
        }
    }
</script>

    <?php include_once "header.php"?>
    <h3>注册用户信息浏览与编辑</h3>
    <table width="1000" border="3px">
        <tr>
            <th>UID</th>
            <th>用户名</th>
            <th>密码</th>
            <th>操作</th>
        </tr>
        <?php
        //进入数据库
        $con = mysqli_connect('localhost','root','','user_info',"3306")
        or die('error');
        mysqli_set_charset($con,'utf8');
        $sql= "SELECT*FROM users";
        foreach(mysqli_query($con,$sql) as $row){
            echo"<tr>";
            echo"<td>{$row['uid']}</td>";//uid
            echo"<td>{$row['user']}</td>";//user
            echo"<td>{$row['pswd']}</td>";//password
           echo"<td><a href='javascript:doDel({$row['uid']})'>删除</a>
                <a href='reportjs.php?reid=({$row['uid']})'>修改</a></td>";
            echo"</tr>";
 }
        $sql = "SELECT*FROM user";
        $stmt = mysqli_query($con,$sql);
        echo"共有".mysqli_num_rows($stmt)."条记录喵(〃'▽'〃)";
        ?>
    </table>
<?php