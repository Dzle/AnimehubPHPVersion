<?php
require_once "header.php";

$dest = 'uploads/'. $_FILES['userfile'] ['name'];
if (is_uploaded_file($_FILES['userfile']['tmp_name'])){
	if(move_uploaded_file($_FILES['userfile']['tmp_name'],$dest)){
		echo'上传成功啦！';
		
		}
	
	
	}
?>
<!------xinyuu design------>
