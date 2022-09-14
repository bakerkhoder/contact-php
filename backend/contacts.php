<?php  
include("connection.php");
$query=$mysqli->prepare("SELECT name FROM contacts");
$query->execute();
$array=$query->get_result();
$response=[];
while($a =$array->fetch_assoc()){
    $response[]=$a;
}
$json=json_encode($response);
echo $json;
?>