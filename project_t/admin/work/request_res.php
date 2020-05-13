<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/admin_check.php";

    $title = $_POST['title'];
    $url = $_POST['url'];
    $date = $_POST['date'];
    $upload = $_FILES['upload'];
    $content = $_POST['contents'];
    $state = $_POST['state'];

    //file 등록
    $fileName = $upload['name'];
    $fileTmp = $upload['tmp_name'];
    $fileFolder = '../upload/thum/'.$fileName;
    $fileDir = '/admin/upload/thum/'.$fileName;
    move_uploaded_file($fileTmp, $fileFolder);

if(!isset($_POST['mode'])){
    $query = "insert into project(
        title, url, date, upload, contents, state
    ) values (
        '$title','$url','$date','$fileDir','$content','$state'
    )";
}else{
    $num = $_POST['num'];
    if(!empty($fileName)){
        $query = "update project set upload='$fileDir' where num='$num'";    
        mq($query);
    }
    $query = "update project set 
        title='$title', url='$url', date='$date', 
        contents='$content', state='$state' 
        where num='$num'";
}
    mq($query); //쿼리명령문 실행

    page('list.php');




?>
