<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/2-27/index.php/Home/Index/update/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>封面1</td>
            <td><input type="file" name="photo1" />
                <img src="/js(object)/2-27<?php echo ($arr["photo1"]); ?>" width="100"/></td>
        </tr>
        <tr>
            <td>封面2</td>
            <td><input type="file" name="photo2" />
                <img src="/js(object)/2-27<?php echo ($arr["photo2"]); ?>" width="100"/></td>
        </tr>
        <tr>
            <td>封面3</td>
            <td><input type="file" name="photo3"/>
                <img src="/js(object)/2-27<?php echo ($arr["photo3"]); ?>" width="100"/></td>
        </tr>
        <tr>
            <td>封面4</td>
            <td><input type="file" name="photo4" />
                <img src="/js(object)/2-27<?php echo ($arr["photo4"]); ?>" width="100"/></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>