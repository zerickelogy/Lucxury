<!doctype html>

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
        <div class="container signup-container container-header">
            <h2>Sign Up</h2>
            <form action="#" class="profile-form">
                <div class="edit-profile" id="top-form">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Email">

                    <label>Username</label>
                    <input type="text" name="userid" placeholder="Enter Username">

                    <label>Password</label>
                    <input class="form-padding-btm" type="password" name="psw" placeholder="Enter Password">
                </div>

                <h3>Personal Particulars</h3>

                <div class="edit-profile" id="bottom-form">
                    <label>First Name</label>
                    <input type="text" name="firstname" placeholder="Your name..">

                    <label>Last Name</label>
                    <input class="form-padding-small-btm" type="text" name="lastname" placeholder="Your last name..">
                </div>


                <div class="radio-box">
                    <h4>I am...</h4>
                    <label class="radio-container">Male
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Female
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="dropdown-container">
                    <h4>Age</h4>
                    <div class="dropdown db-price">
                        <div class="select">
                            <span>Select</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown-menu">
                            <li>18 - 25</li>
                            <li>26 - 35</li>
                            <li>36 - 45</li>
                            <li>46 - 55</li>
                            <li>55 < </li>
                        </ul>
                    </div>
                </div>

                <div class="dropdown-container">
                    <h4>Country</h4>
                    <div class="dropdown db-price">
                        <div class="select">
                            <span>Select</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <input type="hidden" name="gender">
                        <ul id="countries_container" class="dropdown-menu countriesclass">
                        </ul>
                    </div>
                </div>
                <div class="submit-line-btn">
                    <button type="submit"><a href="#">submit <i class="fas fa-chevron-right"></i></a></button>
                </div>
            </form>
        </div>
        <?php include 'footer.php'; ?>
    </main>

    <!-- end of main tag = end of content  -->

    <?php include 'blue-section.php'; ?>
    <script>
        $(document).ready(function () {
            getAllCountries();
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

            $('.countriesclass').click(function () {
                var x = $(this).data('value');
                console.log(x);
            })

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
                        $("#countries_container").append('<li data-value="'+x+'">' + x + '</li>');
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
