<?php
include_once('database.php');
$postdata = file_get_contents("php://input");
$result =  json_decode($postdata);

if (isset($result->name) && isset($result->email) && isset($result->message)) {

    $name =  $result->name;
    $email =  $result->email;
    $message =  $result->message;

    $db->query("INSERT INTO contact VALUES(NULL, '$name' , '$email', '$message')");

    if ($db->affected_rows > 0) {
        echo json_encode(['msg' => "Successfully Inserted"]);
    }
} else {
    echo json_encode(['msg' => "No fields can be blank"]);
}



?>