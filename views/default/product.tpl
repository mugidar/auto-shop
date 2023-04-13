<div class="car_page">
  <div class="car_info">
    <h1>{$rsProduct['name']}</h1>
    <div class="car_info_wrapper">
      <img src="{$rsProduct['image']}" alt="" />
      <div class="car_information">
        <div class="description">
          <h2>Опис:</h2>
          <p>{$rsProduct['description']}</p>
        </div>
        <div class="buy">
          <span class="price">{$rsProduct['price']}$</span
          >
          <button onclick="addToCart({$rsProduct['id']})" id="addCart_{$rsProduct['id']}" class="addCartBtn">
            Додати до придбання
          </button>
          <button id="removeCart_{$rsProduct['id']}" class="removeCartBtn">
           Видалити зі списку
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
