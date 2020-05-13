
    
        <a href="?page=1">처음</a>
        
        <? $pre = $page-1; 
            if($page > 1){
                echo "<a href='?page=$pre'> &lt; </a>";
            }
        ?>
        
        <?
        for($i=$block_start; $i<=$block_end; $i++){
            if($page == $i){
                echo "<a class='active'>$i</a>";
            }else{
                echo "<a href='?page=$i'>$i</a>";
            }
        }
        ?>
            
        
        <? $next = $page+1; 
            if($page < $total_page){
                echo "<a href='?page=$next'> &gt; </a>";
            }
        ?>
        <a href="?page=<?=$total_page?>">마지막</a>
  