<?php 

/* 
categories
*/
include_once '../config/db.php';

function getChildrenForCat($catId){
    global $db;
    $sql = "SELECT * FROM `categories` WHERE parent_id = '{$catId}'";

    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}



function getAllMainCatsWithChildren () {
    global $db;
    $sql = 'SELECT * 
    FROM `categories` 
    WHERE parent_id = 0';

    $rs = mysqli_query($db, $sql);

    $smartyRs = array();

    while ($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getChildrenForCat($row['id']);

        if($rsChildren) {
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;
    }


    return $smartyRs;
}

function getCatById($catId) {
    global $db;
    $catId = intval($catId);
    
    $sql = "SELECT * 
    FROM `categories` 
    WHERE id = '$catId'";

    $rs = mysqli_query($db, $sql);


    return mysqli_fetch_assoc($rs);
}