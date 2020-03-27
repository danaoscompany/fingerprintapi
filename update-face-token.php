<?php

include 'db.php';

$userID = intval($_POST['user_id']);
$faceToken = $_POST['face_token'];
$c->query("UPDATE karyawan SET face_token='" . $faceToken . "' WHERE id=" . $userID);
