<?php
header('content-type:text/html;charset=utf8');
//可逆加密
//加密
$addpwd=base64_encode(122334);
echo $addpwd;
echo '<br/>';
//解密
$onpwd=base64_decode($addpwd);
echo $onpwd;
echo '<br/>';
//加密
$url=urlencode('呵呵');
echo $url;
echo '<br/>';
//解密
$urlon=urldecode($url);
echo $urlon;
echo '<br/>';
//不可逆加密
//第一种
$name=md5('理智瞥见都很符合');
echo $name;
echo '<br/>';
//第二种
$name=crypt('理智瞥见都很符合');
echo $name;
echo '<br/>';
//第三种
$name=sha1('理智瞥见都很符合');
echo $name;





?>