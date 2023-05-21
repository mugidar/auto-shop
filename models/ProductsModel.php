<?php
include_once '../config/db.php';
function getLastProducts($offset = 1, $limit = 9) {
    global $db;

    $sqlCnt = "SELECT count(id) as cnt
                FROM `cars`";

    $rs = mysqli_query($db, $sqlCnt);
    $cnt = createSmartyRsArray($rs);

    $sql = "SELECT *
    FROM `cars` WHERE `sold` = 0
    ORDER BY id DESC";
    
    $sql .= " LIMIT  {$offset}, {$limit}";
    
    $rs = mysqli_query($db, $sql);
    $rows = createSmartyRsArray($rs);

    return array($rows, $cnt[0]['cnt']);
}
/* function getLastProducts($limit = null) {
    global $db;

    $sql = "SELECT *
    FROM `cars`
    ORDER BY id DESC";
    
    if($limit) {
        $sql .= " LIMIT $limit";
    }
    
    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
} */

function getProductsByCat($itemId) {
    global $db;

    $itemId = intval($itemId);

    $sql = "SELECT *
    FROM `cars`
    WHERE category_id = {$itemId}";
    
    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}

function getProductById($itemId) {
    global $db;
    $itemId = intval($itemId);
    
    $sql = "SELECT * 
    FROM `cars` 
    WHERE id = '$itemId'";
    
    $rs = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($rs);
}
/** 
 * 
 * @param array $itemsIds
 * @return array
 */

function getProductsFromArray($itemsIds) {
    global $db;
  
    $strIds = implode($itemsIds, ', ');
    
    $sql = "SELECT * 
    FROM `cars` 
    WHERE id in ({$strIds})";

    $rs = mysqli_query($db, $sql);
  
    return createSmartyRsArray($rs);
}

function getProducts() {
    global $db;
    $sql = "SELECT * 
    FROM `cars` ORDER BY category_id";
    
    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}
function insertProduct($itemName,$itemPrice, $itemDesc, $itemCat, $itemImg, $itemSellerName,$itemSellerTel) {
    global $db;
    $sql = "INSERT INTO cars SET
      `name` = '{$itemName}',
      `price` = '{$itemPrice}',
      `description` = '{$itemDesc}',
      `category_id` = '{$itemCat}',
      `image` = '{$itemImg}',
      `seller_name` = '{$itemSellerName}',
      `seller_tel` = '{$itemSellerTel}'
      ";

    $rs = mysqli_query($db, $sql);
    
    return $rs;
}

function updateProduct($itemId,$itemName,$itemPrice, $itemDesc, $itemCat, $newFileName = null,$itemSellerName, $itemSellerTel,$itemSoldStatus) {
    global $db;

    $set = array();
  
    if($itemName) {
        $set[] = "`name` = '{$itemName}'";
    }
    if($itemPrice) {
        $set[] = "`price` = '{$itemPrice}'";
    }
    if($itemDesc) {
        $set[] = "`description` = '{$itemDesc}'";
    }
    if($itemCat) {
        $set[] = "`category_id` = '{$itemCat}'";
    }
    if($itemSellerName) {
        $set[] = "`seller_name` = '{$itemSellerName}'";
    }
    if($itemSoldStatus === 1 || $itemSoldStatus === 0) {
        $set[] = "`sold` = '{$itemSoldStatus}'";
    }
    if($itemSellerTel) {
        $set[] = "`seller_tel` = '{$itemSellerTel}'";
    }
    if($newFileName) {
        $set[] = "`image` = '/assets/img/{$newFileName}'";
    }
    
    
    $setStr = implode($set, ", ");

    
    $sql = "UPDATE cars SET {$setStr} WHERE id = '{$itemId}'";


    $rs = mysqli_query($db, $sql);
    
    return $rs;
}

function updateProductImage($itemId,$newFileName) {
    global $db;
    $rs = updateProduct($itemId, null, null, null, null, $newFileName,null,null,null);
    
    return $rs;
}

