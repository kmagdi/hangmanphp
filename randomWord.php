<?php
/*header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers:*");*/
//header("Content-type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

//require_once 'db_cloud.php';
require_once 'db.php';

//echo "ellenőrzés:".$host;
try{
    $sql="SELECT * FROM words ORDER BY RAND() LIMIT 1";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
}catch(PDOException $e){
    echo json_encode(["error"=>$e->getMessage()]);
}



?>

