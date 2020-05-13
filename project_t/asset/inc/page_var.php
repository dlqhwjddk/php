<?
    $row_num = mysqli_num_rows($result);

    $list = 10;//한 페이지에 보여줄 게시물
    $block_ct = 9; //블록당 보여줄 페이지 수

    $total_page = ceil($row_num / $list);
    $page = isset($_GET['page']) ? $_GET['page'] : 1 ;

    $block_num = ceil($page/$block_ct);

    $block_start = (($block_num-1) * $block_ct) + 1;
    $block_end  = $block_start + $block_ct -1;
    $block_total = ceil($total_page/$block_ct);

    $start_num = ($page-1) * $list;

    if($block_end > $total_page) {
        $block_end = $total_page;
    }
    //paging end

?>