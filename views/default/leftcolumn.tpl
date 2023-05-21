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

    {if isset($arUser)} 
    <div id="userBox">
      <a href="/user/" id="userLink">{$arUser['displayName']}</a>
      <a href="/user/logout/" onclick="logout()">Вихід</a>
    </div>

    {else}
    <div id="userBox" class="hideme">
      <a href="#" id="userLink"></a>
      <a href="/user/logout/" onclick="logout()">Вихід</a>
    </div>

    <div id="loginBox">
      <div class="menuCaption">Вхід</div>
      <input   placeholder="Логін" type="text" id="loginEmail" name="loginEmail" value="">
      <input placeholder="Пароль"  type="password" id="loginPwd" name="loginPwd" value="">
      <input onclick="login()" type="button" value="Log in">
    </div>

   <div class="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox()">Реєстрація</div>
        <div class="registerBoxHidden hideme">
          <label>
            Пошта: <input  placeholder="Е-мейл" value="" type="email" id="email" name="email">
          </label>
          <label>
            Пароль: <input placeholder="Пароль" value="" type="password" id="pwd1" name="pwd1">
          </label>
          <label>
            Повторіть пароль: <input value="" placeholder="Повторіть пароль" type="password" id="pwd2" name="pwd2">
          </label>
          <label>
            <input type="submit" onclick="registerNewUser()" value="Зареєструватися">
          </label>
        </div>
      </div>
    
    
{/if}

    <div class="cart">
      <h1>Підбір</h1>
      <a href="/cart/" title="To cart">В автопарку</a>
      <span id="cartCntItems">
        {if $cartCntItems > 0}{$cartCntItems} {else} 0 {/if}
      </span>
    </div>
  </div>
</div>
