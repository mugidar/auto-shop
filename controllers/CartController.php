<?php 


/**
 *  Контроллер корзины
 * 
 */

// Models
@include_once "../models/CategoriesModel.php";
@include_once "../models/ProductsModel.php";

/**
 * Формирование главной страницы сайта
 * @param integer 
 * @return json info
 * @param object $smarty шаблонизатор
 * @link /cart/
 */ 

 function addToCartAction() {
    $itemId = isset($_GET['id']) ? intval(($_GET['id'])) : null ;
    if(!$itemId) return false;

    $resData = array();

    if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    }else{
        $resData['success'] = 0;
    }

    echo json_encode($resData);
 }

 function removeFromCartAction() {
    $itemId = isset($_GET['id']) ? intval(($_GET['id'])) : null ;
    if(!$itemId) exit();

    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    }else{
        $resData['success'] = 0;
    }

    echo json_encode($resData);
 }



 function indexAction($smarty) {
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array() ;
    
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getProductsFromArray($itemsIds);

    $smarty->assign('pageTitle', "Кошик");
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "cart");
    loadTemplate($smarty, "footer");
 }