<h1>Авто категорії {$rsCategory['name']}</h1>

<div class="items_wrapper">
  {foreach $rsProducts as $item }

  <a href="/car/{$item['id']}/" class="category_item">
    <img src="{$item['image']}" alt="" />

    <p href="/car/{$item['id']}/">
      {$item['name']} <span class="price">{$item['price']}$</span>
    </p>
  </a>
  {/foreach } 
  </div>

  <div class="general_categories">
  {foreach $rsChildCats as $item}
  
    <h2 class="general_category">
      <a href="/category/{$item['id']}/">{$item['name']} </a>
    </h2>
  
  {/foreach}</div>
</div>
