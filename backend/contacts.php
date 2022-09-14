<?php  
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
include("connection.php");
$query=$mysqli->prepare("SELECT message FROM contacts");
$query->execute();
$array=$query->get_result();
$response=[];
while($a =$array->fetch_assoc()){
    $response[]=$a;
}
$json=json_encode($response);
echo $json;
?>