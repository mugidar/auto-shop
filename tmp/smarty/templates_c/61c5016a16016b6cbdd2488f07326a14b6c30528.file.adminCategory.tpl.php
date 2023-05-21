<?php /* Smarty version Smarty-3.1.6, created on 2023-05-09 17:18:55
         compiled from "../views/admin\adminCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:501743690645230a1750ee9-62176075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c5016a16016b6cbdd2488f07326a14b6c30528' => 
    array (
      0 => '../views/admin\\adminCategory.tpl',
      1 => 1683641933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '501743690645230a1750ee9-62176075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_645230a179ac5',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'rsMainCategories' => 0,
    'mainItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645230a179ac5')) {function content_645230a179ac5($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" href="/templates/admin/main.css" >

<div class="wrapper">
  <table id="category_table" border="1" cellpadding="5" cellspacing="5">
    <tr>
      <th>#</th>
      <th>ID</th>
      <th>Назва</th>
      <th>Категорія</th>
      <th>Дія</th>
    </tr>
  
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['iteration']++;
?>
    <tr>
      <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['iteration'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
      <td>
          <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
      </td>
      <td>
          <select id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
              <option value="0">Головна категорія</option>
              <?php  $_smarty_tpl->tpl_vars['mainItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mainItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsMainCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->key => $_smarty_tpl->tpl_vars['mainItem']->value){
$_smarty_tpl->tpl_vars['mainItem']->_loop = true;
?> 
              <option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==$_smarty_tpl->tpl_vars['mainItem']->value['id']){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>
</option>
              <?php } ?>
          </select>
      </td>
      <td>
          <input type="button" value="Save" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
      </td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }} ?>