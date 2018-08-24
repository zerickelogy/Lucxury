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
     <!--<link rel="stylesheet" href="css/selector-mobile.css">--> 


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
        });

        function filter() {
            $.ajax({
                type: "GET",
//                async: false,
                url: "Webservices/multiple_filter.php",
                cache: false,
                data: {merchant: "51 label", search: "OXFORD - CHOCOLATE"},
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
//                                async: false,
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


                    $("#some_container22").html(output);

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
                        $("#brands_container2").append('<option value="'+x+'">'+x+'</option');
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
                        $("#color_container2").append('<li>' + x + '</li>');
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
                        $("#merchant_container2").append('<li>' + x + '</li>');
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

        <!-- start of content  -->

        <div class="container product-container container-header">
            <h2>Clothings</h2>

            <div class="dropdown-container">
                <div class="custom-select db-price">
                    <select>
                        <option value="0">All Prices</option>
                        <option value="1">High - Low</option>
                        <option value="2">Low - High</option>
                    </select>
                </div>
                <div class="custom-select db-brands">
                    <select id="brands_container2">
                        <option value="0">All Brands</option>
                        <option value="1">Hollister</option>
                        <option value="2">A&F</option>
                        <option value="3">Tommy Hilfiger</option>
                        <option value="4">Tom Ford</option>
                        <option value="5">Gucci</option>
                    </select>
                </div>
                <div class="custom-select db-colours">
                    <select>
                        <option value="0">All Colours</option>
                        <option value="1">Black</option>
                        <option value="2">Blue</option>
                        <option value="3">Green</option>
                        <option value="4">Red</option>
                        <option value="5">White</option>
                        <option value="6">Yellow</option>
                    </select>
                </div>
                <div class="custom-select db-condition">
                    <select>
                        <option value="0">All Condition</option>
                        <option value="1">Brand New</option>
                        <option value="2">Used</option>
                    </select>
                </div>
                <div class="custom-select db-merchant">
                    <select>
                        <option value="0">All Merchants</option>
                        <option value="1">eBay</option>
                        <option value="2">Amazon</option>
                        <option value="3">Tao Bao</option>
                        <option value="4">ezBuy</option>
                    </select>
                </div>
            </div>

            <div id="some_container" class="product-card-container">
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
