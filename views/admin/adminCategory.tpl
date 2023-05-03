<h2>{$pageTitle}</h2>
<table border="1" cellpadding="5" cellspacing="5">
  <tr>
    <th>#</th>
    <th>ID</th>
    <th>Title</th>
    <th>Parent cat</th>
    <th>Action</th>
  </tr>

  {foreach $rsCategories as $item name=categories}
  <tr>
    <td>{$smarty.foreach.categories.iteration}</td>
    <td>{$item['id']}</td>
    <td>
        <input type="edit" id="itemName_{$item['id']}" value="{$item['name']}">
    </td>
    <td>
        <select id="parentId_{$item['id']}">
            <option value="0">Main cat</option>
            {foreach $rsMainCategories as $mainItem} 
            <option value="{$mainItem['id']}" {if $item['parent_id'] == $mainItem['id']} selected {/if}>{$mainItem['name']}</option>
            {/foreach}
        </select>
    </td>
    <td>
        <input type="button" value="Save" onclick="updateCat({$item['id']})">
    </td>
  </tr>
  {/foreach}
</table>
