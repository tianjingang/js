<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/3-4/index.php/Home/Index/update/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>图片1</td>
            <td>
                <input type="file" name="photo1"/>
                <img src="/js(object)/3-4<?php echo ($arr["photo1"]); ?>" alt="" height="80" width="80"/></td>
        </tr>
        <tr>
            <td>图片2</td>
            <td>
                <input type="file" name="photo2"/>
                <img src="/js(object)/3-4<?php echo ($arr["photo2"]); ?>" alt="" height="80" width="80"/></td>
        </tr>
        <tr>
            <td>图片3</td>
            <td>
                <input type="file" name="photo3"/>
                <img src="/js(object)/3-4<?php echo ($arr["photo3"]); ?>" alt="" height="80" width="80"/></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>