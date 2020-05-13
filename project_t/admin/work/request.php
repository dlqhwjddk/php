<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/head.php";
?>

<!--글쓰기-->
<script src="/editor/js/HuskyEZCreator.js"></script>
    
<article class="request">
    <h2>프로젝트 등록</h2>
    <form 
        name="popol" 
        action="request_res.php" 
        method="post"
        enctype="multipart/form-data">

    <ul>
        <li><input type="text" name="title"></li>
        <li><input type="text" name="url"></li>
        <li><input type="date" name="date"></li>
        <li><input type="file" name="upload"></li>
        <li>
            <textarea name="contents" id="ir1"></textarea>
        </li>
        <li>
            <input type="checkbox" name="state" checked>
<!--        프로젝트를 공개하시겠습니까?-->
        </li>
        <li>
            <input type="submit" value="ADD PROJECT" class="btn">
        </li>
    </ul>
    </form>
</article>  
   
<? 
    fun('request()');
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/foot.php";
?>







