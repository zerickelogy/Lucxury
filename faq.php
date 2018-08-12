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
    <link rel="stylesheet" href="css/accordion.css">
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

        <div class="container accordion-container container-header">
            <h2>FAQ</h2>
            <div class="half">
                <div class="tab">
                    <input id="tab-one" type="checkbox" name="tabs">
                    <label for="tab-one">How do I track my order?</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-two" type="checkbox" name="tabs">
                    <label for="tab-two">General Enquiries</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-three" type="checkbox" name="tabs">
                    <label for="tab-three">How to Use?</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-four" type="checkbox" name="tabs">
                    <label for="tab-four">Payments</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-five" type="checkbox" name="tabs">
                    <label for="tab-five">Contact Us</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-six" type="checkbox" name="tabs">
                    <label for="tab-six">How do I get in as a merchant?</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-seven" type="checkbox" name="tabs">
                    <label for="tab-seven">What are the benefits  I get as a member?</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-eight" type="checkbox" name="tabs">
                    <label for="tab-eight">What if I do not like the products I bought?</label>
                    <div class="tab-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </main>

    <!-- end of main tag = end of content  -->

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
