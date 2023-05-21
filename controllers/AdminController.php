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
    $itemImg  = $_POST['itemImg'];
    $itemSellerName  = $_POST['itemSellerName'];
    $itemSellerTel  = $_POST['itemSellerTel'];
    
    $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat, $itemImg,$itemSellerName,$itemSellerTel);
   
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

function updateProductAction() {
    $itemId  = $_POST['itemId'];
    $itemName  = $_POST['itemName'];
    $itemPrice  = $_POST['itemPrice'];
    $itemDesc  = $_POST['itemDesc'];
    $itemCat  = $_POST['itemCatId'];
    $itemSellerName  = $_POST['itemSellerName'];
    $itemSellerTel  = $_POST['itemSellerTel'];
    $itemSoldStatus  = $_POST['itemSoldStatus'];

    $res = updateProduct($itemId, $itemName, $itemPrice, $itemDesc, $itemCat, null ,$itemSellerName, $itemSellerTel,$itemSoldStatus);

      if($res) {
          $resData['success'] = 1;
          $resData['message'] = "Car edited";
      }else { 
          $resData['success'] = 0;
          $resData['message'] = "Error add";
      }
  
      echo json_encode($resData);
      return;
}



function uploadAction() {
    $maxSize = 2 * 1024 * 1024;

    $itemId = $_POST['itemId'];

    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);

    $newFileName = $itemId . "." . $ext;

    if($_FILES['filename']['size'] > $maxSize){ 
        echo "Big size";
        return;
    }

    if(is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/assets/img/' . $newFileName);
        if($res) {
            $res = updateProductImage($itemId, $newFileName);
            if($res) {
                redirect('/admin/cars/');
            }
        }
    }else {
        echo "Error";
    }

 
}
