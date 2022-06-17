<?php require_once"header.php"?>
<?php require_once"navigation.php";
if (!$_SESSION['user']) {
    header("Location: login.php");
}
?>

