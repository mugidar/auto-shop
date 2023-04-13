<?php

/**
 *  Контроллер главной страницы
 * 
 */

// Models
@include_once "../models/CategoriesModel.php";
@include_once "../models/ProductsModel.php";

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 

function indexAction($smarty){
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if($itemId == null) exit();

    $rsProduct = getProductById($itemId);

    $rsCategories = getAllMainCatsWithChildren();
    
   
    // $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('pageTitle', "");
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategories', $rsCategories);
    
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}
