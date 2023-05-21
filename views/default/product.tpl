<div class="car_page">
  <div class="car_info">
    <h1>{$rsProduct['name']}</h1>
    <div class="car_info_wrapper">
      <img src="{$rsProduct['image']}" alt="" />
      <div class="car_information">
        <div class="description">
          <h2>Опис:</h2>
          <p>{$rsProduct['description']}</p>
          {if $rsProduct['sold'] == 0}
          <h3>Номер власника:</h3>
          <span></span><a href="tel:{$rsProduct['seller_tel']}">{$rsProduct['seller_tel']} </a>-  {$rsProduct['seller_name']} </span>
          {/if}
        </div>
        <div class="buy">
          <span class="price">{$rsProduct['price']}$</span
          > 
          {if $rsProduct['sold'] == 1}
          <h1>Авто продане</h1>

          {else} <button {if !$itemInCart} class="hideme" {/if}   onclick="removeFromCart({$rsProduct['id']})" id="removeCart_{$rsProduct['id']}" >
            Видалити зі збережених
           </button>
           <button {if $itemInCart} class="hideme" {/if} onclick="addToCart({$rsProduct['id']})" id="addCart_{$rsProduct['id']}" >
             Додати до збережених
           </button>
        
          {/if}
      
         
         
         
        </div>
      </div>
    </div>
  </div>
</div>
