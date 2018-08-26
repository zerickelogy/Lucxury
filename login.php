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

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
            <form action="./Webservices/do_customer_profile_login.php" method="post" class="login-form">
                <div class="login">
                     <!--<label for="username">Username</label>--> 
                    <input type="text" id="username" name="username" placeholder="Enter Username">
                     <!--<label for="password">Password</label>--> 
                    <input id="password" class="login-form-padding-top" type="password" name="password" placeholder="Enter Password">
                </div>

                <div class="login-options">
                    <div id="forget-btn"><a href="javascript:void(0);">forget password</a></div>
                    <a href="sign-up.php" class="options-light">signup</a>
                </div>

                <div class="login-btn-container">
                    <button type="submit" class="login-btn">Login <i class="fas fa-chevron-right"></i></button>
                    <a href="https://www.lucxury.com/merchant_dashboard_login.php" id="merchant-btn">merchant login <i class="fas fa-chevron-right"></i></a>
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
                    <form action="./Webservices/do_forget_password.php" method="post" class="forget-form">
                        <div class="forget">
                            <div class="profile-fills">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter Email" id="enter-email2" required>
                                <div id="error-forget-email" class="error error-email-forget">Please enter a valid email address.</div>
                            </div>

                            <div class="profile-fills">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Enter Username" id="enter-username2" required>
                                <div class="error error-userid" id="error-profile-username">This field is required</div>
                            </div>
                        </div>

                        <div class="forget-modal-btn-container">
                            <button type="submit" class="line-btn forget-modal-btn">Submit <i class="fas fa-chevron-right"></i></button>
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

        $('#enter-email').blur(function () {
            if ($(this).val()) {
                var emailToBeTested = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "./Webservices/checkExistingEmail.php",
                    data: {email: emailToBeTested},
                    cache: false,
//                            dataType: "JSON",
                    success: function (response) {
                        if (response == '"no email found"') {
                            console.log(emailToBeTested + " is available.");

                            var input = $(this);
                            var span = $('.error-email-forget')
                            var errorText = $('.error')
                            input.removeClass("invalid").addClass("valid");
                            span.css("display", "block")
                            $("#error-forget-email").text(emailToBeTested + " is available");
                            $("#enter-email").css("border-bottom", "1px solid green").css("color", "green");
                            $('#submit').prop('disabled', false);
                            errorText.css("color", "green");
                        } else {
                            console.log("Sorry, " + emailToBeTested + " is unavailable.")

                            var input = $(this);
                            var span = $('.error-email-forget')
                            var errorText = $('.error')
                            input.removeClass("valid").addClass("invalid");
                            span.css("display", "block")
                            $("#error-forget-email").text("Sorry, " + emailToBeTested + " is unavailable.");
                            $("#enter-email").css("border-bottom", "1px solid red").css("color", "red");
                            $('#submit').prop('disabled', true);
                            errorText.css("color", "red");
                        }
                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error " + textStatus + ": " + errorThrown);
                        alert("fail to generate clicks");
                    }
                });
            }
        });

        $('#enter-username').blur(function () {
            if ($(this).val()) {
                var usernameToBeTested = $(this).val();
                var span = $('.error-userid');
                $.ajax({
                    type: "GET",
                    url: "./Webservices/checkExistingUsername.php",
                    data: {username: usernameToBeTested},
                    cache: false,
//                            dataType: "JSON",
                    success: function (response) {
                        if (response == '"no username found"') { //satisfies
                            console.log(usernameToBeTested + " is available.");

                            var input = $(this);
                            var span = $('#error-profile-username')
                            var errorText = $('.error')
                            input.removeClass("invalid").addClass("valid");
                            span.css("display", "block")
                            $("#error-profile-username").text(usernameToBeTested + " is available");
                            $("#enter-username").css("border-bottom", "1px solid green").css("color", "green");
                            errorText.css("color", "green");
                            span.css("top","75px");
                            $('#submit').prop('disabled', false);
                        } else {
                            console.log("Sorry, " + usernameToBeTested + " is unavailable.")

                            var input = $(this);
                            var span = $('#error-profile-username')
                            var errorText = $('.error')
                            input.removeClass("valid").addClass("invalid");
                            span.css("display", "block")
                            $("#error-profile-username").text("Sorry, " + usernameToBeTested + " is unavailable.");
                            $("#enter-username").css("border-bottom", "1px solid red").css("color", "red");
                            $('#submit').prop('disabled', true);
                            errorText.css("color", "red");
                            span.css("top","75px");
                        }
                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error " + textStatus + ": " + errorThrown);
                        alert("fail to generate clicks");
                    }
                });
            }
        });



        $('#enter-email').on('input', function () {
            var input = $(this);
            var span = $('.error-email-forget');
            var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var errorText = $('.error');
            var is_email = re.test(input.val());
            if (is_email) {
                input.removeClass("invalid").addClass("valid"); //satisfies
                span.css("display", "none");
                span.css("top", "75px");


            } else {
                input.removeClass("valid").addClass("invalid");
                span.css("display", "block")
                $("#error-forget-email").text("Please enter a valid email address");
                span.css("top", "75px");


            }
        });



    </script>

    <!-- end of main tag = end of content  -->     

</body>
</html>
