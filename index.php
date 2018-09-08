<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lucxury – Home</title>
        <meta name="description" content="Welcome to Lucxury.">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/aos.css">
        <!-- javascript  -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-scrollto.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!-- favicon -->
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <main>
            <?php include 'white-menubar.php'; ?>

            <div class="container" id="main-header">
                <div id="banner_container" class="owl-carousel owl-theme">
                    <div class="item-carousel item">
                        <div class="carousel-des">
                            <h2>Dorcas Stitch</h2>
                            <!--<h4>#1</h4>-->
                            <form method="post" action="products.php">
                                <input type="hidden" name="merchant" value="DORCAS STITCH">
                                <button class="block-btn carousel-btn">shop now <i class="fas fa-chevron-right"></i></button>
                            </form>
                        </div>
                        <img src="img/image1.png">
                    </div>

                    <div class="item-carousel item">
                        <div class="carousel-des">  <!-- "carousel-des-black" for black heading -->
                            <h2>H2 Hub</h2>
                            <!--<h4>#2</h4>-->
                            <form method="post" action="products.php">
                                <input type="hidden" name="merchant" value="H2 HUB">
                                <button class="block-btn carousel-btn">shop now <i class="fas fa-chevron-right"></i></button> <!-- "carousel-btn-black" for black btn -->
                            </form>
                        </div>

                        <img src="img/image2.png">
                    </div>

                    <div class="item-carousel item">
                        <div class="carousel-des">
                            <h2>51Label</h2>
                            <!--<h4>#3</h4>-->
                            <form method="post" action="products.php">
                                <input type="hidden" name="merchant" value="51 LABEL">
                                <button class="block-btn carousel-btn">shop now <i class="fas fa-chevron-right"></i></button>
                            </form>
                        </div>
                        <img src="img/image3.png">
                    </div>

                    <div class="item-carousel item">
                        <div class="carousel-sm">
                            <h2>Welcome to</h2>
                            <div class="luc-logo"></div>
                            <h4>Discover the world of coveted brands and contemporary labels on Lucxury,<br>your modern guide and one-stop premier destination for Singapore luxury labels.</h4>
                            <form method="post" action="products.php">                                
                                <button class="block-btn carousel-btn">shop now <i class="fas fa-chevron-right"></i></button>
                            </form>
                        </div>
                        <img src="img/luc_banner1.png">
                    </div>
                    
                      <div class="item-carousel item">
                        <div class="carousel-des">
                            <h2>Check out our exclusive promotional tie-up deals with Singapore luxury labels</h2>
                            <!--<h4>#</h4>-->
                            <form method="post" action="products.php">
                                <button class="block-btn carousel-btn">shop now <i class="fas fa-chevron-right"></i></button>
                            </form>
                        </div>
                        <img src="img/luc_banner2.png">
                    </div>
                    
                    <!--<div class="item-carousel item">
                        <div class="carousel-des">
                            <h2>Test</h2>
                            <!--<h4>#6</h4>
                            <form method="post" action="products.php">
                                <button class="block-btn carousel-btn"><a href="https://www.lucxury.com/Website2/products.php">shop now <i class="fas fa-chevron-right"></i></a></button>
                            </form>
                        </div>
                        <img src="img/image3.png">
                    </div>-->
                    

                </div>
            </div>

            <div class="container three-cards-container">
                <div class="card-holder">
                    <div class="card c1" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" onclick="watches1.submit();">
                            <form name="watches1" method="post" action="products.php">
                                <input type="hidden" name="categories" value="WATCHES">
                                <div class="card-img"><img src="img/card-watch.png"></div>
                                <div class="card-des">Watches</div>
                            </form>
                        </a>
                    </div>
                    <div class="card c2" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" onclick="shoes1.submit();">
                            <form name="shoes1" method="post" action="products.php">
                                <input type="hidden" name="categories" value="SHOES">
                                <div class="card-img"><img src="img/card-shoes.png"></div>
                                <div class="card-des">Shoes</div>
                            </form>
                        </a>
                    </div>
                    <div class="card c3" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" onclick="bags1.submit();">
                            <form name="bags1" method="post" action="products.php">
                                <input type="hidden" name="categories" value="BAGS">
                                <div class="card-img"><img src="img/card-bags.png"></div>
                                <div class="card-des">Bags</div>
                            </form>
                        </a>
                    </div>
                </div>
                <div class="btn-container">
                    <a target="_blank" href="./categories.php"><button class="line-btn card-btn">browse <i class="fas fa-chevron-right"></i></button></a>
                </div>
            </div>

            <div class="container merchants-container">
                <div class="merchant-box pedro long-left"></div>
                <div class="merchant-box calvin-klein square-top"></div>
                <div class="merchant-box ralph-lauren rectangle-top"></div>
                <div class="merchant-box tommy-hilfiger rectange-bottom"></div>
                <div class="merchant-box more-merchant-btn"><a target="_blank" href="promotions.php">more merchants<i class="fas fa-chevron-right"></i></a></div>
            </div>

            <!--<div class="container email-newsletter">
                <h3>New to us?</h3>
                <h4>Join our community.</h4>
                <form action="https://lucxury.us12.list-manage.com/subscribe/post?u=5e744d54c978e566fa533d954&amp;id=ceb70c82f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> 

                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email"><br>

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>-->
                    <!--</div>-->    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <!--<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5e744d54c978e566fa533d954_ceb70c82f3" tabindex="-1" value=""></div>

                    <div class="before-submitting-newsletter">
                        <p>*By clicking on the subscribe button you agree to our <a href="terms_of_use.php">Terms of Use</a> & <a href="privacy-policy.php">Privacy Policy</a></p>
                    </div>

                    <div class="btn-container email-btn">
                        <button class="line-btn card-btn" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">subscribe <i class="fas fa-chevron-right"></i></button>
                    </div>
                </form>


            </div>-->

            <?php include 'footer.php'; ?>

        </main>

        <!-- end of main tag = end of content  -->

        <?php include 'blue-section.php'; ?>

        <script>
            $(document).ready(function () {

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
                    item: 1,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    loop: true,
                    dots: true
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
