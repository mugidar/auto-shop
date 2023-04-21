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


   <div class="registerBox">
        <div class="menuCaption showHidden">Register</div>
        <div class="registerBoxHidden">
          <label>
            Email: <input value="dada@gmail.com" type="email" id="email" name="email">
          </label>
          <label>
            Password: <input value="dada" type="password" id="pwd1" name="pwd1">
          </label>
          <label>
            Again: <input value="dada" type="password" id="pwd2" name="pwd2">
          </label>
          <label>
            <input type="submit" onclick="registerNewUser()" value="Register">
          </label>
        </div>
      </div>
    
    


    <div class="cart">
      <h1>Кошик</h1>
      <a href="/cart/" title="To cart">В кошику</a>
      <span id="cartCntItems">
        {if $cartCntItems > 0}{$cartCntItems} {else} 0 {/if}
      </span>
    </div>
  </div>
</div>
