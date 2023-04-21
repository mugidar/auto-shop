<?php 
include_once '../config/db.php';

/**
 * @param string $email
 * @param string $pwdMD5
 * @param string $name
 * @param string $phone
 * @param string $adress
 * @return array
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress){
    global $db;
    $email  = htmlspecialchars(mysqli_real_escape_string($db,$email));
    $name   = htmlspecialchars(mysqli_real_escape_string($db,$name));
    $phone  = htmlspecialchars(mysqli_real_escape_string($db,$phone));
    $adress = htmlspecialchars(mysqli_real_escape_string($db,$adress));

    $sql = "INSERT INTO 
      users (`email` , `pwd` , `name` , `phone` , `adress`)
    VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')";

    $rs = mysqli_query($db, $sql);

    if($rs){
        $sql = "SELECT * FROM users
            WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}')  
            LIMIT 1";
   
   
    $rs = mysqli_query($db, $sql);
    $rs = createSmartyRsArray($rs);
    
    if(isset($rs[0])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    }

    return $rs;
}

/**
 * @param string $email
 * @return array
 */
function checkUserEmail($email) {
    global $db;
    $email = mysqli_real_escape_string($db, $email);
    $sql = "SELECT id FROM users WHERE email = '{$email}'";
    $rs = mysqli_query($db, $sql);
    $rs = createSmartyRsArray($rs);
    return $rs;
}


/**
 * @param string $email
 * @param string $pwd1
 * @param string $pwd2
 * @return array 
 */

 function checkRegisterParams($email, $pwd1, $pwd2) {
    $res = null;

    if (!$email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }

   else if (!$pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
        
    }
    else if (!$pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }
   

    else if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    return $res;
}