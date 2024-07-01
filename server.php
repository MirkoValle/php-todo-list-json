<?php

header("Content-type: application/json");

$getRawData = file_get_contents("./db/list.json");
$data = json_decode($getRawData, true);

if(isset($_POST['add']) && strlen($_POST['add']) > 0) {

    $data[] = [
        "name" => $_POST['add'],
        "completed" => false
    ];

    header('location: ./index.php');
}
$jsondata = json_encode($data);

file_put_contents('./db/list.json', $jsondata);

echo ($jsondata)
?>