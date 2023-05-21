
<link rel="stylesheet" href="/templates/admin/jquery-ui.min.css" />
<link
  rel="stylesheet"
  href="/templates/admin/jquery-ui.structure.min.css"
/>
<link rel="stylesheet" href="/templates/admin/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="/templates/admin/ui.jqgrid.css" />

<link rel="stylesheet" href="/templates/admin/main.css" />
<h1>Створити</h1>
{include file='adminLeftcolumn.tpl'}
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
        {foreach $rsCategories as $itemCat}
        <option value="{$itemCat['id']}">{$itemCat['name']}</option>
        {/foreach}
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
  let rsProducts = {json_encode($rsProducts)};
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
  
    {foreach $rsProducts as $item name=products}
    <tr>
      <td>{$smarty.foreach.products.iteration}</td>
      <td>{$item['id']}</td>
      <td>
        <input type="edit" id="itemName_{$item['id']}" value="{$item['name']}">
      </td>
      <td>
        <input type="edit" id="itemPrice_{$item['id']}" value="{$item['price']}">
      </td>
      <td>
        <select id="itemCatId_{$item['id']}">
          <option value="0">Головна категорія</option>
          {foreach $rsCategories as $itemCat}
          <option value="{$itemCat['id']}" {if $item['category_id'] == $itemCat['id']} selected {/if}>
            {$itemCat['name']}
          </option>
          {/foreach}
        </select>
        <td>
          <textarea id="itemDesc_{$item['id']}">{$item['description']}</textarea>
        </td>
    
      </td>
      <td>
        {if $item['image']}
        <img src="{$item['image']}" width="100" height="70">
        {/if}
        <form id="upload" action="/admin/upload/" method="POST" enctype="multipart/form-data">
          <input type="file" name="filename">
          <input type="hidden" name="itemId" value="{$item['id']}">
         
          <input type="submit" value="Upload">
        </form>
      </td>
      <td>
        <input id="updateItemSellerName_{$item['id']}" type="text" value="{$item['seller_name']}">
      </td>
      <td>
        <input id="updateItemSellerTel_{$item['id']}" type="text" value="{$item['seller_tel']}">
      </td>
      <td>
        <input id="test_{$item['id']}" class="sold" type="checkbox" {if $item['sold']} checked {/if}>
      </td>
      <td>
        <input type="button" value="Save" onclick="updateCar({$item['id']})">
      </td>
      {/foreach}
   
    </tr>
  
  
  </table> 
