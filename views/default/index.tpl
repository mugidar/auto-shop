<!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  {$pageTitle}
  <body>
    <h1>Головна сторінка ({count($rsProducts)} оголошень)</h1>
    <div class="items_wrapper">
      {foreach $rsProducts as $item }

      <a class="main_page_item" href="/car/{$item['id']}/">
        <img src="{$item['image']}" />
        <p  href="product/{$item['id']}">
          {$item["name"]} 
          <span class="price">{$item['price']}$</span>
        </p>
      </a>

      {/foreach}
    </div>
</div>
<script src="main.js"></script>
  </body>
</html>
