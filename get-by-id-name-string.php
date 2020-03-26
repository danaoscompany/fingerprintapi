<?php

include 'db.php';

$name = $_POST['name'];
$idName = $_POST['id_name'];
$id = $_POST['id'];
$results = $c->query("SELECT * FROM " . $name . " WHERE " . $idName . "='" . $id . "'");
$values = [];
if ($results && $results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        array_push($values, $row);
    }
}
echo json_encode($values);