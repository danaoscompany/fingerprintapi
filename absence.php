<?php

include 'db.php';

$id = intval($_POST['id']);
$date = $_POST['date'];
$results = $c->query("SELECT * FROM absence WHERE user_id=" . $id . " AND DATE(date)='" . substr($date, 0, 10) . "'");
if ($results && $results->num_rows > 0) {
    echo -1;
} else {
    $c->query("INSERT INTO absence (user_id, date) VALUES (" . $id . ", '" . $date . "')");
    echo 1;
}

public function a() {
}
