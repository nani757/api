<?php


$servername = "localhost";
$username ="root";
$password = "";
$db ="poetrydb";

$conn =new mysqli($servername,$username,$password,$db);

if ($conn->connect_error){
     die("connection failed: ".$conn->connect_error);
 }

$POETRY = $_POST['poetry_data'];

$ID = $_POST['ID'];

$query = "UPDATE poetry SET poetry_name ='$POETRY' WHERE ID  = '$ID'";

$result = $conn->query($query);


if($result){
        $response = array("status"=>"1","message"=>"Poetry updated successfully ");
}
else{
       $response = array("status"=>"0","message"=>"Poetry not updated successfully");
}

echo json_encode($response);





?>