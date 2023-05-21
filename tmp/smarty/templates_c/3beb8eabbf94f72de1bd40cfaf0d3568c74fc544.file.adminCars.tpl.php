<?php /* Smarty version Smarty-3.1.6, created on 2023-05-21 15:59:27
         compiled from "../views/admin\adminCars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:496954065645244a1ad68b3-65326315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3beb8eabbf94f72de1bd40cfaf0d3568c74fc544' => 
    array (
      0 => '../views/admin\\adminCars.tpl',
      1 => 1684673964,
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
    'rsCategories' => 0,
    'itemCat' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645244a1b0e9c')) {function content_645244a1b0e9c($_smarty_tpl) {?>
<link rel="stylesheet" href="/templates/admin/jquery-ui.min.css" />
<link
  rel="stylesheet"
  href="/templates/admin/jquery-ui.structure.min.css"
/>
<link rel="stylesheet" href="/templates/admin/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="/templates/admin/ui.jqgrid.css" />

<link rel="stylesheet" href="/templates/admin/main.css" />
<h1>Створити</h1>
<?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table id="create_car" border="1" cellpadding="5" cellspacing="5">
  <tr>
    <th>Назва</th>
    <th>Ціна</th>
    <th>Посилання на зображення</th>
    <th>Категорія</th>
    <th>Опис</th>
    <th>Ім'я продавця</th>
    <th>Номер продавця</th>
    <th>Зберегти</th>
  </tr>

  <tr>
    <td>
      <input value="" type="edit" id="newItemName" value="" />
    </td>
    <td>
      <input value="" type="edit" id="newItemPrice" value="" />
    </td>
    <td>
      <input type="url" id="newItemImg" value="" />
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
          <input type="text" id="newItemSellerName" value="" />
        </td>
        <td>
          <input type="tel" id="newItemSellerTel" value="" />
        </td>
        <td>
          <input type="button" value="Створити" onclick="addCar()">
        </td>
      </select>
    </td>
  </tr>
</table>


<div class="switch_btns">
  <button id="jqueryGrid">JqueryGrid</button>
  <button  id="tableGrid" >Table</button>
</div>


<script>
  let rsProducts = <?php echo json_encode($_smarty_tpl->tpl_vars['rsProducts']->value);?>
;
  $(document).ready(()=> { 
 

    $("#grid").jqGrid({
      datatype: "local",
      data: rsProducts,
      colNames: [ 'ID', 'Назва', 'Ціна', 'Категорія', 'Опис', 'Зображення', 'Ім\'я продавця', 'Номер продавця', 'Продано'],
      colModel: [
          { name: 'id', index: 'id', width: 20, sorttype: "int" , editable: true },
          { name: 'name',id: "Imya", index: 'Imya', width: 200, editable: true },
          { name: 'price', index: 'price', width: 100, editable: true },
          { name: 'category_id', index: 'category_id', width: 40, editable: true },
          { name: 'description', index: 'description', width: 200, editable: true },
          { name: 'image', index: 'newItemImg', width: 200, editable: true },
          { name: 'seller_name', index: 'seller_name', width: 100, editable: true },
          { name: 'seller_tel', index: 'seller_tel', width: 100, editable: true },
          { name: 'sold', index: 'sold', width: 70, editable: true },
      ],
      height: 300,
      rowNum: 5,
      rowList: [5,10, 20, 30],
      sortname: 'id',
      viewrecords: true,
      sortorder: "asc",
      caption: "Редагувати",
      pager: '#gridpager',
      editurl: 'clientArray',
    });

    jQuery("#grid").jqGrid('navGrid','#gridpager',
    { edit: true, add: true, del: true },
    { 
      
      // edit options 
      onclickSubmit: function(params, postdata) {
        let itemId = $("#id").val();
        let itemName = $("#name").val();
        let itemPrice = $("#price").val();
        let itemCatId = $("#category_id").val();
        let itemDesc = $("#description").val();
        let itemImg = $("#image").val();
        let itemSellerName = $("#seller_name").val();
        let itemSellerTel = $("#seller_tel").val();
        let itemSoldStatus =  $("#sold").val();
    
    
      let postData = {
        itemId,
        itemName,
        itemPrice,
        itemCatId,
        itemDesc,
        itemSellerName,
        itemSellerTel,
        itemSoldStatus
      };
      console.log(postData);
      $.ajax({
        url: "/admin/updateproduct/",
        dataType: "json",
        data: postData,
        async: true,
        type: "POST",
        success: function (data, err) {
          console.log(data["message"]);
        },
        error: function (request, status, error) {
          console.log(request.responseText);
        }
      });
      }
    },
    { 
      onclickSubmit: function(params, postdata) {

          let itemName = $("#name").val();
          let itemPrice = $("#price").val();
          let itemCatId = $("#category_id").val();
          let itemDesc = $("#description").val();
          let itemImg = $("#image").val();
          let itemSellerName = $("#seller_name").val();
          let itemSellerTel = $("#seller_tel").val();
        
          let postData = {
            itemName,
            itemPrice,
            itemCatId,
            itemDesc,
            itemImg,
            itemSellerName,
            itemSellerTel
          };
          console.log(postData);
          $.ajax({
            url: "/admin/addproduct/",
            dataType: "json",
            data: postData,
            async: true,
            type: "POST",
            success: function (data, err) {
              console.log(data);
              if (data["success"]) {
                $("#name").val("");
                $("#price").val("");
                $("#category").val("");
                $("#description").val("");
                $("#image").val("");
                $("#seller_name").val("");
                $("#seller_number").val("");
              }
            },
            error: function (request, status, error) {
              console.log(request.responseText);
            }
          });
        
      }
    },
    
    { 
      // delete options 
      onclickSubmit: function(params, postdata) {
      
      
      let postData = {
        itemId: $(".ui-state-highlight")[0].id,
        itemSoldStatus: 1
      };
      
      $.ajax({
        url: "/admin/updateproduct/",
        dataType: "json",
        data: postData,
        async: true,
        type: "POST",
        success: function (data, err) {
          console.log(data["message"]);
        },
        error: function (request, status, error) {
          console.log(request.responseText);
        }
      });
      }
    }
  );
  })

 </script>

<table id="grid" ></table>
<div id="gridpager"></div>









  <table border="1" cellpadding="0" cellspacing="0" id="cars_table" class="hidden">
    <caption>Редагувати</caption>
    <tr>
      <th>№</th>
      <th>ID</th>
      <th>Назва</th>
      <th>Ціна</th>
      <th>Категорія</th>
      <th>Опис</th>
      <th>Зображення</th>
      <th>Ім'я продавця</th>
      <th>Номер продавця</th>
      <th>Продано</th>
      <th>Зберегти</th>
    </tr>
  
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
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
      <td>
        <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
      </td>
      <td>
        <input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
      </td>
      <td>
        <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
          <option value="0">Головна категорія</option>
          <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['itemCat']->value['id']){?> selected <?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

          </option>
          <?php } ?>
        </select>
        <td>
          <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</textarea>
        </td>
    
      </td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" height="70">
        <?php }?>
        <form id="upload" action="/admin/upload/" method="POST" enctype="multipart/form-data">
          <input type="file" name="filename">
          <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
         
          <input type="submit" value="Upload">
        </form>
      </td>
      <td>
        <input id="updateItemSellerName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seller_name'];?>
">
      </td>
      <td>
        <input id="updateItemSellerTel_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seller_tel'];?>
">
      </td>
      <td>
        <input id="test_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="sold" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['sold']){?> checked <?php }?>>
      </td>
      <td>
        <input type="button" value="Save" onclick="updateCar(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
      </td>
      <?php } ?>
   
    </tr>
  
  
  </table> 
<?php }} ?>