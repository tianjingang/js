<!--//打防乱码-->
<!--打表单
提交-->

<meta charset="utf-8">
<form action="in.php" method="post">
    <h1>新闻添加</h1>
    <table>
        <tr>
            <td>标题</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td>分类</td>
            <td><select name="type">
                    <option value="">请选择</option>
                    <?php
                    //连库
                    $link=mysqli_connect("127.0.0.1","root","root","cms201601_tianjingang");
                    //字符集
                    mysqli_query($link,'set names utf8');
                    //语句
                    $s="select * from zt_news";
                    $r=mysqli_query($link,$s);
                    while($a=mysqli_fetch_assoc($r)){
                        echo "<option value='".$a['t_id']."'>".$a['t_type']."</option>";
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>内容</td>
            <td><textarea rows="5" cols="10" name="content"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"/></td>
            <td><input type="reset" value="清空"/></td>
        </tr>
    </table>
</form>