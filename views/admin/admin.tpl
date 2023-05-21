<html>
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
            {foreach $rsCategories as $item}
            <option value="{$item['id']}">{$item['name']}</option>
            {/foreach}
          </select>
        </div>

        <input type="button" onclick="newCategory()" value="Додати категорію" />

        {include file='adminLeftcolumn.tpl'}
      </div>
    </div>
    <div id="centerColumn"></div>
  </body>
</html>
