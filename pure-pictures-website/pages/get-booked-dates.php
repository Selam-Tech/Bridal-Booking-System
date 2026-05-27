<?php
include '../config/db.php';

$sql = "SELECT wedding_date FROM bookings";
$result = $conn->query($sql);

$dates = [];

while ($row = $result->fetch_assoc()) {
    $dates[] = $row['wedding_date'];
}

echo json_encode($dates);
?>