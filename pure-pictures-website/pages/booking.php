<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Your Wedding</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="/pure-pictures-website/styles/main.css">
<link rel="stylesheet" href="/pure-pictures-website/styles/booking.css">

</head>

<body>

<?php include '../components/header.html'; ?>

<section class="booking-page">

<h1>Book Your Wedding</h1>
<p class="subtitle">Reserve your special day with us</p>

<form class="booking-form" action="confirmation.php" method="POST">

<!-- CLIENT INFO -->
<h3>Client Information</h3>

<input type="text" name="full_name" placeholder="full_name" required>
<input type="text" name="phone" placeholder="phone required">
<input type="email" name="email" placeholder="email">

<!-- EVENT DETAILS -->
<h3>Event Details</h3>

<label>Wedding Date</label>

<input type="text" id="wedding_date" name="wedding_date" placeholder="Select wedding date" required>
<small id="date-status"></small>

<label>Appointment Date</label>
<input type="date" name="appointment_date">

<label>Wedding Location / Hotel</label>

<select name="selected_location">
    <option value="">Select Popular Location</option>
    <option>Sheraton Addis</option>
    <option>Hilton Addis</option>
    <option>Skylight Hotel</option>
    <option>Kuriftu Resort</option>
    <option>Wenchi Eco Lodge</option>
</select>

<input type="text" name="custom_location" placeholder="Or type your location">

<select name="country">
    <option value="">Where are you based?</option>
    <option>Ethiopia</option>
    <option>Outside Ethiopia</option>
</select>

<!-- PACKAGE -->
<h3>Select Package</h3>

<select name="package">
    <option>Package 1</option>
    <option>Package 2</option>
    <option>Package 3</option>
</select>

<select name="type">
    <option>Classic</option>
    <option>Premium</option>
</select>

<!-- ADD-ONS -->
<h3>Optional Add-ons</h3>

<label><input type="checkbox" name="extras[]" value="Birthday Shoot"> Pre-wedding Shoot</label>
<label><input type="checkbox" name="extras[]" value="Traditional Shoot"> Traditional Shoot</label>
<label><input type="checkbox" name="extras[]" value="Extra Album"> Extra Album</label>
<label><input type="checkbox" name="extras[]" value="Drone Shot"> Drone Shot</label>
<label><input type="checkbox" name="extras[]" value="Extra Makeup"> Extra Makeup</label>

<!-- NOTES -->
<h3>Additional Notes</h3>
<textarea name="notes" placeholder="Anything else?"></textarea>

<button type="submit" class="btn">Submit Booking</button>

</form>

</section>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="/pure-pictures-website/scripts/main.js"></script>
<?php include '../components/footer.html'; ?>

</body>
</html>