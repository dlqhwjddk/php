<?
    include_once $_SERVER['DOCUMENT_ROOT']."/asset/inc/db.php";

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if($id==='admin' && $pw==='1234'){
        $_SESSION['id'] = $id; 
        page('/admin/index.php');

    }else{
        back('관리자가 아닙니다.');
    }
?>