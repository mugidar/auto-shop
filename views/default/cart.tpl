{* Cart *}

<h1>Кошик</h1>

{if !$rsProducts} Ви не вибрали жодного авто {else}
<h2>Автівки</h2>
<table>
  <tr>
    <td>#</td>
    <td>Назва</td>
    <td>Вартість</td>
    <td>Дія</td>
  </tr>
  {foreach $rsProducts as $item name=products}
  <tr>
    <td>{$smarty.foreach.products.iteration}</td>
    <td><a href="/car/{$item['id']}/">{$item['name']}</a></td>
    <td>{$item['price']}</td>
    <td> <button {if $itemInCart} class="hideme" {/if}   onclick="removeFromCart({$item['id']})" id="removeCart_{$item['id']}" >
        Видалити зі списку
       </button>
       <button {if !$itemInCart} class="hideme" {/if} onclick="addToCart({$item['id']})" id="addCart_{$item['id']}" >
         Додати до придбання
       </button>
      </td>
  </tr>
  {/foreach}
</table>
{/if}
