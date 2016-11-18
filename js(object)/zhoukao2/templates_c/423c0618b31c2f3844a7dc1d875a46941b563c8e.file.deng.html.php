<?php /* Smarty version Smarty-3.1.18, created on 2016-02-22 08:13:34
         compiled from ".\templates\deng.html" */ ?>
<?php /*%%SmartyHeaderCode:2560556ca7df812c1e8-58031005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423c0618b31c2f3844a7dc1d875a46941b563c8e' => 
    array (
      0 => '.\\templates\\deng.html',
      1 => 1456128620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2560556ca7df812c1e8-58031005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56ca7df8161be4_97683141',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ca7df8161be4_97683141')) {function content_56ca7df8161be4_97683141($_smarty_tpl) {?><meta charset="utf-8">
<form method="post" action="deng_do.php">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="登录"/></td>
            <td></td>
        </tr>
    </table>
</form><?php }} ?>
