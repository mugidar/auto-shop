<?php /* Smarty version Smarty-3.1.6, created on 2023-05-03 14:36:43
         compiled from "../views/admin\adminCars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:496954065645244a1ad68b3-65326315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3beb8eabbf94f72de1bd40cfaf0d3568c74fc544' => 
    array (
      0 => '../views/admin\\adminCars.tpl',
      1 => 1683113802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '496954065645244a1ad68b3-65326315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_645244a1b0e9c',
  'variables' => 
  array (
    'pageTitle' => 0,
    'rsCategories' => 0,
    'itemCat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645244a1b0e9c')) {function content_645244a1b0e9c($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
<table border="1" cellpadding="5" cellspacing="5">
  <tr>
    <th>Назва</th>
    <th>Ціна</th>
    <th>Категорія</th>
    <th>Опис</th>
    <th>Зберегти</th>
  </tr>

  <tr>
    <td>
      <input value="BMW" type="edit" id="newItemName" value="" />
    </td>
    <td>
      <input value="52" type="edit" id="newItemPrice" value="" />
    </td>
    <td>
      <select id="newItemCatId">
        <option value="0">Головна категорія</option>
        <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>
</option>
        <?php } ?>
        <td>
          <textarea id="newItemDesc" ></textarea>
        </td>
        <td>
          <input type="button" value="Save" onclick="addCar()">
        </td>
      </select>
    </td>
  </tr>
</table>
<?php }} ?>