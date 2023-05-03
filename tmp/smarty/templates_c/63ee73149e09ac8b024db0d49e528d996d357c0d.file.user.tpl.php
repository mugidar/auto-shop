<?php /* Smarty version Smarty-3.1.6, created on 2023-04-24 23:56:08
         compiled from "../views/default\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1551071495644587949101b5-78272566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ee73149e09ac8b024db0d49e528d996d357c0d' => 
    array (
      0 => '../views/default\\user.tpl',
      1 => 1682369767,
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
<?php if ($_valid && !is_callable('content_6445879493f2a')) {function content_6445879493f2a($_smarty_tpl) {?><h1>Ur info</h1>

<table border="0">
    <tr>
        <td>Login (email)</td>
        <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><input name="name" type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input name="phone" type="tel" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input name="address" type="text" id="newAddress" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
"></td>
    </tr>
    <tr>
        <td>New pass</td>
        <td><input name="pwd1" type="password" id="newPwd1" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['pwd1'];?>
"></td>
    </tr>
    <tr>
        <td>Repeat pass</td>
        <td><input name="pwd2" type="password" id="newPwd2" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['pwd2'];?>
"></td>
    </tr>
    <tr>
        <td>Insert pass to update info </td>
        <td><input name="curPwd" type="password" id="curPwd" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['curPwd'];?>
"></td>
    </tr>
    <tr>
        <td></td>
        <td><input onclick="updateUserData()" type="button" value="Save changes"></td>
    </tr>
</table><?php }} ?>