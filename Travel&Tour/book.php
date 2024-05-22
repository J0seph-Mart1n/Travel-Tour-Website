<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
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

    <div class="heading-title">
        <h1>Booking</h1>
    </div>

    <!-- booking section -->
    <section class="booking">
        <form action="book_form.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name: </span>
                    <input type="text" placeholder="Full Name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email: </span>
                    <input type="email" placeholder="abc@email.com" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone: </span>
                    <input type="number" placeholder="Phone No." name="phone">
                </div>
                <div class="inputBox">
                    <span>Address: </span>
                    <input type="text" placeholder="Enter your email" name="address">
                </div>
                <div class="inputBox">
                    <span>Where to go: </span>
                    <input type="text" placeholder="From" name="location">
                </div>
                <div class="inputBox">
                    <span>How many Members: </span>
                    <input type="number" placeholder="No of Members" name="members">
                </div>
                <div class="inputBox">
                    <span>Arrivals: </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving: </span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="Submit" class="btn" name="send"> 
        </form>
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