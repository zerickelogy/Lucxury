<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lucxury – Categories</title>
        <meta name="description" content="Welcome to Lucxury.">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/aos.css">
        <!-- javascripts -->
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

            <div class="container categories-container container-header">
                <h2>Categories</h2>
                <div class="cat-cards">
                    <div class="card-holder">
                        <div class="card c1" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" onclick="clothings2.submit();">
                                <form name="clothings2" method="post" action="products.php">
                                    <input type="hidden" name="categories" value="CLOTHINGS">
                                    <div class="card-img"><img src="img/card-clothings.png"></div>
                                    <div class="card-des">Clothings</div>
                                </form>
                            </a>
                        </div>
                        <div class="card c2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" onclick="shoes2.submit();">
                                <form name="shoes2" method="post" action="products.php">
                                    <input type="hidden" name="categories" value="SHOES">
                                    <div class="card-img"><img src="img/card-shoes.png"></div>
                                    <div class="card-des">Shoes</div></form>
                            </a>
                        </div>
                        <div class="card c3" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" onclick="bags2.submit();">
                                <form name="bags2" method="post" action="products.php">
                                    <input type="hidden" name="categories" value="BAGS">
                                    <div class="card-img"><img src="img/card-bags.png"></div>
                                    <div class="card-des">Bags</div></form>
                            </a>
                        </div>
                        <div class="card c4" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" onclick="watches2.submit();">
                                <form name="watches2" method="post" action="products.php">
                                    <input type="hidden" name="categories" value="WATCHES">
                                    <div class="card-img"><img src="img/card-watch.png"></div>
                                    <div class="card-des">Watches</div></form>
                            </a>
                        </div>
                        <div class="card c5" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" onclick="accessories2.submit();">
                                <form name="accessories2" method="post" action="products.php">
                                    <input type="hidden" name="categories" value="ACCESSORIES">
                                    <div class="card-img"><img src="img/card-accessories.png"></div>
                                    <div class="card-des">Accessories</div></form>
                            </a>
                        </div>
                        <div class="card c6" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" onclick="small_l_goods2.submit();">
                                <form name="small_l_goods2" method="post" action="products.php">
                                    <input type="hidden" name="categories" value="SMALL LEATHER GOODS">
                                    <div class="card-img"><img src="img/card-leather.png"></div>
                                    <div class="card-des">Small Leather Goods</div>
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>

        </main>

        <!-- end of main tag = end of content  -->

        <?php include 'blue-section.php'; ?>

        <!-- javascripts  -->
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
