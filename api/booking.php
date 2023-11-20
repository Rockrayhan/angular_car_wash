<?php
include_once('database.php');
$postdata = file_get_contents("php://input");
$result =  json_decode($postdata);

if (isset($result->services) && isset($result->washingPoints) && isset($result->name) && isset($result->mobile)) {

    $name =  $result->name;
    $mobile =  $result->mobile;
    $services =  $result->services;
    $washingPoints = $result->washingPoints;
    $date =  $result->date;
    $time =  $result->time;
    $message =  $result->message;


    $db->query("INSERT INTO tblcarwashbooking VALUES(NULL, '', '$services', '$washingPoints', '$name', '$mobile', '$date', '$time', '$message', '', '', '', '', '', ''  )");


    if ($db->affected_rows > 0) {
        echo json_encode(['msg' => "Successfully Inserted"]);
    }
} else {
    echo json_encode(['msg' => "No fields can be blank"]);
}



?>