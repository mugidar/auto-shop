<?php
include_once '../config/db.php';
function getLastProducts($limit = null) {
    global $db;

    $sql = "SELECT *
    FROM `cars`
    ORDER BY id DESC";
    
    if($limit) {
        $sql .= " LIMIT $limit";
    }
    
    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}

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
function insertProduct($itemName,$itemPrice, $itemDesc, $itemCat) {
    global $db;
    $sql = "INSERT INTO cars SET
      `name` = '{$itemName}',
      `price` = '{$itemPrice}',
      `description` = '{$itemDesc}',
      `category_id` = '{$itemCat}'
      ";
    
    $rs = mysqli_query($db, $sql);
   
    return $rs;
}