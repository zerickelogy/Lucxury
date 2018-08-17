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
                    <label for="tab-one">Are prices shown on LUCXURY platform inclusive of shipping fee?</label>
                    <div class="tab-content">
                        <p>Prices shown are not inclusive of shipping fee.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-two" type="checkbox" name="tabs">
                    <label for="tab-two">How do I check the shipping rates?</label>
                    <div class="tab-content">
                        <p>Once click on a product, shipping rates will be reflected on the merchant's website if applicable.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-three" type="checkbox" name="tabs">
                    <label for="tab-three">How do I track my purchasing information?</label>
                    <div class="tab-content">
                        <p>LUCXURY does not integrate purchase onto its platform. Purchasing information can be track on the merchant's website.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-four" type="checkbox" name="tabs">
                    <label for="tab-four">How do I purchase a product?</label>
                    <div class="tab-content">
                        <p>Search and click on the item where you will be directed to the merchant's website. Add the item to cart and proceed to payment method.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-five" type="checkbox" name="tabs">
                    <label for="tab-five">Are the items shown on LUCXURY platform authentic?</label>
                    <div class="tab-content">
                        <p>LUCXURY handpicks its merchants and verifies that merchants carry proper business license in Singapore and are authorised to sell Luxury products locally and internationally.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-six" type="checkbox" name="tabs">
                    <label for="tab-six">Is my personal information secure with LUCXURY?</label>
                    <div class="tab-content">
                        <p>We protect your personal information by implementing access control to restrict access to your personal information. For more information refer to our Privacy Policy.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-seven" type="checkbox" name="tabs">
                    <label for="tab-seven">What is LUCXURY?</label>
                    <div class="tab-content">
                        <p>Lucxury is an Online e-commerce aggregator that features Singapore made luxury brands that founders and owners are from Singapore. This platform is not only a platform which features these Singapore made luxury products but also educates the current and future generation on what Singapore fashion is.</p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-eight" type="checkbox" name="tabs">
                    <label for="tab-eight">How do I check if the products are New or Pre-Owned?</label>
                    <div class="tab-content">
                        <p>New or Pre-Owned products will be displayed on the item description.</p>
                    </div>
                </div>
                <div class="tab">
                    <input id="tab-nine" type="checkbox" name="tabs">
                    <label for="tab-nine">How does LUCXURY work?</label>
                    <div class="tab-content">
                        <p>LUCXURY is a technology platform. which allows users to search and purchase new or pre-owned products effortlessly among the global e-commerce platforms provided both locally and internationally. </p>
                    </div>
                </div>
                <div class="tab">
                    <input id="tab-ten" type="checkbox" name="tabs">
                    <label for="tab-ten">How can I become a merchant with LUCXURY?</label>
                    <div class="tab-content">
                        <p>LUCXURY is constantly looking for new merchants to come onboard. Interested potential merchants please kindly contact <a href="mailto:info@lucxury.com" target="_top">info@lucxury.com</a></p>
                    </div>
                </div>
                <div class="tab">
                    <input id="tab-eleven" type="checkbox" name="tabs">
                    <label for="tab-eleven">Are LUCXURY prices higher than merchant's website?</label>
                    <div class="tab-content">
                        <p>LUCXURY does not govern the price range of each specific product.</p>
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
