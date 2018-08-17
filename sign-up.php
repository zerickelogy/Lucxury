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
            <?php // include 'white-menubar.php'; ?>
            <div class="container signup-container container-header">
                <h2>Sign Up</h2>
                <form action="Webservices/do_customer_profile_signup.php" method="post" class="profile-form">
                    <div class="edit-profile" id="top-form">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter Email">

                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter Username">

                        <label>Password</label>
                        <input class="form-padding-btm" type="password" name="password" placeholder="Enter Password">
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

                $('#countries_container').change(function () {
                    console.log($(this).val());
                });

                $('input[type="radio"]').change(function () {
                    if ($(this).is(':checked'))
                    {
                        console.log($(this).val());
                    }
                });

                var x = $('input[name=radio1]:checked').val();
                console.log(x);

                $(".button").on("click tap", function () {
                    toggleSidebar();
                });

                $(document).keyup(function (e) {
                    if (e.keyCode === 27) {
                        toggleSidebar();
                    }
                });
            });

            function getAllCountries() {
                $.ajax({
                    type: "GET",
                    url: "Webservices/getAllCountries.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {

                        for (var i = 0; i < response.length; i++) {
                            var x = response[i]['country'];
                            $("#countries_container").append('<option value="'+x+'">'+x+'</option>');
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
