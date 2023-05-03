<h2>{$pageTitle}</h2>
<table border="1" cellpadding="5" cellspacing="5">
  <tr>
    <th>Назва</th>
    <th>Ціна</th>
    <th>Категорія</th>
    <th>Опис</th>
    <th>Зберегти</th>
  </tr>

  <tr>
    <td>
      <input value="BMW" type="edit" id="newItemName" value="" />
    </td>
    <td>
      <input value="52" type="edit" id="newItemPrice" value="" />
    </td>
    <td>
      <select id="newItemCatId">
        <option value="0">Головна категорія</option>
        {foreach $rsCategories as $itemCat}
        <option value="{$itemCat['id']}">{$itemCat['name']}</option>
        {/foreach}
        <td>
          <textarea id="newItemDesc" ></textarea>
        </td>
        <td>
          <input type="button" value="Save" onclick="addCar()">
        </td>
      </select>
    </td>
  </tr>
</table>

<table>
  <caption>Редагувати</caption>
  <tr>
    <th>№</th>
    <th>ID</th>
    <th>Назва</th>
    <th>Категорія</th>
    <th>Опис</th>
    <th>Видалити</th>
    <th>Зображення</th>
    <th>Зберегти</th>
  </tr>

  {foreach $rsProducts as $item name=products}
  <tr>
    <td>{$smarty.foreach.products.iteration}</td>
    <td>{$item['id']}</td>
    <td>
      <input type="edit" id="itemName_{$item['id']}" value="{$item['name']}">
    </td>
    <td>
      <input type="edit" id="itemPrice_{$item['id']}" value="{$item['price']}">
    </td>
  </tr>

  <td>
    <select id="itemCatId_{$item['id']}">
      <option value="0">Головна категорія</option>
      {foreach $rsCategories as $itemCat}
      <option value="{$itemCat['id']}"></option>
      {/foreach}
    </select>
  </td>
  {/foreach}


</table>