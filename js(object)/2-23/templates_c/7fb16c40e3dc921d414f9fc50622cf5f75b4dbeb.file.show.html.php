<?php /* Smarty version Smarty-3.1.18, created on 2016-02-23 18:37:55
         compiled from ".\View\show.html" */ ?>
<?php /*%%SmartyHeaderCode:377356cc08bede0628-12656026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb16c40e3dc921d414f9fc50622cf5f75b4dbeb' => 
    array (
      0 => '.\\View\\show.html',
      1 => 1456212698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377356cc08bede0628-12656026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56cc08bee29d86_98152177',
  'variables' => 
  array (
    'list' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc08bee29d86_98152177')) {function content_56cc08bee29d86_98152177($_smarty_tpl) {?><form>
    <table border="1">
        <tr>
            <td>用户名</td>
            <td>密码</td>
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
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['r_pwd'];?>
</td>
            <td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a>
                <a href="look.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">修改</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</form>

<?php }} ?>
