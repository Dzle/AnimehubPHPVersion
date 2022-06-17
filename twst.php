<?php
session_start();
$use = $_SESSION["user"];
echo".$use.";


if($use=$use){

    echo".$use.";
}else{
    echo"无法登录";
}