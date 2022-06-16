<?php
require_once"header.php";?>
<form id="report" name="userreport" method="post" action="reportjs.php">
    <table>
        <tr>
            <td>用户名</td>
            <td><input id="username"name="username" type="test"></td>
        </tr>
        <tr>
            <td>内容</td>
            <td><input id="test"name="test" type="test"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit"value="添加用户">|<input type="reset" value="重置内容"></td>
        </tr>
    </table>

</form>