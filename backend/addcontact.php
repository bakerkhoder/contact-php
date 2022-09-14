<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
include("connection.php");
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$message=$_POST["message"];


$query=$mysqli->prepare("INSERT INTO contacts(name,email,number,message)VALUES(?,?,?,?)");
$query->bind_param("ssss",$name,$email,$number,$message);
$query->execute();
$response=[];
$response["success"]=true;
echo json_encode($response);

?>