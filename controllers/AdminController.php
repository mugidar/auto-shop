<?php 

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('TemplatePrefix', TemplateAdminWebPath);

function indexAction($smarty) {
    $rsCategories = getAllMainCatsWithChildren();


    $smarty->assign("rsCategories", $rsCategories);
    $smarty->assign('pageTitle', "");

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');
}

function addNewCatAction() {
    $catName = $_POST['newCategoryName'];
    $catParentId = $_POST['generalCatId'];

    $res = insertCat($catName, $catParentId);

    if($res) {
        $resData['success'] = 1;
        $resData['message'] = "Added";
    }else {
        $resData['success'] = 0;
        $resData['message'] = "Error";
    }

    echo json_encode($resData);
    return;
}

function categoryAction($smarty) {
    $rsCategories = getAllCategories();
    $rsMainCategories = getAllMainCategories();
    
    $smarty->assign("rsCategories", $rsCategories);
    $smarty->assign("rsMainCategories", $rsMainCategories);
    $smarty->assign("pageTitle", "Setttttt");


    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCategory');
    loadTemplate($smarty, 'adminFooter');
}

function updateCategoryAction() {
  $itemId  = $_POST['itemId'];
  $parentId  = $_POST['parentId'];
  $newName = $_POST['newName'];

    $res = updateCategoryData($itemId, $parentId, $newName);

    if($res) {
        $resData['success'] = 1;
        $resData['message'] = "category updated";
    }else { 
        $resData['success'] = 0;
        $resData['message'] = "Error update";
    }

    echo json_encode($resData);
    return;
}


function carsAction($smarty) {
    $rsCategories = getAllCategories();
    $rsProducts = getProducts();
    
    $smarty->assign("rsCategories", $rsCategories);
    $smarty->assign("rsProducts", $rsProducts);

    $smarty->assign("pageTitke", "Авто");



    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCars');
    loadTemplate($smarty, 'adminFooter');
}
function addProductAction() {
    $itemName  = $_POST['itemName'];
    $itemPrice  = $_POST['itemPrice'];
    $itemDesc  = $_POST['itemDesc'];
    $itemCat  = $_POST['itemCatId'];
    
 $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat);

      if($res) {
          $resData['success'] = 1;
          $resData['message'] = "Car added";
      }else { 
          $resData['success'] = 0;
          $resData['message'] = "Error add";
      }
  
      echo json_encode($resData);
      return;
}