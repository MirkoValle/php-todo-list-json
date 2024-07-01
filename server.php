<?php

header("Content-type: application/json");

$getRawData = file_get_contents("./db/list.json");
$data = json_decode($getRawData, true);

echo json_encode($data);

?>