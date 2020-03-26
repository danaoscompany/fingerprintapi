<?php

include 'db.php';

$name = $_POST['name'];
$address = $_POST['address'];
$birthplace = $_POST['birth_place'];
$birthday = $_POST['birthday'];
move_uploaded_file($_FILES['file']['tmp_name'], 'pictures/' . $_FILES['file']['name']);
$c->query("INSERT INTO karyawan (name, address, birth_place, birthday, photo) VALUES ('" . $name . "', '" . $address . "', '" . $birthplace . "', '" . $birthday . "', 'pictures/" . $_FILES['file']['name'] . "')");
$id = mysqli_insert_id($c);
echo json_encode($c->query("SELECT * FROM karyawan WHERE id=" . $id)->fetch_assoc());
