<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/2-26/index.php/Home/Index/update/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>文件名</td>
            <td><input type="text" name="filename" value="<?php echo ($arr["filename"]); ?>"/></td>
        </tr>
        <tr>
            <td>封面</td>
            <td><input type="file" name="photo" value="<?php echo ($arr["photo"]); ?>"/></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>