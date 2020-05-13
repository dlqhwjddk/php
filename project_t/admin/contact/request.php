<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/head.php";
?>

<!--글쓰기-->
<article class="request">
    <h2>Contact us</h2>
    <form 
        name="popol" 
        action="request_res.php" 
        method="post">
    <!--
       db_name = "contact"
       컬럼 -> num, name, subject, email, contents, date
   -->
    <ul>
        <li><input type="text" name="name" placeholder="name"></li>
        <li><input type="text" name="subject" placeholder="subject"></li>
        <li><input type="email" name="email" placeholder="email"></li>
        <li>
            <textarea name="contents"></textarea>
        </li>
        <li>
            <input type="submit" value="SAVE" class="btn">
        </li>
    </ul>
    </form>
</article>  
   
<? 
    fun('contact()');
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/foot.php";
?>







