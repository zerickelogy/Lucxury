<!doctype html>
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucxury</title>
    <meta name="description" content="Welcome to Lucxury.">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
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
        <div class="container gender-container">
            <a href="#"><div id="male" class="split male"><p>male</p></div></a>
            <a href="#"><div id="female" class="split female"><p>female</p></div></a>
        </div>
    </main>

    <script>
        $(document).ready(function () {
            $('#female').click(function () {
                '<?php $_SESSION['username'] = "female"; ?>'
                window.location.replace("./index.php");
            });
        });

//        // Get the modal
//        var modal = document.getElementById("modalForget");
//
//        // Get the button that opens the modal
//        var btn = document.getElementById("forget-btn");
//
//        // Get the <span> element that closes the modal
//        var span = document.getElementById("close-modal");
//
//        // When the user clicks on the button, open the modal 
//        btn.onclick = function () {
//            modal.style.display = "block";
//        }
//
//        // When the user clicks on <span> (x), close the modal
//        span.onclick = function () {
//            modal.style.display = "none";
//        }
//
//        // When the user clicks anywhere outside of the modal, close it
//        window.onclick = function (event) {
//            if (event.target == modal) {
//                modal.style.display = "none";
//            }
//        }


    </script>

    <!-- end of main tag = end of content  -->     

</body>
</html>
