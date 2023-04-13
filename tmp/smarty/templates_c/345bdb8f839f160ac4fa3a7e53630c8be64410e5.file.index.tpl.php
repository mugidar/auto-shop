<?php /* Smarty version Smarty-3.1.6, created on 2023-04-13 16:39:28
         compiled from "../views/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39854f65b704435a20-76434617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345bdb8f839f160ac4fa3a7e53630c8be64410e5' => 
    array (
      0 => '../views/default\\index.tpl',
      1 => 1681393161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39854f65b704435a20-76434617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f65b70461c40',
  'variables' => 
  array (
    'pageTitle' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f65b70461c40')) {function content_4f65b70461c40($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  <?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>

  <body>
    <h1>Головна сторінка</h1>
    <div class="items_wrapper">
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

      <a class="main_page_item" href="/car/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" />
        <p  href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
          <?php echo $_smarty_tpl->tpl_vars['item']->value["name"];?>
 
          <span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</span>
        </p>
      </a>

      <?php } ?>
    </div>
</div>
<script src="main.js"></script>
  </body>
</html>
<?php }} ?>