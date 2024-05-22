<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
    <!-- header section -->
    <section class="header">
        <a href="home.php" class="logo">Wanderlust World</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- home section -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(img/slide-1.jpg) no-repeat">
                    <div class="content">
                        <h4>Explore, Discover & Travel</h4>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(img/slide-2.jpg) no-repeat">
                    <div class="content">
                        <h4>Explore, Discover & Travel</h4>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(img/slide-3.jpg) no-repeat">
                    <div class="content">
                        <h4>Explore, Discover & Travel</h4>
                        <h3>Make your trip worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- service section -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/adventure.png" alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="img/tourguide.png" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="img/trekking.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="img/campfire.png" alt="">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="img/offroad.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="img/camping.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>

    <!-- home about section -->
    <section class="home-about">
        <div class="image">
            <img src="img/slide-4.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Discover the world with our premier travel and tour agency, where every journey is crafted to exceed your expectations.
                 At Wanderlust World, we are passionate about curating unforgettable experiences of each destination. 
                 We are here to make your travel aspirations a reality. Welcome to a world of endless possibilities with Wanderlust World.</p>
        </div>
    </section>

    <!-- home packages section -->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img/slide-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mystical Treasures of Southeast Asia</h3>
                    <p>Visit the ancient temples of Angkor Wat in Cambodia, cruise through the limestone karsts of Halong Bay in Vietnam, and discover the bustling streets of Bangkok, Thailand.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/slide-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Classic European Adventure</h3>
                    <p>From the romantic canals of Venice to the majestic Eiffel Tower in Paris, this package includes iconic landmarks, charming cities, and cultural delights across the continent.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/slide-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Safari Expedition in Africa</h3>
                    <p>Witness the breathtaking wildlife of the Serengeti, marvel at the majestic Victoria Falls, and explore the vibrant cultures of Kenya and Tanzania on this unforgettable journey.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

        </div>
        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>

    <!-- home offer section -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Chance to get 50% off for packages thorough referral code</p>
            <a href="book.php" class="btn">Book Now</a>

        </div>
    </section>

    <!-- footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+9123332112</a>
                <a href="#"> <i class="fas fa-phone"></i>+9125331212</a>                
                <a href="#"> <i class="fas fa-envelope"></i>jmkl0987@gmail.com</a>                
                <a href="#"> <i class="fas fa-map"></i>Viman Nagar, Pune 411014</a>                
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fas fa-facebook-f"></i>Facebook</a>
                <a href="#"> <i class="fas fa-twitter"></i>Twitter</a>                
                <a href="#"> <i class="fas fa-instagram"></i>Instagram</a>                
                <a href="#"> <i class="fas fa-linkedin"></i>Linkedin</a>                
            </div>
        </div>
        <div class="credit">Wanderlust World</div>
    </section>

    


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>