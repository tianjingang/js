<?php if (!defined('THINK_PATH')) exit(); if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>发送人:<?php echo ($val["sname"]); ?></br>
    发送内容:<?php echo ($val["message"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>