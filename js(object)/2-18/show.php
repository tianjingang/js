<?php
require "page.class.php";
require "db.class.php";
$pages=new Page();
$db=new DB();
$list=$db->getAll('ri18');
$count=count($list);
$num_page = 4;
$url = 'show.php';
$page = new Page;
$pages = $page->getPage($count,$num_page,$url);
$array = $db->getAll("ri18 $page->limit");
?>
<h1 style="color: red">文件展示</h1>
<table border="1">
    <tr>
        <td>序号</td>
        <td>文件</td>
        <td>文件名称</td>
        <td>添加人</td>
        <td>操作</td>
    </tr>
    <?php foreach ($array as $val){?>
    <tr>
        <td><?php echo $val['id']?></td>
        <td><img src="<?php echo $val['r_filename']?>" alt="" width="80" height="80"/></td>
        <td><?php echo $val['r_name']?></td>
        <td><?php echo $val['r_addman']?></td>
        <td><a href="#">删除</a><a href="#">修改</a><a href="#">下载</a></td>
    </tr>
    <?php }?>
</table>
<?php
echo $pages;
?>