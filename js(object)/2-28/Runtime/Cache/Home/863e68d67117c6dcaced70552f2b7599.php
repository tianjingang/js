<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/2-28/index.php/Home/Index/update/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>图片1</td>
            <td><input type="file" name="photo1"/>
            <img src="/js(object)/2-28/<?php echo ($arr["photo1"]); ?>" height="80" width="80"/>
            </td>
        </tr>
        <tr>
            <td>图片2</td>
            <td><input type="file" name="photo2"/>
                <img src="/js(object)/2-28/<?php echo ($arr["photo2"]); ?>" height="80" width="80"/>
            </td>
        </tr>
        <tr>
            <td>图片3</td>
            <td><input type="file" name="photo3"/>
                <img src="/js(object)/2-28/<?php echo ($arr["photo3"]); ?>" height="80" width="80"/>
            </td>
        </tr>
        <tr>
            <td>图片4</td>
            <td><input type="file" name="photo4"/>
                <img src="/js(object)/2-28/<?php echo ($arr["photo4"]); ?>" height="80" width="80"/>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>