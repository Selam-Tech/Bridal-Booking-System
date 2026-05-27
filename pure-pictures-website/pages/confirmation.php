<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $wedding_date = $_POST['wedding_date'];
    $appointment_date = $_POST['appointment_date'];
   $selected_location = $_POST['selected_location'];
$custom_location = $_POST['custom_location'];

if (!empty($custom_location)) {
    $location = $custom_location;
} else {
    $location = $selected_location;
}
    $package = $_POST['package'];

    $addons = "";
    if (isset($_POST['extras'])) {
        $addons = implode(", ", $_POST['extras']);
    }

    $sql = "INSERT INTO bookings 
    (full_name, phone, email, wedding_date, appointment_date, location, package_type, addons)
    VALUES 
    ('$name', '$phone', '$email', '$wedding_date', '$appointment_date', '$location', '$package', '$addons')";

    $conn->query($sql);
}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // 🔐 SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'selamawitmekbib96@gmail.com'; 
    $mail->Password = 'sktqmbxolrlcxcbo';   

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // 👤 SENDER
    $mail->setFrom('selamawitmekbib96@gmail.com', 'Pure Pictures');

    // 👥 RECEIVERS
    $mail->addAddress($email, $name); // customer
    $mail->addAddress('selamawitmekbib96@gmail.com'); // admin copy

    // 📧 CONTENT
    $mail->isHTML(true);
    $mail->Subject = 'Booking Confirmation - Pure Pictures';

    $mail->Body = "
        <h2 style='color:#c9a86a;'>Booking Confirmed 🎉</h2>

        <p>Dear <b>$name</b>,</p>

        <p>Your wedding booking has been successfully received.</p>

        <table style='border-collapse:collapse;'>
            <tr><td><b>Date:</b></td><td>$wedding_date</td></tr>
            <tr><td><b>Package:</b></td><td>$package</td></tr>
            <tr><td><b>Location:</b></td><td>$location</td></tr>
        </table>

        <br>
        <p>We will contact you soon.</p>

        <p style='color:#999;'>Pure Pictures & Bridal</p>
    ";

    $mail->send();

} catch (Exception $e) {
    echo "Email failed: {$mail->ErrorInfo}";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking Confirmation</title>

<link rel="stylesheet" href="/pure-pictures-website/styles/main.css">
<link rel="stylesheet" href="/pure-pictures-website/styles/booking.css">
</head>

<body>

<?php include '../components/header.html'; ?>

<section class="confirmation-page">

<h1>Booking Confirmed 🎉</h1>
<p class="subtitle">We received your request successfully</p>

<div class="confirmation-box">

<h3>Your Details</h3>

<p><strong>Name:</strong> <?php echo $_POST['full_name']; ?></p>
<p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
<p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>

<p><strong>Wedding Date:</strong> <?php echo$_POST['wedding_date']; ?></p>
<p><strong>Appointment Date:</strong> <?php echo $_POST['appointment_date']; ?></p>

<p><strong>Location:</strong> <?php echo $location; ?></p>

<p><strong>Based In:</strong> <?php echo $_POST['country']; ?></p>

<p><strong>Package:</strong> <?php echo $_POST['package']; ?> - <?php echo $_POST['type']; ?></p>

<p><strong>Extras:</strong></p>
<ul>
<?php
if(!empty($_POST['extras'])){
    foreach($_POST['extras'] as $extra){
        echo "<li>$extra</li>";
    }
} else {
    echo "<li>No extras selected</li>";
}
?>
</ul>

<p><strong>Notes:</strong> <?php echo $_POST['notes']; ?></p>

</div>

<a href="booking.php" class="btn">Back</a>

</section>
<script src="/pure-pictures-website/scripts/main.js"></script>

<?php include '../components/footer.html'; ?>

</body>
</html>