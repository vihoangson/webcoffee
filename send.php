<?php
session_start();
try{
    $json = json_encode($_REQUEST);
    if(file_put_contents('data/order/'.time().'.json',$json) == false){
        throw new Exception('Can\'t write file');
    }
    $_SESSION['status_order'] = 1;
    header('Location: /');
}catch (Exception $e){
    $_SESSION['status_order'] = 2;
    header('Location: /');
}
//header('Location: /');
exit;
