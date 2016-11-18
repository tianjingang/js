<?php /* Smarty version Smarty-3.1.18, created on 2016-02-22 08:33:27
         compiled from ".\templates\show.html" */ ?>
<?php /*%%SmartyHeaderCode:1942856ca669a2a9c02-91663984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b9e763eb116b81bba4e3cb11d0b1a96bc71f9' => 
    array (
      0 => '.\\templates\\show.html',
      1 => 1456129990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942856ca669a2a9c02-91663984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56ca669a3242c4_24218533',
  'variables' => 
  array (
    'list' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ca669a3242c4_24218533')) {function content_56ca669a3242c4_24218533($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="deng_del.php">退出登陆</a>
<h1>列表展示</h1>
<table border="1">
    <tr>
        <td>编号</td>
        <td>开始时间</td>
        <td>结束时间</td>
        <td>请假天数</td>
        <td>请假原因</td>
        <td>文件</td>
        <td>审批人</td>
    </tr>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_startdate'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_overdate'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_day'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_why'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_files'];?>
" alt="" height="50" width="50"/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_person'];?>
</td>
    </tr>
    <?php } ?>
</table>
</body>
</html><?php }} ?>
