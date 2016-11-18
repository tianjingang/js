<?php
header('content-type:text/html;charset=utf8');
class Page{
    /*
			param int $page 当前页
			param int $count 总条数
			param int $num_page 每页显示条数
			param string $url   跳转地址
			param int $sum_page 总页数
			limit 偏移量，每页显示条数
			select * from table limit $limit,$num_page;
		 */
    public $limit;
    public function getPage($count,$num_page ,$url){
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $this->limit = "limit ".($page-1)*$num_page.",".$num_page;
        $sum_page = ceil($count/$num_page);
        //上一页下一页
        $last = $page-1<1 ? 1 : $page-1;
        $next = $page+1>$sum_page ? $sum_page : $page+1;
        return "总共有".$sum_page.'当前是第'.$page.'页'
        ."<a href='{$url}?page=1'>首页</a>"
        ."<a href='{$url}?page=$last'>上一页</a>"
        ."<a href='{$url}?page=$next'>下一页</a>"
        ."<a href='{$url}?page=$sum_page'>尾页</a>";

    }
}
?>