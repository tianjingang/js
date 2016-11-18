<?php /* Smarty version Smarty-3.1.18, created on 2016-02-20 15:25:58
         compiled from ".\templates\look.html" */ ?>
<?php /*%%SmartyHeaderCode:921756c884446e2611-13824550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22f63fda3572a9cdd2f8af34cf9c90e13aee583' => 
    array (
      0 => '.\\templates\\look.html',
      1 => 1455981934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921756c884446e2611-13824550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56c884447430b2_94550932',
  'variables' => 
  array (
    'list' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c884447430b2_94550932')) {function content_56c884447430b2_94550932($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post" enctype="multipart/form-data">
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
    <table border="1">
        <tr>
            <td>编号</td>
            <td><input type="text" name="order" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"/></td>
        </tr>
        <tr>
            <td>文件名</td>
            <td><input type="text" name="filename" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_filename'];?>
"></td>
        </tr>
        <tr>
            <td>封面</td>
            <td><input type="file" name="files" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_files'];?>
"/></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
    <?php } ?>
</form>
</body>
</html><?php }} ?>
