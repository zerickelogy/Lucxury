<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucxury – Login</title>
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
        <div class="container login-container">
            <p>Welcome to</p>
            <img src="img/logo-colour.png">

            <form action="#" class="login-form">
                <div class="login">
                    <!-- <label for="fname">Username</label> -->
                    <input type="text" id="fname" name="userid" placeholder="Enter Username">
                    <!-- <label for="lname">Password</label> -->
                    <input class="login-form-padding-top" type="password" id="lname" name="psw" placeholder="Enter Password">
                </div>

                <div class="login-options">
                    <!--<div id="forget-btn"><a href="javascript:void(0);">forget password</a></div>-->
                    <a href="sign-up.php" class="options-light">signup</a>
                </div>

                <div class="login-btn-container">
                    <button class="login-btn"><a href="#">Login <i class="fas fa-chevron-right"></i></a></button>
                    <a href="#" id="merchant-btn">merchant login <i class="fas fa-chevron-right"></i></a>
                </div>
            </form>

            <div class="login-links">
                <a href="https://www.facebook.com/lucxuryglobal" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/lucxuryglobal/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/lucxuryglobal" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCeGiwGkYZ9p8kxj8YwN4fIw?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div id="modalForget" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close-modal">&times;</span>
                    <h2>Forgot your password?</h2>
                    <p>Don’t worry. We’re here to help.</p>
                </div>
                <div class="modal-body">
                    <form action="#" class="forget-form">
                        <div class="forget">
                            <label for="fname">Email</label>
                            <input type="email" id="fname" name="email" placeholder="Enter Email">

                            <label for="fname">Username</label>
                            <input type="text" id="fname" name="userid" placeholder="Enter Username">
                        </div>

                        <div class="forget-modal-btn-container">
                            <button class="line-btn forget-modal-btn"><a href="categories.html">Submit <i class="fas fa-chevron-right"></i></a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Get the modal
        var modal = document.getElementById("modalForget");

        // Get the button that opens the modal
        var btn = document.getElementById("forget-btn");

        // Get the <span> element that closes the modal
        var span = document.getElementById("close-modal");

        // When the user clicks on the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


    </script>

    <!-- end of main tag = end of content  -->     

</body>
</html>
