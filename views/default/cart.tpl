{* Cart *}
<div id="cart_page">

{if !$rsProducts} Ви не вибрали жодного авто {else}
<div>
<h1>Автівки</h1>
<table>
 <thead> <tr>
  <td>#</td>
  <td>Світлина</td>
  <td>Назва</td>
  <td>Вартість</td>
  <td>Номер власника</td>
  <td>Дія</td>
</tr></thead>
<tbody id="autopark">
  {foreach $rsProducts as $item name=products}
  <tr>
    <td>{$smarty.foreach.products.iteration}</td>
    <td><a href="/car/{$item['id']}/"><img src="{$item['image']}" alt=""></a></td>
    <td><a href="/car/{$item['id']}/">{$item['name']}</a></td>
    <td class="price">{$item['price']}$</td>
    <td><a href="tel:{$item['seller_tel']}">{$item['seller_tel']}</a></td>
    <td class="action_btn"> <button {if $itemInCart} class="hideme" {/if}   onclick="removeFromCart({$item['id']})" id="removeCart_{$item['id']}" >
        Видалити зі списку
       </button>
       <button {if !$itemInCart} class="hideme" {/if} onclick="addToCart({$item['id']})" id="addCart_{$item['id']}" >
         Додати до придбання
       </button>
      </td>
  </tr>
  {/foreach}
</tbody>
</table>


</div>
{/if}
</div>