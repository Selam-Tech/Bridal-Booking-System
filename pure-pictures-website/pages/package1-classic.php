<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package 1 Classic</title>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../styles/main.css">

    <!-- PACKAGE CSS -->
    <link rel="stylesheet" href="../styles/packages.css">
</head>

<body>

<?php include '../components/header.html'; ?>
<div class="menu-overlay" id="menu-overlay"></div>

<section class="package-detail">

    <h1>Package 1 - Classic</h1>

    <!-- BACK BUTTON -->
    <a href="packages.php" class="back-btn">← Back to Packages</a>

    <!-- PRICE -->
    <h2 class="price">80,000 Birr</h2>

    <!-- DRESSES -->
    <h3>Wedding Dresses</h3>

    <div class="video-grid">

        <div class="video-box">
            <p>Dress 1</p>
            <video src="../assets/videos/wedd5.mp4" controls poster="../assets/images/im5.jpg"></video>
        </div>

        <div class="video-box">
            <p>Dress 2</p>
            <video src="../assets/videos/wedd6.mp4" controls poster="../assets/images/im6.jpg"></video>
        </div>

    </div>

    <!-- SUITS -->
    <h3>Suits</h3>

    <div class="video-grid">

        <div class="video-box fade-in" >
            <p>Suit 1</p>
            <video src="../assets/videos/wedd7.mp4" controls poster="../assets/images/im8.jpg"></video>
        </div>

        <div class="video-box">
            <p>Suit 2</p>
            <video src="../assets/videos/wedd8.mp4" controls poster="../assets/images/im7.jpg"></video>
        </div>

    </div>

    <!-- FEATURES -->
    <h3>What’s Included</h3>

    <ul class="features">
        <li>1 Album (13x19)</li>
        <li>1 Board (16x19)</li>
        <li>Full Makeup</li>
        <li>100 Thank You Cards</li>
        <li>Dinner Dress</li>
        <li>Slideshow</li>
        <li>All Soft Copy</li>
    </ul>

</section>

<?php include '../components/footer.html'; ?>
<script src="../scripts/main.js"></script>

</body>
</html>