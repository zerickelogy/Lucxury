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
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animate.css">


    <link rel="stylesheet" href="css/aos.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-scrollto.js"></script>
    <script src="js/owl.carousel.min.js"></script>

</head>

<body>

    <!-- start of navigation bar  -->

    <!-- <div class="hamburger-menu nav-left visible-xs">
        <div class="button" id="btn">
            <div class="top bar"></div>
            <div class="middle bar"></div>
            <div class="bottom bar"></div>
        </div>
    </div> -->

    <!-- only put content into main tag -->

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
                        <h3>[Title]</h3>
                        <h4>Click for QR Code</h4>
                    </div>
                </div>

                <div class="promo-card"  id="modal-2">
                    <div class="promo-img">
                        <img src="img/merchant-card2.png">
                    </div>
                    <div class="promo-des">
                        <h3>[Title]</h3>
                        <h4>Click for QR Code</h4>
                    </div>
                </div>

                <div class="promo-card"  id="modal-3">
                    <div class="promo-img">
                        <img src="img/merchant-card3.png">
                    </div>
                    <div class="promo-des">
                        <h3>[Title]</h3>
                        <h4>Click for QR Code</h4>
                    </div>
                </div>

                <div class="promo-card"  id="modal-4">
                    <div class="promo-img">
                        <img src="img/merchant-card4.png">
                    </div>
                    <div class="promo-des">
                        <h3>[Title]</h3>
                        <h4>Click for QR Code</h4>
                    </div>
                </div>

                <div class="promo-card"  id="modal-5">
                    <div class="promo-img">
                        <img src="img/merchant-card4.png">
                    </div>
                    <div class="promo-des">
                        <h3>[Title]</h3>
                        <h4>Click for QR Code</h4>
                    </div>
                </div>

                <div class="promo-card"  id="modal-6">
                    <div class="promo-img">
                        <img src="img/merchant-card4.png">
                    </div>
                    <div class="promo-des">
                        <h3>[Title]</h3>
                        <h4>Click for QR Code</h4>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <!-- Modal content box 1-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close1">&times;</span>
                    <div class="modal-logo-image">
                        <img src="img/h2-hub-logo.png">
                    </div>

                    <h3>[Title]</h3>
                    <h4>Scan the QR Code below:</h4>
                </div>
                <div class="modal-body">
                    <div class="QR-container">
                        <img src="img/QR-code.png">
                    </div>

                </div>
            </div>
        </div>

        <div id="modal2" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close2">&times;</span>
                    <div class="modal-logo-image">
                        <img src="img/pedro-logo.png">
                    </div>

                    <h3>[Title]</h3>
                    <h4>Scan the QR Code below:</h4>
                </div>
                <div class="modal-body">
                    <div class="QR-container">
                        <img src="img/QR-code.png">
                    </div>

                </div>
            </div>
        </div>

        <div id="modal3" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close3">&times;</span>
                    <div class="modal-logo-image">
                        <img src="img/ralph-lauren-logo.png">
                    </div>

                    <h3>[Title]</h3>
                    <h4>Scan the QR Code below:</h4>
                </div>
                <div class="modal-body">
                    <div class="QR-container">
                        <img src="img/QR-code.png">
                    </div>

                </div>
            </div>
        </div>

        <div id="modal4" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close4">&times;</span>
                    <div class="modal-logo-image">
                        <img src="img/h2-hub-logo.png">
                    </div>

                    <h3>[Title]</h3>
                    <h4>Scan the QR Code below:</h4>
                </div>
                <div class="modal-body">
                    <div class="QR-container">
                        <img src="img/QR-code.png">
                    </div>

                </div>
            </div>
        </div>


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
        var modal6 = document.getElementById("modal6");

        // Get the button that opens the modal
        var btn1 = document.getElementById("modal-1");
        var btn2 = document.getElementById("modal-2");
        var btn3 = document.getElementById("modal-3");
        var btn4 = document.getElementById("modal-4");
        var btn5 = document.getElementById("modal-5");
        var btn6 = document.getElementById("modal-6");

        // Get the <span> element that closes the modal
        var span1 = document.getElementById("close1");
        var span2 = document.getElementById("close2");
        var span3 = document.getElementById("close3");
        var span4 = document.getElementById("close4");
        var span5 = document.getElementById("close5");
        var span6 = document.getElementById("close6");

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
        btn6.onclick = function () {
            modal6.style.display = "block";
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
        span6.onclick = function () {
            modal6.style.display = "none";
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
            if (event.target == modal6) {
                modal6.style.display = "none";
            }
        }


    </script>

    <script src="js/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>
</html>
