<?php /* Smarty version Smarty-3.1.6, created on 2023-04-13 16:46:44
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95724f68d95829a6e4-54800566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1681393604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95724f68d95829a6e4-54800566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f68d95849501',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f68d95849501')) {function content_4f68d95849501($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head> 
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/main.css"
      type="text/css"
    />
    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="/js/main.js"></script>

  </head>
  <body>
    <header id="header">
      <h1><a href="/">АВТІВОЧКА</a></h1>
    </header>
    <main>
    <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div id="centerColumn">
<?php }} ?>