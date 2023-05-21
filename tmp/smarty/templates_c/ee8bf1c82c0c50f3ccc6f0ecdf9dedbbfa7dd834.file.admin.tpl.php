<?php /* Smarty version Smarty-3.1.6, created on 2023-05-21 01:08:10
         compiled from "../views/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155557829464501394242436-18467516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8bf1c82c0c50f3ccc6f0ecdf9dedbbfa7dd834' => 
    array (
      0 => '../views/admin\\admin.tpl',
      1 => 1684615812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155557829464501394242436-18467516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_645013942948d',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645013942948d')) {function content_645013942948d($_smarty_tpl) {?><html>
  <head>
    <title>Site settings</title>
  
  </head>

  <body>
    <div class="wrapper">
      <div class="main_menu">
        <div id="newCategory">
          <span>Нова категорія</span>
          <input
            type="text"
            name="newCategoryName"
            id="newCategoryName"
            value=""
          />
        </div>
        <div class="category_select">
          <span>Підкатегорія для</span>
          <select name="generalCatId">
            <option value="0">Головна категорія</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
            <?php } ?>
          </select>
        </div>

        <input type="button" onclick="newCategory()" value="Додати категорію" />

        <?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
    </div>
    <div id="centerColumn"></div>
  </body>
</html>
<?php }} ?>