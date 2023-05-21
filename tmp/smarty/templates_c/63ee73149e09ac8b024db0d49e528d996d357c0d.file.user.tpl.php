<?php /* Smarty version Smarty-3.1.6, created on 2023-05-09 16:53:04
         compiled from "../views/default\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1551071495644587949101b5-78272566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ee73149e09ac8b024db0d49e528d996d357c0d' => 
    array (
      0 => '../views/default\\user.tpl',
      1 => 1683640370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1551071495644587949101b5-78272566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6445879493f2a',
  'variables' => 
  array (
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6445879493f2a')) {function content_6445879493f2a($_smarty_tpl) {?><h1>Інформація</h1>

<table border="0">
    <tr>
        <td>Ваш логін (email)</td>
        <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
    </tr>
    <tr>
        <td>Ім'я / Нікнейм</td>
        <td><input name="name" type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"></td>
    </tr>
    <tr>
        <td>Номер телефону</td>
        <td><input name="phone" type="tel" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"></td>
    </tr>
    <tr>
        <td>Адреса</td>
        <td><input name="address" type="text" id="newAddress" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
"></td>
    </tr>
    <tr>
        <td>Новий пароль</td>
        <td><input name="pwd1" type="password" id="newPwd1" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['pwd1'];?>
"></td>
    </tr>
    <tr>
        <td>Повторіть пароль</td>
        <td><input name="pwd2" type="password" id="newPwd2" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['pwd2'];?>
"></td>
    </tr>
    <tr>
        <td>Введіть нинішній пароль для змін</td>
        <td><input name="curPwd" type="password" id="curPwd" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['curPwd'];?>
"></td>
    </tr>
    <tr>
        <td></td>
        <td><input onclick="updateUserData()" type="button" value="Зберегти"></td>
    </tr>
</table><?php }} ?>