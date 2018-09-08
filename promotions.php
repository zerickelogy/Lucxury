<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lucxury – Promotions</title>
        <meta name="description" content="Welcome to Lucxury.">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/modal.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/aos.css">
        <!-- javascript -->
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

            <div class="container promotions-container container-header">
                <h2>Promotions</h2>

                <div class="promotion-card-container">
                    <div class="promo-card"  id="modal-1">
                        <div class="promo-img">
                            <img src="img/merchant-card1.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div>

                    <div class="promo-card"  id="modal-2">
                        <div class="promo-img">
                            <img src="img/merchant-card2.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div>

                    <div class="promo-card"  id="modal-3">
                        <div class="promo-img">
                            <img src="img/merchant-card3.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div>

                    <div class="promo-card"  id="modal-4">
                        <div class="promo-img">
                            <img src="img/merchant-card4.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div>

                    <div class="promo-card"  id="modal-5">
                        <div class="promo-img">
                            <img src="img/merchant-card5.png">
                        </div>
                        <div class="promo-des">
                            <h3>$100 OFF MIN $5,000 SPENT</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div>

                    <!-- <div class="promo-card"  id="modal-6">
                        <div class="promo-img">
                            <img src="img/merchant-card6.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div> -->

                    <div class="promo-card"  id="modal-7">
                        <div class="promo-img">
                            <img src="img/merchant-card7.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for QR Code</h4>
                        </div>
                    </div>

                    <div class="promo-card"  id="modal-8">
                        <div class="promo-img">
                            <img src="img/merchant-card8.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for Promo Code</h4>
                        </div>
                    </div>

                    <div class="promo-card"  id="modal-9">
                        <div class="promo-img">
                            <img src="img/merchant-card9.png">
                        </div>
                        <div class="promo-des">
                            <h3>5% off</h3>
                            <h4>Click for Promo Code</h4>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>

            <!-- Modal content boxes starts below -->

            <div id="modal1" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close1">&times;</span>

                        <h3>H2Hub watches</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/h2hub-qrcode.png">
                            <h4>Promo Code: <u>LUCXURY</u></h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end of modal box 1  -->

            <div id="modal2" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close2">&times;</span>

                        <h3>51Label</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/51label-qrcode.png">
                            <h4>Promo Code: <u>LUCXURY</u></h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end of modal box 2  -->

            <div id="modal3" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close3">&times;</span>

                        <h3>5% off The Bespoke Club</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/tbc-qrcode.png">
                            <h4>Promo Code: <u>LUCXURY</u></h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of modal box 3  -->

            <div id="modal4" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close4">&times;</span>

                        <h3>Dorcas Stitch</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/ds-qrcode.png">
                            <!-- <h4>Promo Code: <u>ds-5</u></h4> -->
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of modal box 4  -->

            <div id="modal5" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close5">&times;</span>

                        <h3>Foundation Jewellers</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/QR_Code_fj.png">
                            <h4>$100 OFF MIN $5,000 SPENT</h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of modal box 5  -->

            <div id="modal6" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close6">&times;</span>

                        <h3>Heritage Gems</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/hg-qrcode.png">
                            <!--<h4>Promo Code: <u>#</u></h4>-->
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end of modal box 6  -->

            <div id="modal7" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close7">&times;</span>

                        <h3>Mr. G</h3>
                        <h4>Scan the QR Code below:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <img src="img/qr/mrg-qrcode.png">
                            <h4>Promo Code: <u>LUCXURY</u></h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of modal box 7  -->

            <div id="modal8" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close8">&times;</span>
                        <div class="modal-logo-image">
                            <img src="img/h2-hub-logo.png">
                        </div>

                        <h3>Faire Leather Co.</h3><br><br>
                        <!--<h4>Scan the QR Code below:</h4>-->
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <!--<img src="img/qr/faire-qrcode.png">-->
                            <h4>Promo Code: <u>LUCXURY</u></h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of modal box 8  -->

            <div id="modal9" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close9">&times;</span>
                        <div class="modal-logo-image">
                            <img src="img/h2-hub-logo.png">
                        </div>

                        <h3>Tocco Toscano</h3><br><br>
                        <!--<h4>Scan the QR Code below:</h4>-->
                    </div>
                    <div class="modal-body">
                        <div class="QR-container">
                            <!--<img src="img/qr/tt-qrcode.png">-->
                            <h4>Promo Code: <u>LUCXURY</u></h4>
                            <div class="promotion-terms">
                                <p>*<a href="https://lucxury.com/lucxury_wp/2018/05/22/terms-and-conditions-of-lucxury-promotional-code-and-qr-code/">Terms & Conditions</a> apply.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of modal box 9  -->


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

        <script>
            // Get the modal
            var modal1 = document.getElementById("modal1");
            var modal2 = document.getElementById("modal2");
            var modal3 = document.getElementById("modal3");
            var modal4 = document.getElementById("modal4");
            var modal5 = document.getElementById("modal5");
            // var modal6 = document.getElementById("modal6");
            var modal7 = document.getElementById("modal7");
            var modal8 = document.getElementById("modal8");
            var modal9 = document.getElementById("modal9");

            // Get the button that opens the modal
            var btn1 = document.getElementById("modal-1");
            var btn2 = document.getElementById("modal-2");
            var btn3 = document.getElementById("modal-3");
            var btn4 = document.getElementById("modal-4");
            var btn5 = document.getElementById("modal-5");
            // var btn6 = document.getElementById("modal-6");
            var btn7 = document.getElementById("modal-7");
            var btn8 = document.getElementById("modal-8");
            var btn9 = document.getElementById("modal-9");

            // Get the <span> element that closes the modal
            var span1 = document.getElementById("close1");
            var span2 = document.getElementById("close2");
            var span3 = document.getElementById("close3");
            var span4 = document.getElementById("close4");
            var span5 = document.getElementById("close5");
            // var span6 = document.getElementById("close6");
            var span7 = document.getElementById("close7");
            var span8 = document.getElementById("close8");
            var span9 = document.getElementById("close9");

            // When the user clicks on the button, open the modal 
            btn1.onclick = function () {
                modal1.style.display = "block";
            }
            btn2.onclick = function () {
                modal2.style.display = "block";
            }
            btn3.onclick = function () {
                modal3.style.display = "block";
            }
            btn4.onclick = function () {
                modal4.style.display = "block";
            }
            btn5.onclick = function () {
                modal5.style.display = "block";
            }
            // btn6.onclick = function () {
            //     modal6.style.display = "block";
            // }
            btn7.onclick = function () {
                modal7.style.display = "block";
            }
            btn8.onclick = function () {
                modal8.style.display = "block";
            }
            btn9.onclick = function () {
                modal9.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span1.onclick = function () {
                modal1.style.display = "none";
            }

            span2.onclick = function () {
                modal2.style.display = "none";
            }
            span4.onclick = function () {
                modal4.style.display = "none";
            }
            span3.onclick = function () {
                modal3.style.display = "none";
            }
            span5.onclick = function () {
                modal5.style.display = "none";
            }
            // span6.onclick = function () {
            //     modal6.style.display = "none";
            // }
            span7.onclick = function () {
                modal7.style.display = "none";
            }
            span8.onclick = function () {
                modal8.style.display = "none";
            }
            span9.onclick = function () {
                modal9.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
                if (event.target == modal3) {
                    modal3.style.display = "none";
                }
                if (event.target == modal4) {
                    modal4.style.display = "none";
                }
                if (event.target == modal5) {
                    modal5.style.display = "none";
                }
                // if (event.target == modal6) {
                //     modal6.style.display = "none";
                // }
                if (event.target == modal7) {
                    modal7.style.display = "none";
                }
                if (event.target == modal8) {
                    modal8.style.display = "none";
                }
                if (event.target == modal9) {
                    modal9.style.display = "none";
                }
            }
        </script>

        <script src="js/aos.js"></script>

        <script>
            AOS.init();
        </script>
    </body>
</html>
