<?php

include 'db.php';

$adminID = intval($_POST['admin_id']);
$name = $_POST['name'];
$address = $_POST['address'];
$birthplace = $_POST['birth_place'];
$birthday = $_POST['birthday'];
$faceToken = $_POST['face_token'];
move_uploaded_file($_FILES['file']['tmp_name'], 'pictures/' . $_FILES['file']['name']);
$c->query("INSERT INTO karyawan (admin_id, name, address, birth_place, birthday, photo, face_token) VALUES (" . $adminID . ", '" . $name . "', '" . $address . "', '" . $birthplace . "', '" . $birthday . "', 'pictures/" . $_FILES['file']['name'] . "', '" . $faceToken . "')");
$id = mysqli_insert_id($c);
echo json_encode($c->query("SELECT * FROM karyawan WHERE id=" . $id)->fetch_assoc());
