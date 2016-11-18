<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>文件上传</title>
</head>
<body>
    <form action="in.php" method="post" enctype="multipart/form-data">
        文件:<input type="file" name="filename"/><br/>
        文件名称:<input type="text" name="name"/><br/>
        添加人:<input type="text" name="addman"/><br/>
        <input type="submit" value="添加"/>

    </form>
</body>
</html>