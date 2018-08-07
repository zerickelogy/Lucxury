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
        <script src="js/selector.js"></script>
        <link rel="stylesheet" href="css/accordion-product.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/selector.css">
        <!-- <link rel="stylesheet" href="css/selector-mobile.css"> -->

        
        <link rel="stylesheet" href="css/aos.css">
        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-scrollto.js"></script>
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
            <nav id="navigation-bar">
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
                
            </nav>

            <!-- start of content  -->

            <div class="container product-container container-header">
                <h2>Clothings</h2>

                    <div class="selector-container">

                        <div class="product-selector">
                                <!-- Custom select structure --> 
                            <div class="select_mate" data-mate-select="active" >
                                <select name="" onclick="return false;" id="">
                                    <option value="0" data-filter="*">Price</option>
                                    <option value=".metal" data-filter=".metal">High - Low</option>
                                    <option value=".transition" data-filter=".transition">Low - High</option>
                                </select>
                            
                                <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                                <path d="M0-.75h24v24H0z" fill="none"/>
                                </svg></span>

                                <div class="cont_list_select_mate">

                                <ul class="cont_select_int"> </ul> 
                                </div>

                            </div>
                        </div>

                        <div class="product-selector">
                                <!-- Custom select structure --> 
                                <div class="select_mate" data-mate-select="active" >
                                    <select name="" onclick="return false;" id="">
                                        <option value="0">Brands</option>
                                        <option value="1">Hollister</option>
                                        <option value="2" >a&f</option>
                                        <option value="3" >BOSS</option>
                                    </select>
                                
                                    <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                                    <path d="M0-.75h24v24H0z" fill="none"/>
                                    </svg></span>

                                    <div class="cont_list_select_mate">

                                <ul class="cont_select_int"> </ul> 
                                </div>

                            </div>
                        </div>
                        <div class="product-selector">
                                <!-- Custom select structure --> 
                                <div class="select_mate" data-mate-select="active" >
                                    <select name="" onclick="return false;" id="">
                                        <option value="0">Colours</option>
                                        <option value="1">Black</option>
                                        <option value="2" >White</option>
                                        <option value="3" >Grey</option>
                                    </select>
                                
                                    <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                                    <path d="M0-.75h24v24H0z" fill="none"/>
                                    </svg></span>

                                    <div class="cont_list_select_mate">

                                <ul class="cont_select_int"> </ul> 
                                </div>

                            </div>
                        </div>
                        <div class="product-selector">
                                <!-- Custom select structure --> 
                                <div class="select_mate" data-mate-select="active" >
                                    <select name="" onclick="return false;" id="">
                                        <option value="0">Condition</option>
                                        <option value="1">Brand New</option>
                                        <option value="2" >Used</option>
                                    </select>
                                
                                    <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                                    <path d="M0-.75h24v24H0z" fill="none"/>
                                    </svg></span>

                                   <div class="cont_list_select_mate">

                                <ul class="cont_select_int"> </ul> 
                                </div>

                            </div>
                        </div>
                        <div class="product-selector">
                                <!-- Custom select structure --> 
                                <div class="select_mate" data-mate-select="active" >
                                    <select name="" onclick="return false;" id="">
                                        <option value="0">Merchant</option>
                                        <option value="1">eBay</option>
                                        <option value="2" >Amazon</option>
                                    </select>
                                
                                    <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                                    <path d="M0-.75h24v24H0z" fill="none"/>
                                    </svg></span>

                                    <div class="cont_list_select_mate">

                                <ul class="cont_select_int"> </ul> 
                                </div>

                            </div>
                        </div>      
                    </div>


                    <div class="mobile-selector">
                    	<div class="half">
		                    <div class="tab">
		                        <input id="tab-one" type="checkbox" name="tabs">
		                        <label for="tab-one">Filter</label>
		                        <div class="tab-content">
		                            <div class="drop-down">
		                                <select name="" onclick="return false;" id="">
		                                    <option value="0" data-filter="*">Price</option>
		                                    <option value=".metal" data-filter=".metal">High - Low</option>
		                                    <option value=".transition" data-filter=".transition">Low - High</option>
		                                </select>
				                            
	                                    <select name="" onclick="return false;" id="">
	                                        <option value="0">Brands</option>
	                                        <option value="1">Hollister</option>
	                                        <option value="2" >a&f</option>
	                                        <option value="3" >BOSS</option>
	                                    </select>
				                                
	                                    <select name="" onclick="return false;" id="">
	                                        <option value="0">Colours</option>
	                                        <option value="1">Black</option>
	                                        <option value="2" >White</option>
	                                        <option value="3" >Grey</option>
	                                    </select>
				                                
				                                    
	                                    <select name="" onclick="return false;" id="">
	                                        <option value="0">Condition</option>
	                                        <option value="1">Brand New</option>
	                                        <option value="2" >Used</option>
	                                    </select>
				                                
				                                
	                                    <select name="" onclick="return false;" id="">
	                                        <option value="0">Merchant</option>
	                                        <option value="1">eBay</option>
	                                        <option value="2" >Amazon</option>
	                                    </select>
				                    </div>       

		                        </div>
		                    </div>
		                </div>
                    </div>



	                <div class="product-card-container">
		                <div class="product-card">
		                    <div class="product-img">
		                    	<div class="product-merchant">ebay</div>
		                        <img src="img/product1.png">
		                    </div>
		                    <div class="product-des">
		                        <h3>[Title]</h3>
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


            <div class="container footer">
                <div class="footer-item sitemap">
                    <h5>Sitemap</h5>
                    <div class="footer-subitem">
                        <a href="#">Home</a><br/>
                        <a href="#">Merchants</a><br/>
                        <a href="#">Promotions</a><br/>
                        <a href="#">FAQs</a><br/>
                    </div>
                </div>
                <div class="footer-item my-account">
                    <h5>My Account</h5>
                    <div class="footer-subitem">
                        <a href="#">Edit Your Details</a><br/>
                        <a href="#">Forget Password</a><br/>
                    </div>
                </div>
                <div class="footer-item lucxury">
                    <h5>Lucxury</h5>
                    <div class="footer-subitem">
                        <a href="#">Terms & Conditions</a><br/>
                        <a href="#">Privacy Policy</a><br/>
                        <a href="#">Contact Us</a><br/>
                    </div>
                </div>
                <div class="footer-item find-us">
                    <h5>Find Us</h5>
                    <div class="footer-subitem">
                        <a href="https://www.facebook.com/lucxuryglobal" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/lucxuryglobal/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/lucxuryglobal" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCeGiwGkYZ9p8kxj8YwN4fIw?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="container footer-credits">
                <p id="credits-left">© 2018 Lucxury</p>
                <p id="credits-right">All Rights Reserved.</p>
            </div>


        </main>

        <!-- end of main tag = end of content  -->

        <div class="sidebar">

            <div class="sidebar-item user-id"><i class="fas fa-user"></i><a href="#">Hello, Adeline Lui</a></div>

            <div class="sidebar-item category cat-selector"><a href="#">Men</a><a href="#">Women</a></div>

            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="https://lucxury.com/lucxury_wp/" class="sidebar-anchor">News / Media</a></li>
                <li class="sidebar-item"><a href="promotions.html" class="sidebar-anchor">Promotions</a></li>
                <li class="sidebar-item"><a href="faq.html" class="sidebar-anchor">FAQs</a></li>
                <li class="sidebar-item"><a href="edit-profile.html" class="sidebar-anchor">Edit profile</a></li>
            </ul>


            <div class="sidebar-item logout-btn"><a href="#">Logout</a></div>

        </div>

        <script>
            $(document).ready(function() {

                  function toggleSidebar() {
                        $(".button").toggleClass("active");
                        $("main").toggleClass("move-to-right");
                        $(".sidebar-item").toggleClass("active");
                  }

                  $(".button").on("click tap", function() {
                        toggleSidebar();
                  });

                  $(document).keyup(function(e) {
                        if (e.keyCode === 27) {
                             toggleSidebar();
                    }
                  });

            });

            // if ($(".mobile-selector").css("display") == "block") {
            //     $(".selecionado_opcion").click(function(){
            //         $(".select_mate").attr("data-selec-open", "true");
            //         $(".icon_select_mate").css("transform", "rotate(180deg)");
            //         $(".cont_select_int").css("height", "150px");
            //     });
            // }

        </script>

        <script>
            function openSearch() {
              $("#myOverlay").fadeIn(500).css("display","block");
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
