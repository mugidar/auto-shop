<html>
    <head>
        <title>Site settings</title>
        <link rel="stylesheet" href="/templates/admin/main.css" >
        <script src="/js/jquery-3.6.4.min.js"></script>
        <script src="/js/admin.js"></script>
        
    </head>

    <body>
        <div id="newCategory">
            New category 
            <input type="text" name="newCategoryName" id="newCategoryName" value="" />
        </div>

        Підкатегорія для 

        <select name="generalCatId">
            <option value="0">Головна категорія</option>
            {foreach $rsCategories as $item} 
            <option value="{$item['id']}">{$item['name']}</option>
            {/foreach}
        </select>

        <input type="button" onclick="newCategory()" value="Додати категорію">


        {include file='adminLeftcolumn.tpl'}

        <div id="centerColumn"></div>