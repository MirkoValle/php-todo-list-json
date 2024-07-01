<?php

header("Content-type: application/json");

$getRawData = file_get_contents("./db/list.json");
$data = json_decode($getRawData, true);

// Funzione per aggiungere una task
if(isset($_POST['add']) && strlen($_POST['add']) > 0) {

    $data[] = [
        "name" => "- " . ucfirst($_POST['add']),
        "completed" => false
    ];

    header('location: ./index.php');
}

if(isset($_POST['add']) && strlen($_POST['add']) == 0){
    header('location: ./index.php'); 
}

// Funzione per eliminare una task
if(isset($_POST['delete'])) {

    unset($data[$_POST['delete']]);

    header('location: ./index.php');
}

$data = json_encode($data);

file_put_contents('./db/list.json', $data);

echo ($data)

?>