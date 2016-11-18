<meta charset="utf-8">
<form action="in.php" method="post">
    <h1>课程管理</h1>
    <table border="1">
        <tr>
            <td>课程名称</td>
            <td><input type="text" name="c_name"/></td>
        </tr>
        <tr>
            <td>课程价格</td>
            <td><input type="text" name="c_price"/></td>
        </tr>
        <tr>
            <td>是否连载</td>
            <td><input type="radio" name="box" value="1">是
                <input type="radio" name="box" value="0">否
            </td>
        </tr>
        <tr>
            <td>该课程讲师</td>
            <td><input type="text" name="c_teacher"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"/></td>
        </tr>
    </table>
</form>