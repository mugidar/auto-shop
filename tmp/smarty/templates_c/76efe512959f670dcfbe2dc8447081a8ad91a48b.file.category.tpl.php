<?php /* Smarty version Smarty-3.1.6, created on 2023-04-12 17:57:54
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203575915064369ca41c3c96-48185579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1681311474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203575915064369ca41c3c96-48185579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_64369ca41c6c2',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64369ca41c6c2')) {function content_64369ca41c6c2($_smarty_tpl) {?><h1>Авто категорії <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

<div class="items_wrapper">
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

  <a href="/car/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="category_item">
    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" />

    <p href="/car/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
      <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</span>
    </p>
  </a>
  <?php } ?> 
  </div>

  <div class="general_categories">
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  
    <h2 class="general_category">
      <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 </a>
    </h2>
  
  <?php } ?></div>
</div>
<?php }} ?>