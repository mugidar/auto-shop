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
      {if $item['sold'] == 1} ПРОДАНО {/if}
    </a>
    
    {/foreach}
    
    </div>
    <div class="pagination">
      {for $i = 1 to $paginator['pageCnt']}
        {if $i == $paginator['currentPage']}
          <strong><span>{$i}</span></strong>
        {else}
          <span>
            <a href="{$paginator['link']}{$i}">{$i}</a>
          </span>
        {/if}
      {/for}
    </div>
    </div>
</div>
<script src="main.js"></script>
  </body>
</html>
