<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>

   

    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/packages.css">
</head>

<body>

<?php include '../components/header.html'; ?>

<section class="packages-page">

    <h1>Wedding Packages</h1>

    <!-- PACKAGE 1 -->
    <div class="package-box">

        <h2>Package 1</h2>

        <!-- TOGGLE -->
         <div class="package-actions">
        
           <a href="package1-classic.php" class="btn"> View Classic</a>
           <a href="package1-premium.php" class="btn"> View Premium</a>
        </div>
       

        <!-- VIDEO -->
         
        <video id="video1" controls poster="../assets/images/im1.jpg">
            <source src="../assets/videos/p1-classic.mp4" type="video/mp4">
        </video>
        
         
        <!-- FEATURES -->
        <ul id="features1">
            <li>2 Wedding Dresses</li>
            <li>2 Suits</li>
            <li>1 Album (13x19)</li>
            <li>1 Board (16x19)</li>
            <li>Full Makeup</li>
            <li>100 Thank You Cards</li>
            <li>Slideshow</li>
            <li>All Soft Copy</li>
        </ul>

        <!-- PRICE -->
        <h3 id="price1">80,000 Birr</h3>

    </div>


    <!-- PACKAGE 2 -->
    <div class="package-box">

        <h2>Package 2</h2>

        <div class="package-actions">
    <a href="package2-classic.php" class="btn"> View Classic</a>
    <a href="package2-premium.php" class="btn"> View Premium</a>
</div>

        <video id="video2" controls poster="../assets/images/im4.jpg">
            <source src="../assets/videos/wedd4.MP4" type="video/mp4">
        </video>

        <ul id="features2">
            <li>3 Wedding Dresses</li>
            <li>3 Suits</li>
            <li>2 Albums</li>
            <li>2 Boards</li>
            <li>Full Makeup</li>
            <li>130 Thank You Cards</li>
            <li>Slideshow</li>
            <li>Memory Video</li>
        </ul>

        <h3 id="price2">120,000 Birr</h3>

    </div>


    <!-- PACKAGE 3 -->
    <div class="package-box">

        <h2>Package 3</h2>

        <div class="package-actions">
    <a href="package3-classic.php" class="btn">  View Classic</a>
    <a href="package3-premium.php" class="btn">  View Premium</a>
</div>

        <video id="video3" controls poster="../assets/images/im3.jpg">
            <source src="../assets/videos/p3-classic.mp4" type="video/mp4">
        </video>

        <ul id="features3">
            <li>3 Luxury Dresses</li>
            <li>3 Luxury Suits</li>
            <li>3 Albums</li>
            <li>3 Boards</li>
            <li>Full Makeup</li>
            <li>Bouquet</li>
            <li>Wedding Umbrella</li>
            <li>Traditional Clothes</li>
        </ul>

        <h3 id="price3">200,000 Birr</h3>

    </div>

</section>


<script src="../scripts/main.js"></script>
<script src="../scripts/packages.js"></script>

<?php include '../components/footer.html'; ?>
</body>
</html>