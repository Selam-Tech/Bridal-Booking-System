<?php
include '../config/db.php';

if (isset($_GET['date'])) {

    $date = $_GET['date'];

    $sql = "SELECT * FROM bookings WHERE wedding_date = '$date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "booked";
    } else {
        echo "available";
    }
}
?>