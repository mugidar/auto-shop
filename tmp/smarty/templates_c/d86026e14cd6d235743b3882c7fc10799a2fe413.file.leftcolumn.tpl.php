<?php /* Smarty version Smarty-3.1.6, created on 2023-05-09 16:39:08
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50694f68d958b3de87-05074239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1683639543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50694f68d958b3de87-05074239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f68d958bafb0',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'arUser' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f68d958bafb0')) {function content_4f68d958bafb0($_smarty_tpl) {?><div id="leftColumn">
  <div id="leftMenu">
    <div class="menuCaption">Меню:</div>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <li class="menu_list-title">
        <h5>
          <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        </h5>

        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?> 
        <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
        <li>
        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
      </li>
        <?php } ?>
         <?php }?> 
         <?php } ?>
      </li>
    </ul>

    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?> 
    <div id="userBox">
      <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a>
      <a href="/user/logout/" onclick="logout()">Вихід</a>
    </div>

    <?php }else{ ?>
    <div id="userBox" class="hideme">
      <a href="#" id="userLink"></a>
      <a href="/user/logout/" onclick="logout()">Вихід</a>
    </div>

    <div id="loginBox">
      <div class="menuCaption">Вхід</div>
      <input   placeholder="Логін" type="text" id="loginEmail" name="loginEmail" value="">
      <input placeholder="Пароль"  type="password" id="loginPwd" name="loginPwd" value="">
      <input onclick="login()" type="button" value="Log in">
    </div>

   <div class="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox()">Реєстрація</div>
        <div class="registerBoxHidden hideme">
          <label>
            Пошта: <input  placeholder="Е-мейл" value="" type="email" id="email" name="email">
          </label>
          <label>
            Пароль: <input placeholder="Пароль" value="" type="password" id="pwd1" name="pwd1">
          </label>
          <label>
            Повторіть пароль: <input value="" placeholder="Повторіть пароль" type="password" id="pwd2" name="pwd2">
          </label>
          <label>
            <input type="submit" onclick="registerNewUser()" value="Зареєструватися">
          </label>
        </div>
      </div>
    
    
<?php }?>

    <div class="cart">
      <h1>Підбір</h1>
      <a href="/cart/" title="To cart">В автопарку</a>
      <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
 <?php }else{ ?> 0 <?php }?>
      </span>
    </div>
  </div>
</div>
<?php }} ?>