<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package 2 Premium</title>
    <span class="premium-badge">Premium Collection</span>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../styles/main.css">

    <!-- PACKAGE CSS -->
    <link rel="stylesheet" href="../styles/packages.css">
</head>

<body>

<?php include '../components/header.html'; ?>
<div class="menu-overlay" id="menu-overlay"></div>

<section class="package-detail premium">

    <h1>Package 2 - Premium</h1>
    <!-- BACK BUTTON -->
    <a href="packages.php" class="back-btn">← Back to Packages</a>

    <!-- PRICE -->
   <h2 class="price">120,000 Birr</h2>

    <!-- DRESSES -->
    <h3>Wedding Dresses</h3>

    <div class="video-grid">

    <div class="video-box fade-in">
        <video src="../assets/videos/p2p-dress1.mp4" controls poster="../assets/images/p2p1.jpg"></video>
        <p>Premium Dress 1</p>
    </div>

    <div class="video-box fade-in">
        <video src="../assets/videos/p2p-dress2.mp4" controls poster="../assets/images/p2p2.jpg"></video>
        <p>Premium Dress 2</p>
    </div>

    <div class="video-box fade-in">
        <video src="../assets/videos/p2p-dress3.mp4" controls poster="../assets/images/p2p3.jpg"></video>
        <p>Premium Dress 3</p>
    </div>
    </div>

    <!-- SUITS -->
    <h3>Suits</h3>

    <div class="video-grid">

        <div class="video-box fade-in">
        <video src="../assets/videos/p2p-suit1.mp4" controls poster="../assets/images/p2p4.jpg"></video>
        <p>Premium Suit 1</p>
    </div>

    <div class="video-box fade-in">
        <video src="../assets/videos/p2p-suit2.mp4" controls poster="../assets/images/p2p5.jpg"></video>
        <p>Premium Suit 2</p>
    </div>

    <div class="video-box fade-in">
        <video src="../assets/videos/p2p-suit3.mp4" controls poster="../assets/images/p2p6.jpg"></video>
        <p>Premium Suit 3</p>
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