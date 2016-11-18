<?php /* Smarty version Smarty-3.1.18, created on 2016-02-21 10:13:32
         compiled from ".\templates\show.html" */ ?>
<?php /*%%SmartyHeaderCode:1352956c82a6fe1f9e0-64096551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b9e763eb116b81bba4e3cb11d0b1a96bc71f9' => 
    array (
      0 => '.\\templates\\show.html',
      1 => 1456048338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352956c82a6fe1f9e0-64096551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56c82a6fe7be69_73886765',
  'variables' => 
  array (
    'list' => 0,
    'val' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c82a6fe7be69_73886765')) {function content_56c82a6fe7be69_73886765($_smarty_tpl) {?><meta charset="utf-8">
<table border="1">
    <tr>
        <td>编号</td>
        <td>文件名</td>
        <td>封面</td>
        <td>操作</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_filename'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['r_files'];?>
" alt="" height="100" width="80"/></td>
        <td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a>
            <a href="look.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">修改</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>

<?php }} ?>
