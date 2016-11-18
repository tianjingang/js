<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/2-24/ThinkPHP/index.php/Home/Index/update/" method="post" enctype="multipart/form-data">
	<table>
        <tr>
			<td>封面</td>
			<td><input type="file" name="photo" value="<?php echo ($arr["photo"]); ?>"/></td>
		</tr>
		<tr>
			<td><input type="hidden" name='id' value="<?php echo ($arr["id"]); ?>"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
</form>