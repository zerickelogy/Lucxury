<!doctype html>
<?php
session_start();
$search_item = $_POST['search_item'];
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
        var search_global = "<?php echo $search_item; ?>";
        var priceSort_global = "";
        var brand_global = "";
        var color_global = "";
        var condition_global = "";
        var merchant_global = "";
        var gender_global = "";
        $(document).ready(function () {
            getAllBrands();
            getAllColors();
            getAllMerchants();
            filter();

            $('.trigger_filter').change(function () {
                priceSort_global = $('#order_container').val();
                brand_global = $('#brands_container').val();
                color_global = $('#colors_container').val();
                condition_global = $('#conditions_container').val();
                merchant_global = $('#merchants_container').val();
                gender_global = $('#gender_container').val();
                filter();
            });
        });



        function filter() {
            console.log(priceSort_global);
            console.log(brand_global);
            console.log(color_global);
            console.log(condition_global);
            console.log(merchant_global);
            console.log(gender_global);
            $.ajax({
                type: "GET",
                async: false,
                url: "Webservices/multiple_filter.php",
                cache: false,
                data: {search: search_global, brand: brand_global, color: color_global, gender: gender_global, condition: condition_global, merchant: merchant_global, priceSort: priceSort_global},
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
                                    '<a target="_blank" href=' + merchant_url + '><img src="../' + image_url + '"></a>' +
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
                    console.log("Error " + textStatus + ": " + errorThrown + obj);
                    // alert("fail to filter items");
                    $("#some_container").html("");
                }
            });
            search_global = "";
            priceSort_global = "";
            brand_global = "";
            color_global = "";
            condition_global = "";
            merchant_global = "";
            gender_global = "";
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
                        $("#brands_container").append('<option value="' + x + '">' + x + '</option');
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
                        $("#colors_container").append('<option value="' + x + '">' + x + '</option');
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
                        $("#merchants_container").append('<option value="' + x + '">' + x + '</option');
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
                <div class="custom-select2 db-price">
                    <select class="trigger_filter" id="order_container">
                        <option value="DESC">High - Low</option>
                        <option value="ASC">Low - High</option>
                    </select>
                </div>
                <div class="custom-select2 db-brands">
                    <select class="trigger_filter" id="brands_container">
                        <option value="">All Brands</option>
                    </select>
                </div>
                <div class="custom-select2 db-colours">
                    <select class="trigger_filter" id="colors_container">
                        <option value="">All Colours</option>
                    </select>
                </div>
                <div class="custom-select2 db-condition">
                    <select class="trigger_filter" id="conditions_container">
                        <option value="">All Condition</option>
                        <option value="NEW">New</option>
                        <option value="USED">Used</option>
                    </select>
                </div>
                <div class="custom-select2 db-merchant">
                    <select class="trigger_filter" id="merchants_container">
                        <option value="">All Merchants</option>
                    </select>
                </div>
                <div class="custom-select2">
                    <select class="trigger_filter" id="gender_container">
                        <option value="">All Gender</option>
                        <option value="Men">Male</option>
                        <option value="Women">Female</option>
                    </select>
                </div>
            </div>

            <div id="some_container" class="product-card-container">
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
