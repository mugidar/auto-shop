<div id="leftColumn">
  <div id="leftMenu">
    <div class="menuCaption">Меню:</div>
    <ul>
      {foreach from = $rsCategories item = item}
      <li class="menu_list-title">
        <h5>
          <a href="/category/{$item['id']}/">{$item['name']}</a>
        </h5>

        {if isset($item['children'])} 
        {foreach from = $item['children'] item = itemChild}
        <li>
        <a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a>
      </li>
        {/foreach}
         {/if} 
         {/foreach}
      </li>
    </ul>

    <div class="cart">
      <h1>Кошик</h1>
      <a href="/cart/" title="To cart">В кошику</a>
      <span id="cartCntItems">

        {if $cartCntItems > 0}{$cartCntItems} {else} 0 {/if}
      </span>
    </div>
  </div>
</div>
