<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/zhoukao3/index.php/Home/Index/update/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>图片1</td>
            <td><input type="file" name="photo1"/>
            <img src="/js(object)/zhoukao3/<?php echo ($arr["photo1"]); ?>" width="80" height="80"/>
            </td>
        </tr>
        <tr>
            <td>图片2</td>
            <td><input type="file" name="photo2"/>
                <img src="/js(object)/zhoukao3/<?php echo ($arr["photo2"]); ?>" width="80" height="80"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="id" value="<?php echo ($arr["id"]); ?>"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>