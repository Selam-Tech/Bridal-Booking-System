<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Pictures & Bridal</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/pure-pictures-website/styles/main.css">
</head>


<body>
    <?php include 'components/header.html'; ?>
    <div class="menu-overlay" id="menu-overlay"></div>

    
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="overlay"></div>

        <div class="hero-content">
            <h1>Capture Your Perfect Wedding Story</h1>
            <p>Luxury Wedding Photography & Bridal Services</p>

            <div class="hero-buttons">
                <a href="pages/packages.php" class="btn">View Packages</a>
                <a href="pages/booking.html" class="btn-outline">Book Now</a>
            </div>
        </div>
    </section>


    <!-- PACKAGES PREVIEW -->
    <section class="packages fade-in">
        <h2>Our Wedding Packages</h2>

        <div class="package-cards">
            <div class="card">
                <h3>Basic</h3>
                <p>Starting from 18,000 birr</p>
                <a href="pages/packages.php" class="btn">View Details</a>
            </div>

            <div class="card">
                <h3>Standard</h3>
                <p>Premium wedding experience</p>
                <a href="pages/packages.php" class="btn">View Details</a>
            </div>

            <div class="card">
                <h3>Luxury</h3>
                <p>Full luxury wedding service</p>
                <a href="pages/packages.php" class="btn">View Details</a>
            </div>
        </div>
    </section>


    <!-- TESTIMONIALS -->
    <section class="testimonials fade-in">
        <h2>Real Wedding Stories</h2>

        <div class="videos">
            <video src="assets/videos/wedd1.mp4" controls
            poster="assets/images/im1.jpg"
            controls 
            preload="metadata"></video>
            <video src="assets/videos/wedd2.mp4" controls
            poster="assets/images/im2.jpg"
            controls 
            preload="metadata"></video>
            <video src="assets/videos/wedd3.mp4" controls
            poster="assets/images/im3.jpg"
           controls 
           preload="metadata"></video>
        </div>
    </section>


    <!-- CTA -->
    <section class="cta">
        <h2>Ready to plan your wedding?</h2>
        <a href="pages/booking.html" class="btn">Book Your Date</a>
    </section>

   

    <script src="/pure-pictures-website/scripts/main.js"></script>

<?php include 'components/footer.html'; ?>
</body>
</html>