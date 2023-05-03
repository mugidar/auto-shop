<?php /* Smarty version Smarty-3.1.6, created on 2023-04-30 13:09:20
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12935012116436c98f8d0d08-33014458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1682849359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12935012116436c98f8d0d08-33014458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6436c98f8d15b',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6436c98f8d15b')) {function content_6436c98f8d15b($_smarty_tpl) {?><div class="car_page">
  <div class="car_info">
    <h1><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h1>
    <div class="car_info_wrapper">
      <img src="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="" />
      <div class="car_information">
        <div class="description">
          <h2>Опис:</h2>
          <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
          <h3>Номер власника:</h3>
          <span></span><a href="tel:<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['seller_tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['seller_tel'];?>
 </a>-  <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['seller_name'];?>
 </span>
        </div>
        <div class="buy">
          <span class="price"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
$</span
          > 
          <button <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme" <?php }?>   onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
)" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" >
           Видалити зі списку
          </button>
          <button <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme" <?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
)" id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" >
            Додати до придбання
          </button>
         
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>