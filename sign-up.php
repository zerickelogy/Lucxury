<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lucxury - Signup</title>
        <meta name="description" content="Welcome to Lucxury.">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/forms.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/dropdown-forms.css">
        <link rel="stylesheet" href="css/aos.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-scrollto.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <?php // include './Webservices/do_customer_profile_signup.php'; ?>
            <div class="container signup-container container-header">
                <h2>Sign Up</h2>
                <form method="post" action="./Webservices/do_customer_profile_signup.php" class="profile-form">
                    <div class="edit-profile" id="top-form">
                        <div class="profile-fills">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter Email" id="enter-email" required>
                            <div id="error-email" class="error error-email">Please enter a valid email address.</div>
                        </div>

                        <div class="profile-fills">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Enter Username" id="enter-username" required>
                            <div class="error"><span class="error">This field is required</span></div>
                            <small id="error-username"></small>
                        </div>


                        <div class="profile-fills">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter Password" id="enter-password" required>
                            <div class="error error-password">Please make sure there's at at least six characters, at least one number, one lowercase and one uppercase letter.</div>
                        </div>

                        <div class="profile-fills">
                            <label>Confirm Password</label>
                            <input class="form-padding-btm" type="password" name="psw" placeholder="Enter Password" id="reenter-password" required>
                            <div class="error error-repassword">This field is required</div>
                        </div>
                    </div>


                    <h3>Personal Particulars</h3>

                    <div class="edit-profile" id="bottom-form">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="Your name..">

                        <label>Last Name</label>
                        <input class="form-padding-small-btm" type="text" name="last_name" placeholder="Your last name..">
                    </div>


                    <div class="radio-box">
                        <h4>I am...</h4>
                        <label class="radio-container">Male
                            <input value="Male" type="radio" checked="checked" name="gender">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">Female
                            <input value="Female" type="radio" name="gender">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="dropdown-container">
                        <h4>Age</h4>
                        <div class="custom-select2 db-price">
                            <select id="agerange_container" name="age_range">
                                <option>Select</option>
                                <option>18 - 25</option>
                                <option>26 - 35</option>
                                <option>36 - 45</option>
                                <option>46 - 55</option>
                                <option>55 < </option>
                            </select>
                        </div>
                    </div>

                    <div class="dropdown-container">
                        <h4 id="country_id">Country</h4>
                        <div class="custom-select2 db-price">
                            <select id="countries_container" name="country">
                                <option>Select</option>
                            </select>
                        </div>
                    </div>

                    <div class="submit-line-btn">
                        <button type="submit">submit <i class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>

            <?php include 'footer.php'; ?>
        </main>

        <!-- end of main tag = end of content  -->

        <?php // include 'blue-section.php'; ?>
        <script>
            $(document).ready(function () {
                getAllCountries();
                function toggleSidebar() {
                    $(".button").toggleClass("active");
                    $("main").toggleClass("move-to-right");
                    $(".sidebar-item").toggleClass("active");
                }

                $('input[type="radio"]').change(function () {
                    if ($(this).is(':checked'))
                    {
                        console.log($(this).val());
                    }
                });

                $(".button").on("click tap", function () {
                    toggleSidebar();
                });

                $(document).keyup(function (e) {
                    if (e.keyCode === 27) {
                        toggleSidebar();
                    }
                });

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
                                    var span = $('.error-email')
                                    input.removeClass("invalid").addClass("valid");
                                    span.css("display", "block")
                                    $("#error-email").text(emailToBeTested + " is available");
                                } else {
                                    console.log("Sorry, " + emailToBeTested + " is taken.")

                                    var input = $(this);
                                    var span = $('.error-email')
                                    input.removeClass("valid").addClass("invalid");
                                    span.css("display", "block")
                                    $("#error-email").text("Sorry, " + emailToBeTested + " is taken.");
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
                        $.ajax({
                            type: "GET",
                            url: "./Webservices/checkExistingUsername.php",
                            data: {username: usernameToBeTested},
                            cache: false,
//                            dataType: "JSON",
                            success: function (response) {
                                if (response == '"no username found"') {
                                    console.log(usernameToBeTested + " is available.");

                                    var input = $(this);
                                    var span = $('.error-username')
                                    input.removeClass("invalid").addClass("valid");
                                    span.css("display", "block")
                                    $("#error-username").text(usernameToBeTested + " is available");
                                } else {
                                    console.log("Sorry, " + usernameToBeTested + " is taken.")

                                    var input = $(this);
                                    var span = $('.error-username')
                                    input.removeClass("valid").addClass("invalid");
                                    span.css("display", "block")
                                    $("#error-username").text("Sorry, " + usernameToBeTested + " is taken.");
                                }


                            },
                            error: function (obj, textStatus, errorThrown) {
                                console.log("Error " + textStatus + ": " + errorThrown);
                                alert("fail to generate clicks");
                            }
                        });
                    }

                });
            }); // end of document.ready

            function getAllCountries() {
                $.ajax({
                    type: "GET",
                    url: "Webservices/getAllCountries.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {

                        for (var i = 0; i < response.length; i++) {
                            var x = response[i]['country'];
                            $("#countries_container").append('<option value="' + x + '">' + x + '</option>');
                        }
                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error " + textStatus + ": " + errorThrown);
                        alert("fail to generate clicks");
                    }
                });
            }

        </script>

        <script>
            $(document).ready(function () {

                $('#enter-email').on('input', function () {
                    var input = $(this);
                    var is_name = input.val();
                    if (is_name) {
                        input.removeClass("invalid").addClass("valid");
                    } else {
                        input.removeClass("valid").addClass("invalid");
                        $("#error-email").text("Please enter an email address");
                    }
                });


                $('#enter-email').on('input', function () {
                    var input = $(this);
                    var span = $('.error-email')
                    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    var is_email = re.test(input.val());
                    if (is_email) {
                        input.removeClass("invalid").addClass("valid");
                        span.css("display", "none")
                    } else {
                        input.removeClass("valid").addClass("invalid");
                        span.css("display", "block")
                        $("#error-email").text("Please enter an email address");
                    }
                });

                $('#enter-password').on('input', function () {
                    var input = $(this);
                    var span = $('.error-password')
                    var pw = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
                    var is_password = pw.test(input.val());
                    if (is_password) {
                        input.removeClass("invalid").addClass("valid");
                        span.css("display", "none")
                    } else {
                        input.removeClass("valid").addClass("invalid");
                        span.css("display", "block")
                    }
                });

                $('#reenter-password').on('input', function () {
                    var input = $(this);
                    var span = $('.error-repassword')
                    var pw = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
                    var is_password = pw.test(input.val());
                    if (is_password) {
                        input.removeClass("invalid").addClass("valid");
                        span.css("display", "none")
                    } else {
                        input.removeClass("valid").addClass("invalid");
                        span.css("display", "block")
                    }
                });

                $('#enter-firstname').on('input', function () {
                    var input = $(this);
                    var is_name = input.val();
                    if (is_name) {
                        input.removeClass("invalid").addClass("valid");
                    } else {
                        input.removeClass("valid").addClass("invalid");
                    }
                });

                $('#enter-lastname').on('input', function () {
                    var input = $(this);
                    var is_name = input.val();
                    if (is_name) {
                        input.removeClass("invalid").addClass("valid");
                    } else {
                        input.removeClass("valid").addClass("invalid");
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


        <script src="js/dropdown.js"></script>

    </body>
</html>
