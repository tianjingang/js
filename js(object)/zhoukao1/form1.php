<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="post">
    <table border="1">
        <tr>
            <td>商品名</td>
            <td><input type="text" name="goodname"/></td>
        </tr>
        <tr>
            <td>分类</td>
            <td><select name="type">
                    <option value="">红米手机</option>
                    <option value="红米Note">红米Note</option>
                    <option value="红米1s">红米1s</option>
                    <option value="小米4Note">小米4Note</option>
                    <option value="小米4">小米4</option>
                </select></td>
        </tr>
        <tr>
            <td>单价</td>
            <td><input type="text" name="price"/></td>
        </tr>
        <tr>
            <td>库存</td>
            <td><input type="text" name="number"/></td>
        </tr>
        <tr>
            <td>状态</td>
            <td><input type="radio" name="statue" value="上架"/>上架
                <input type="radio" name="statue" value="下架"/>下架
            </td>
        </tr>
        <tr>
            <td><input type="reset" value="重置"/></td>
            <td><input type="submit" value="添加"/></td>
        </tr>
    </table>
</form>
</body>
</html>