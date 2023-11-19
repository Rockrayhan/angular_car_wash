<?php
include_once('database.php');
$postdata = file_get_contents("php://input");
$result =  json_decode($postdata);

if (isset($result->name) && isset($result->email) && isset($result->message) && isset($result->subject)  ) {

    $name =  $result->name;
    $email =  $result->email;
    $subject =  $result->subject;
    $message =  $result->message;


    $db->query("INSERT INTO tblenquiry VALUES(NULL, '$name' , '$email', '$subject', '$message', now(), '')");


    if ($db->affected_rows > 0) {
        echo json_encode(['msg' => "Successfully Inserted"]);
    }
} else {
    echo json_encode(['msg' => "No fields can be blank"]);
}



?>