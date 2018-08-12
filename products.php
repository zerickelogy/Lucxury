<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucxury</title>
    <meta name="description" content="Welcome to Lucxury.">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/accordion-product.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <!-- <link rel="stylesheet" href="css/selector-mobile.css"> -->


    <link rel="stylesheet" href="css/aos.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-scrollto.js"></script>

    <!--start of glenns script-->
    <script>
        $(document).ready(function () {
            getAllBrands();
            getAllColors();
            getAllMerchants();
            filter();

            $('#priceSort').change(function () {
                var x = $('#priceSort').val();
                console.log(x);
            });
        });

        function filter() {
            $.ajax({
                type: "GET",
                async: false,
                url: "Webservices/multiple_filter.php",
                cache: false,
//                data: {merchant: "51 label"},
                dataType: "JSON",
                success: function (response) {
                    var output = "";
                    var item_id = "";
                    var image_url = "";
                    var product_name = "";
                    var product_price_currency = "";
                    var product_price_amount = "";
                    var product_brand = "";
                    var product_color = "";
                    var product_condition = "";
                    var merchant_name = "";
                    var merchant_type = "";
                    var merchant_url = "";

                    for (var i = 0; i < response.length; i++) {
                        // to filter if a merchant does not have any items yet; avoids the NULL NULL object appearing                
                        if (response[i]['itemfilter_id'] != null) {
                            item_id = response[i]['itemfilter_id'];
                            image_url = response[i]['itemfilter_image_url'];
                            product_name = response[i]['itemfilter_name'];
                            product_price_amount = response[i]['itemfilter_price_amount'];
                            product_price_currency = response[i]['itemfilter_price_currency'];
                            product_brand = response[i]['itemfilter_brand'];
                            product_color = response[i]['itemfilter_color'];
                            product_condition = response[i]['itemfilter_condition'];
                            merchant_name = response[i]['merchant_name'];
                            merchant_type = response[i]['merchant_type'];
                            merchant_url = response[i]['itemfilter_more_info_url']

                            $.ajax({
                                type: "GET",
                                url: "Webservices/getImageUrlFromItemFilterId.php",
                                data: {itemfilter_id: item_id},
                                cache: false,
                                async: false,
                                dataType: "JSON",
                                success: function (response) {
                                    for (var i = 0; i < response.length; i++) {
                                        image_url = response[i]["itemfilter_image_url"];
                                    }
                                },
                                error: function (obj, textStatus, errorThrown) {
                                    console.log("Error " + textStatus + ": " + errorThrown);
                                }
                            });

                            output += '<div class="product-card">' +
                                    '<div class="product-img">' +
                                    '<div class="product-merchant">' + merchant_name + '</div>' +
//                                    '<a target="_blank" href=' + merchant_url + '><img src="../' + image_url + '"></a>' +
                                    '</div>' +
                                    '<div class="product-des">' +
                                    '<h3>' + product_name + '</h3>' +
                                    '<span id="product-price">' + product_price_amount + '</span>|<span id="product-colour">' + product_color + '</span>,<span id=product-condition>' + product_condition + '</span>' +
                                    '</div>' +
                                    '</div>';
                        }



                    }


                    $("#some_container").html(output);

                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                    // alert("fail to filter items");
                }
            });
        }

        function getAllBrands() {
            $.ajax({
                type: "GET",
                url: "Webservices/getAllBrands.php",
                cache: false,
                dataType: "JSON",
                success: function (response) {
                    for (var i = 0; i < response.length; i++) {
                        var x = response[i]['brand'];
                        $("#brands_container").append('<option value="' + x + '">' + x + '</option>');
                        $("#brands_container_mobile").append('<option value="' + x + '">' + x + '</option>');
                    }
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                    alert("fail to generate clicks");
                }
            });
        }

        function getAllColors() {
            $.ajax({
                type: "GET",
                url: "Webservices/getAllColors.php",
                cache: false,
                dataType: "JSON",
                success: function (response) {
                    for (var i = 0; i < response.length; i++) {
                        var x = response[i]['color'];
                        $("#color_container").append('<option value="' + x + '">' + x + '</option>');
                        $("#color_container_mobile").append('<option value="' + x + '">' + x + '</option>');
                    }
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                    alert("fail to generate clicks");
                }
            });
        }

        function getAllMerchants() {
            $.ajax({
                type: "GET",
                url: "Webservices/getAllMerchants.php",
                cache: false,
                dataType: "JSON",
                success: function (response) {
                    for (var i = 0; i < response.length; i++) {
                        var x = response[i]['merchant_name'];
                        $("#merchant_container").append('<option value="' + x + '">' + x + '</option>');
                        $("#merchant_container_mobile").append('<option value="' + x + '">' + x + '</option>');
                    }
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                    alert("fail to generate clicks");
                }
            });
        }
    </script>
    <!--end of glenns script-->
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
        <!--            <nav id="navigation-bar">
                        <div class="hamburger-menu nav-left hidden-xs">
                            <div class="button" id="btn">
                                <div class="top bar"></div>
                                <div class="middle bar"></div>
                                <div class="bottom bar"></div>
                            </div>
                        </div>
        
                    <div id="logo"><a href="index.html"><img id="logo-img" src="img/logo-black.png"></a></div>
        
                    <div id="men-women">
                        <a href="#" class="cat-active">men</a>
                        <a href="#">women</a>
                    </div>
        
                    <div class="user-id user-nav">
                        <i class="fas fa-user"></i><a href="#">Hello, Adeline Lui</a>
                    </div>
                    
        
                    <button id="search-bar" onclick="openSearch()"><i class="fas fa-search"></i></button>
        
                    <div id="myOverlay" class="overlay">
        
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">
                            <span class="stroke left"></span>
                            <span class="stroke right"></span>
                        </span>
        
                        <div class="overlay-content" method="post">
                            <form action="product_page.php">
                                <input name="search_item" type="text" placeholder="Search for products..." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
        
                    </div>
                        
                    </nav>-->

        <!-- start of content  -->

        <div class="container product-container container-header">
            <h2>Clothings</h2>

            <div class="dropdown-container">
                <div class="dropdown db-price">
                    <div id="" class="select">
                        <span>Price</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                        <li>Male</li>
                        <li>Female</li>
                    </ul>
                </div>

                <div class="dropdown db-brands">
                    <div class="select">
                        <span>Brands</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                        <li>Hollister</li>
                        <li>A&F</li>
                        <li>Dolce & Gabbana</li>
                    </ul>
                </div>

                <div class="dropdown db-colours">
                    <div class="select">
                        <span>Colours</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                        <li id="male">Male</li>
                        <li id="female">Female</li>
                    </ul>
                </div>

                <div class="dropdown db-condition">
                    <div class="select">
                        <span>Condition</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                        <li id="male">Brand New</li>
                        <li id="female">Used</li>
                    </ul>
                </div>

                <div class="dropdown db-merchant">
                    <div class="select">
                        <span>Merchant</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                        <li id="male">Male</li>
                        <li id="female">Female</li>
                    </ul>
                </div>
            </div>



            <div class="product-card-container">
                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">ebay</div>
                        <img src="img/product1.png">
                    </div>
                    <div class="product-des">
                        <h3>HASTE MEN DOUBLE MONK STRAP - BRUGUNDY</h3>
                        <span id="product-price">$29.95</span>|<span id="product-colour">White</span>,<span id=product-condition>Brand New</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">amazon</div>
                        <img src="img/product2.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">$49.95</span>|<span id="product-colour">Khaki</span>,<span id=product-condition>Used</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">taobao</div>
                        <img src="img/product3.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">$69.95</span>|<span id="product-colour">White</span>,<span id=product-condition>Brand New</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">insert</div>
                        <img src="img/product4.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">[price]</span>|<span id="product-colour">[colour]</span>,<span id=product-condition>[condition]</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">insert</div>
                        <img src="img/product4.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">[price]</span>|<span id="product-colour">[colour]</span>,<span id=product-condition>[condition]</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">insert</div>
                        <img src="img/product4.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">[price]</span>|<span id="product-colour">[colour]</span>,<span id=product-condition>[condition]</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">insert</div>
                        <img src="img/product4.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">[price]</span>|<span id="product-colour">[colour]</span>,<span id=product-condition>[condition]</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">insert</div>
                        <img src="img/product4.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">[price]</span>|<span id="product-colour">[colour]</span>,<span id=product-condition>[condition]</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <div class="product-merchant">insert</div>
                        <img src="img/product4.png">
                    </div>
                    <div class="product-des">
                        <h3>[Title]</h3>
                        <span id="product-price">[price]</span>|<span id="product-colour">[colour]</span>,<span id=product-condition>[condition]</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- end of content  -->

        <?php include 'footer.php'; ?>
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

        $(document).ready(function () {
            if ($(window).width() < 1049) {
                $('.dropdown-container').wrapAll('<div class="drop-down">');
                $('.drop-down').wrapAll('<div class="tab-content">');
                $('<label for="tab-one" id="label-tab-one">Filter</label>').insertBefore($('.tab-content'));
                $('<input id="tab-one" type="checkbox" name="tabs">').insertBefore($('.tab-content'));
                $('#label-tab-one, #tab-one, .tab-content').wrapAll('<div class="tab">');
                $('.tab').wrapAll('<div class="half">');

            }
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
