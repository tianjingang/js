<?php
//连接数据库
//设置搜索查询变量
//连表联查数据库
//编写分页步骤
//展示表格
//实现分页功能
//实现搜索
header('content-type:text/html;charset=utf8');
$link=mysqli_connect("127.0.0.1","root","root","cms201601_tianjingang");
mysqli_query($link,'set names utf8');
$search=isset($_GET['search'])?$_GET['search']:'';
$search1=isset($_GET['search1'])?$_GET['search1']:'';
//查询语句
$sql="select count(*)num from zt_news_cate inner join zt_news on zt_news_cate.z_type=zt_news.t_id where zt_news_cate.z_title like '%$search%' and zt_news_cate.z_type like '%$search1%'";
$re=mysqli_query($link,$sql);
$ar=mysqli_fetch_assoc($re);
//获取总条数
$count=$ar['num'];
/*echo $count;die;*/
//每页条数
$page_num=2;
//获取页数
$sum_page=ceil($count/$page_num);
//echo $sum_page;die;
//获取当前页
$page=isset($_GET['page'])?$_GET['page']:1;
//上一页
$last=$page-1<1?1:$page-1;
//下一页
$nest=$page+1>$sum_page?$sum_page:$page+1;
//获取偏移量
$page_limit=($page-1)*$page_num;
//获取偏移量后的语句
$sql2="select * from zt_news_cate inner join zt_news on zt_news_cate.z_type=zt_news.t_id where zt_news_cate.z_title like '%$search%' and zt_news_cate.z_type like '%$search1%' limit $page_limit,$page_num";
$res=mysqli_query($link,$sql2);
?>
<div id="div1">
    <select name="search1">
        <option value="">请选择...</option>
        <?php
        //语句
        $s="select * from zt_news";
        $r=mysqli_query($link,$s);
        while($a=mysqli_fetch_assoc($r)){
            if($a['t_id']==$search1){
                echo "<option value='".$a['t_id']."' selected>".$a['t_type']."</option>";

            }
            else{
                echo "<option value='".$a['t_id']."'>".$a['t_type']."</option>";
            }
        }
        ?>
    </select>
    <input type="search" placeholder="输入标题关键字" value="<?php echo $search?>" name="search"/>
    <button onclick="page(1)">搜索</button>
    <table border="1">
        <tr>
            <td>分类</td>
            <td>标题</td>
            <td>日期</td>
        </tr>
        <?php while($arr=mysqli_fetch_assoc($res)){?>
        <tr>
            <td><?php echo $arr['t_type']?></td>
            <td><?php echo $arr['z_title']?></td>
            <td><?php echo $arr['z_time']?></td>
        </tr>
        <?php }?>
    </table>
    <p>共<?php echo $sum_page?>页 当前第<?php echo $page?>页
        <?php for($i=1;$i<=$sum_page;$i++){?>
            <a href="javascript:void(0)" onclick="page(<?php echo $i?>)"><?php echo $i?></a>
        <?php }?>
        <a href="javascript:void(0)" onclick="page(1)">首页</a>
        <a href="javascript:void(0)" onclick="page(<?php echo $last?>)">上一页</a>
        <a href="javascript:void(0)" onclick="page(<?php echo $nest?>)">下一页</a>
        <a href="javascript:void(0)" onclick="page(<?php echo $sum_page?>)">尾页</a>
    </p>
</div>
<script>
    //分页
    function page(page){
        var search=document.getElementsByName('search')[0].value;
        var search1=document.getElementsByName('search1')[0].value;
         //建ajax对象
        var ajax=new XMLHttpRequest();
        //连接服务器
        ajax.open('get','show.php?page='+page+'&search='+search+'&search1='+search1);
        //发送请求
        ajax.send();
        //ajax准备事件
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('div1').innerHTML=ajax.responseText;
            }
        }

    }
</script>