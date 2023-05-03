<?php /* Smarty version Smarty-3.1.6, created on 2023-05-01 22:10:55
         compiled from "../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1854099859643c5ecb81f7b2-91607556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba49ac498b8cf2b9e90bf9a7a8f97ee29f5cd8d0' => 
    array (
      0 => '../views/default\\cart.tpl',
      1 => 1682968237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854099859643c5ecb81f7b2-91607556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_643c5ecb81fff',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_643c5ecb81fff')) {function content_643c5ecb81fff($_smarty_tpl) {?>
<div id="cart_page">

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?> Ви не вибрали жодного авто <?php }else{ ?>
<div>
<h1>Автівки</h1>
<table>
 <thead> <tr>
  <td>#</td>
  <td>Світлина</td>
  <td>Назва</td>
  <td>Вартість</td>
  <td>Номер власника</td>
  <td>Дія</td>
</tr></thead>
<tbody>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
  <tr>
    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
    <td><a href="/car/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt=""></a></td>
    <td><a href="/car/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
    <td class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</td>
    <td><a href="tel:<?php echo $_smarty_tpl->tpl_vars['item']->value['seller_tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['seller_tel'];?>
</a></td>
    <td class="action_btn"> <button <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme" <?php }?>   onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
        Видалити зі списку
       </button>
       <button <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme" <?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
         Додати до придбання
       </button>
      </td>
  </tr>
  <?php } ?>
</tbody>
</table>


</div>
<?php }?>
</div><?php }} ?>