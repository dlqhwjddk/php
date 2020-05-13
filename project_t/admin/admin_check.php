<?
    include_once $_SERVER['DOCUMENT_ROOT']."/asset/inc/db.php";

    if(!isset($_SESSION['id'])){
        page('/admin/login.php');
    }
?>

