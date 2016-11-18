<?php /* Smarty version Smarty-3.1.18, created on 2016-02-20 07:14:47
         compiled from ".\templates\look.html" */ ?>
<?php /*%%SmartyHeaderCode:1775656c8107679d949-24339292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22f63fda3572a9cdd2f8af34cf9c90e13aee583' => 
    array (
      0 => '.\\templates\\look.html',
      1 => 1455952480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775656c8107679d949-24339292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56c810767e57a8_49277026',
  'variables' => 
  array (
    'list' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c810767e57a8_49277026')) {function content_56c810767e57a8_49277026($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_username'];?>
"/></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_pwd'];?>
"/></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"/></td>
            <td><input type="submit" value="修改" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_pwd'];?>
"/></td>
        </tr>
    </table>
    <?php } ?>
</form>
</body>
</html><?php }} ?>
