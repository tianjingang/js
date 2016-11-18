<?php
header('content-type:text/html;charset=utf-8');
//连接数据库
$link=mysqli_connect("127.0.0.1","root","root","month2week3");
mysqli_query($link,'set names utf8');
if(isset($_POST['search'])){
    $search=isset($_POST['search'])?$_POST['search']:'';
}
else{
    $search=isset($_GET['search'])?$_GET['search']:'';
}
if($search){
    $sql="select count(*) num from news where n_title like '%$search%'";
    $re=mysqli_query($link,$sql);
    $ar=mysqli_fetch_assoc($re);
}
else{
    $sql="select count(*) num from news";
    $re=mysqli_query($link,$sql);
    $ar=mysqli_fetch_assoc($re);
}
//获取总条数
$sum_page=$ar['num'];
//设置每页条数
$page_num=2;
//获取页数
$page_sum=ceil($sum_page/$page_num);
//echo $page_sum;die;
//获取当前页
$page=isset($_GET['page'])?$_GET['page']:1;
//获取偏移量
$page_limit=($page-1)*$page_num;
//获取偏移量后的语句
if($search){
    $sql2="select * from news where n_title like '%$search%' limit $page_limit,$page_num";
    $res=mysqli_query($link,$sql2);
}
else{
    $sql2="select * from news order by id  desc limit $page_limit,$page_num ";
    $res=mysqli_query($link,$sql2);
}

?>

<form action="zhoushou.php" method="post">
    新闻标题<input type="search" name="search"/>
    <input type="submit" value="搜索"/>
</form>
<table border="1">
    <tr>
        <td>标题</td>
        <td>日期</td>
    </tr>
    <?php while($arr=mysqli_fetch_assoc($res)){?>
        <tr>
            <td><?php echo $arr['n_title']?></td>
            <td><?php echo $arr['n_date']?></td>
        </tr>
    <?php }?>
</table>
共<?php echo $page_sum?>页  当前第<?php echo $page?>页
<?php if($search){?>
    <?php
for($i=1;$i<=$page_sum;$i++) {
    ?>
    <a href="zhoushou.php?page=<?php echo $i?>&search=<?php echo $search?>"><?php echo $i?></a>
<?php
}
    ?>

<?php }else{?>
    <?php
    for($i=1;$i<=$page_sum;$i++) {
        ?>
        <a href="zhoushou.php?page=<?php echo $i?>"><?php echo $i?></a>
    <?php
    }
    ?>
<?php }?>

