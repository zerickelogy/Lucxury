<?php session_start(); ?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucxury</title>
    <meta name="description" content="Welcome to Lucxury.">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-scrollto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</head>

<body>

    <!-- start of navigation bar  -->

<!--     <div class="hamburger-menu nav-left visible-xs">
        <div class="button" id="btn">
            <div class="top bar"></div>
            <div class="middle bar"></div>
            <div class="bottom bar"></div>
        </div>
    </div> -->

    <!-- only put content into main tag -->

    <main>
        <?php include 'white-menubar.php'; ?>

        <div class="container" id="main-header">
            <div class="owl-carousel owl-theme">
                <div class="item-carousel item">
                    <div class="carousel-des">
                        <h2>Dorcas Stitch</h2>
                        <h4>Bespoke Menswear</h4>
                        <button class="block-btn carousel-btn"><a href="#">shop now <i class="fas fa-chevron-right"></i></a></button>
                    </div>
                    <img src="img/image1.png">
                </div>
                <div class="item-carousel item">
                    <div class="carousel-des">  <!-- carousel-des-black -->
                        <h2>H2 Hub</h2>
                        <h4>Classic Timepieces</h4>
                        <button class="block-btn carousel-btn"><a href="#">shop now <i class="fas fa-chevron-right"></i></a></button> <!-- carousel-btn-black -->
                    </div>

                    <img src="img/image2.png">
                </div>
                <div class="item-carousel item">
                    <div class="carousel-des">
                        <h2>51Label</h2>
                        <h4>Effortless Luxury</h4>
                        <button class="block-btn carousel-btn"><a href="#">shop now <i class="fas fa-chevron-right"></i></a></button>
                    </div>
                    <img src="img/image3.png">
                </div>
            </div>
        </div>

        <div class="container three-cards-container">
            <div class="card-holder">
                <div class="card c1" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <div class="card-img"><img src="img/card-watch.png"></div>
                        <div class="card-des">Watches</div>
                    </a>
                </div>
                <div class="card c2" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <div class="card-img"><img src="img/card-shoes.png"></div>
                        <div class="card-des">Shoes</div>
                    </a>
                </div>
                <div class="card c3" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <div class="card-img"><img src="img/card-bags.png"></div>
                        <div class="card-des">Bags</div>
                    </a>
                </div>
            </div>
            <div class="btn-container">
                <button class="line-btn card-btn"><a href="categories.html">browse <i class="fas fa-chevron-right"></i></a></button>
            </div>
        </div>

        <div class="container email-newsletter">
            <h3>New to us?</h3>
            <h4>Join our community.</h4>
            <form action="https://lucxury.us12.list-manage.com/subscribe/post?u=5e744d54c978e566fa533d954&amp;id=ceb70c82f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> 

                <input type="text" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email"><br>

                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5e744d54c978e566fa533d954_ceb70c82f3" tabindex="-1" value=""></div>

                <div class="before-submitting-newsletter">
                    <p>*By clicking on the subscribe button you agree to our <a href="terms-condition.php">Terms of Use</a> & <a href="privacy-policy.php">Privacy Policy</a></p>
                </div>

                <div class="btn-container email-btn">
                    <button class="line-btn card-btn" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">subscribe <i class="fas fa-chevron-right"></i></button>
                </div>
            </form>


        </div>
        
        
        <div class="footer-item my-account">
            <h5>My Account</h5>
            <div class="footer-subitem">
                <a href="edit-profile.html">Edit Your Details</a><br/>
                <a href="#">Forget Password</a><br/>
            </div>
        </div>
        <div class="footer-item lucxury">
            <h5>Lucxury</h5>
            <div class="footer-subitem">
                <a href="#">Terms of Use</a><br/>
                <a href="#">Privacy Policy</a><br/>
                <a href="#">Contact Us</a><br/>
            </div>
        </div>
        <div class="footer-item find-us">
            <h5>Find Us</h5>
            <div class="footer-subitem">
                <a href="https://www.facebook.com/lucxuryglobal" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/lucxuryglobal/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/lucxuryglobal" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCeGiwGkYZ9p8kxj8YwN4fIw?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>


        <div class="container footer-credits">
            <p id="credits-left">© 2018 Lucxury</p>
            <p id="credits-right">All Rights Reserved.</p>
        </div>


    </main>

    <!-- end of main tag = end of content  -->

    <?php include 'blue-section.php'; ?>

    <script>
        $(document).ready(function () {
console.log('<?php echo $_SESSION['user_id']; ?>')
            function toggleSidebar() {
                $(".button").toggleClass("active");
                $("main").toggleClass("move-to-right");
                $(".sidebar-item").toggleClass("active");
            }

            $(".button").on("click tap", function () {
                toggleSidebar();
            });

            $(document).keyup(function (e) {
                if (e.keyCode === 27) {
                    toggleSidebar();
                }
            });

            $(".owl-carousel").owlCarousel({
                margin: 0,
                center: true,
                autoWidth: true,
                // autoHeight: true,
                item: 1,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                loop: true,
                dots: true
                        // dotsContainer: true,
                        // nav: true

            })
        });
    </script>
    <script>
        function openSearch() {
            $("#myOverlay").fadeIn(500).css("display", "block");
        }

        // Close the full screen search box 
        function closeSearch() {
            $("#myOverlay").fadeOut(500);
        }
    </script>

    <script src="js/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>
</html>
