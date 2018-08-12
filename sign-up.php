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
            <nav id="navigation-bar">
                <div class="hamburger-menu nav-left hidden-xs">
                    <div class="button" id="btn">
                        <div class="top bar"></div>
                        <div class="middle bar"></div>
                        <div class="bottom bar"></div>
                    </div>
                </div>

            <div id="logo"><a href="index.html"><img id="logo-img" src="img/logo-black.png"></a></div>

            <!-- <div id="men-women">
                <a href="#" class="cat-active">men</a>
                <a href="#">women</a>
            </div> -->

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
                            <ul class="dropdown-menu">
                                <li value="AF">Afghanistan</li>
                                <li value="AX">Åland Islands</li>
                                <li value="AL">Albania</li>
                                <li value="DZ">Algeria</li>
                                <li value="AS">American Samoa</li>
                                <li value="AD">Andorra</li>
                                <li value="AO">Angola</li>
                                <li value="AI">Anguilla</li>
                                <li value="AQ">Antarctica</li>
                                <li value="AG">Antigua and Barbuda</li>
                                <li value="AR">Argentina</li>
                                <li value="AM">Armenia</li>
                                <li value="AW">Aruba</li>
                                <li value="AU">Australia</li>
                                <li value="AT">Austria</li>
                                <li value="AZ">Azerbaijan</li>
                                <li value="BS">Bahamas</li>
                                <li value="BH">Bahrain</li>
                                <li value="BD">Bangladesh</li>
                                <li value="BB">Barbados</li>
                                <li value="BY">Belarus</li>
                                <li value="BE">Belgium</li>
                                <li value="BZ">Belize</li>
                                <li value="BJ">Benin</li>
                                <li value="BM">Bermuda</li>
                                <li value="BT">Bhutan</li>
                                <li value="BO">Bolivia</li>
                                <li value="BQ">Bonaire</li>
                                <li value="BA">Bosnia and Herzegovina</li>
                                <li value="BW">Botswana</li>
                                <li value="BV">Bouvet Island</li>
                                <li value="BR">Brazil</li>
                                <li value="IO">British Indian Ocean Territory</li>
                                <li value="BN">Brunei Darussalam</li>
                                <li value="BG">Bulgaria</li>
                                <li value="BF">Burkina Faso</li>
                                <li value="BI">Burundi</li>
                                <li value="KH">Cambodia</li>
                                <li value="CM">Cameroon</li>
                                <li value="CA">Canada</li>
                                <li value="CV">Cape Verde</li>
                                <li value="KY">Cayman Islands</li>
                                <li value="CF">Central African Republic</li>
                                <li value="TD">Chad</li>
                                <li value="CL">Chile</li>
                                <li value="CN">China</li>
                                <li value="CX">Christmas Island</li>
                                <li value="CC">Cocos (Keeling) Islands</li>
                                <li value="CO">Colombia</li>
                                <li value="KM">Comoros</li>
                                <li value="CG">Congo</li>
                                <li value="CD">Congo</li>
                                <li value="CK">Cook Islands</li>
                                <li value="CR">Costa Rica</li>
                                <li value="CI">Côte d'Ivoire</li>
                                <li value="HR">Croatia</li>
                                <li value="CU">Cuba</li>
                                <li value="CW">Curaçao</li>
                                <li value="CY">Cyprus</li>
                                <li value="CZ">Czech Republic</li>
                                <li value="DK">Denmark</li>
                                <li value="DJ">Djibouti</li>
                                <li value="DM">Dominica</li>
                                <li value="DO">Dominican Republic</li>
                                <li value="EC">Ecuador</li>
                                <li value="EG">Egypt</li>
                                <li value="SV">El Salvador</li>
                                <li value="GQ">Equatorial Guinea</li>
                                <li value="ER">Eritrea</li>
                                <li value="EE">Estonia</li>
                                <li value="ET">Ethiopia</li>
                                <li value="FK">Falkland Islands</li>
                                <li value="FO">Faroe Islands</li>
                                <li value="FJ">Fiji</li>
                                <li value="FI">Finland</li>
                                <li value="FR">France</li>
                                <li value="GF">French Guiana</li>
                                <li value="PF">French Polynesia</li>
                                <li value="TF">French Southern Territories</li>
                                <li value="GA">Gabon</li>
                                <li value="GM">Gambia</li>
                                <li value="GE">Georgia</li>
                                <li value="DE">Germany</li>
                                <li value="GH">Ghana</li>
                                <li value="GI">Gibraltar</li>
                                <li value="GR">Greece</li>
                                <li value="GL">Greenland</li>
                                <li value="GD">Grenada</li>
                                <li value="GP">Guadeloupe</li>
                                <li value="GU">Guam</li>
                                <li value="GT">Guatemala</li>
                                <li value="GG">Guernsey</li>
                                <li value="GN">Guinea</li>
                                <li value="GW">Guinea-Bissau</li>
                                <li value="GY">Guyana</li>
                                <li value="HT">Haiti</li>
                                <li value="HM">Heard Island and McDonald Islands</li>
                                <li value="VA">Holy See (Vatican City State)</li>
                                <li value="HN">Honduras</li>
                                <li value="HK">Hong Kong</li>
                                <li value="HU">Hungary</li>
                                <li value="IS">Iceland</li>
                                <li value="IN">India</li>
                                <li value="ID">Indonesia</li>
                                <li value="IR">Iran</li>
                                <li value="IQ">Iraq</li>
                                <li value="IE">Ireland</li>
                                <li value="IM">Isle of Man</li>
                                <li value="IL">Israel</li>
                                <li value="IT">Italy</li>
                                <li value="JM">Jamaica</li>
                                <li value="JP">Japan</li>
                                <li value="JE">Jersey</li>
                                <li value="JO">Jordan</li>
                                <li value="KZ">Kazakhstan</li>
                                <li value="KE">Kenya</li>
                                <li value="KI">Kiribati</li>
                                <li value="KP">North Korea</li>
                                <li value="KR">South</li>
                                <li value="KW">Kuwait</li>
                                <li value="KG">Kyrgyzstan</li>
                                <li value="LA">Lao People's Democratic Republic</li>
                                <li value="LV">Latvia</li>
                                <li value="LB">Lebanon</li>
                                <li value="LS">Lesotho</li>
                                <li value="LR">Liberia</li>
                                <li value="LY">Libya</li>
                                <li value="LI">Liechtenstein</li>
                                <li value="LT">Lithuania</li>
                                <li value="LU">Luxembourg</li>
                                <li value="MO">Macao</li>
                                <li value="MK">Macedonia</li>
                                <li value="MG">Madagascar</li>
                                <li value="MW">Malawi</li>
                                <li value="MY">Malaysia</li>
                                <li value="MV">Maldives</li>
                                <li value="ML">Mali</li>
                                <li value="MT">Malta</li>
                                <li value="MH">Marshall Islands</li>
                                <li value="MQ">Martinique</li>
                                <li value="MR">Mauritania</li>
                                <li value="MU">Mauritius</li>
                                <li value="YT">Mayotte</li>
                                <li value="MX">Mexico</li>
                                <li value="FM">Micronesia</li>
                                <li value="MD">Moldova</li>
                                <li value="MC">Monaco</li>
                                <li value="MN">Mongolia</li>
                                <li value="ME">Montenegro</li>
                                <li value="MS">Montserrat</li>
                                <li value="MA">Morocco</li>
                                <li value="MZ">Mozambique</li>
                                <li value="MM">Myanmar</li>
                                <li value="NA">Namibia</li>
                                <li value="NR">Nauru</li>
                                <li value="NP">Nepal</li>
                                <li value="NL">Netherlands</li>
                                <li value="NC">New Caledonia</li>
                                <li value="NZ">New Zealand</li>
                                <li value="NI">Nicaragua</li>
                                <li value="NE">Niger</li>
                                <li value="NG">Nigeria</li>
                                <li value="NU">Niue</li>
                                <li value="NF">Norfolk Island</li>
                                <li value="MP">Northern Mariana Islands</li>
                                <li value="NO">Norway</li>
                                <li value="OM">Oman</li>
                                <li value="PK">Pakistan</li>
                                <li value="PW">Palau</li>
                                <li value="PS">Palestinian Territory, Occupied</li>
                                <li value="PA">Panama</li>
                                <li value="PG">Papua New Guinea</li>
                                <li value="PY">Paraguay</li>
                                <li value="PE">Peru</li>
                                <li value="PH">Philippines</li>
                                <li value="PN">Pitcairn</li>
                                <li value="PL">Poland</li>
                                <li value="PT">Portugal</li>
                                <li value="PR">Puerto Rico</li>
                                <li value="QA">Qatar</li>
                                <li value="RE">Réunion</li>
                                <li value="RO">Romania</li>
                                <li value="RU">Russian Federation</li>
                                <li value="RW">Rwanda</li>
                                <li value="BL">Saint Barthélemy</li>
                                <li value="SH">Saint Helena</li>
                                <li value="KN">Saint Kitts and Nevis</li>
                                <li value="LC">Saint Lucia</li>
                                <li value="MF">Saint Martin (French part)</li>
                                <li value="PM">Saint Pierre and Miquelon</li>
                                <li value="VC">Saint Vincent and the Grenadines</li>
                                <li value="WS">Samoa</li>
                                <li value="SM">San Marino</li>
                                <li value="ST">Sao Tome and Principe</li>
                                <li value="SA">Saudi Arabia</li>
                                <li value="SN">Senegal</li>
                                <li value="RS">Serbia</li>
                                <li value="SC">Seychelles</li>
                                <li value="SL">Sierra Leone</li>
                                <li value="SG">Singapore</li>
                                <li value="SX">Sint Maarten (Dutch part)</li>
                                <li value="SK">Slovakia</li>
                                <li value="SI">Slovenia</li>
                                <li value="SB">Solomon Islands</li>
                                <li value="SO">Somalia</li>
                                <li value="ZA">South Africa</li>
                                <li value="GS">South Georgia and the South Sandwich Islands</li>
                                <li value="SS">South Sudan</li>
                                <li value="ES">Spain</li>
                                <li value="LK">Sri Lanka</li>
                                <li value="SD">Sudan</li>
                                <li value="SR">Suriname</li>
                                <li value="SJ">Svalbard and Jan Mayen</li>
                                <li value="SZ">Swaziland</li>
                                <li value="SE">Sweden</li>
                                <li value="CH">Switzerland</li>
                                <li value="SY">Syrian Arab Republic</li>
                                <li value="TW">Taiwan</li>
                                <li value="TJ">Tajikistan</li>
                                <li value="TZ">Tanzania</li>
                                <li value="TH">Thailand</li>
                                <li value="TL">Timor-Leste</li>
                                <li value="TG">Togo</li>
                                <li value="TK">Tokelau</li>
                                <li value="TO">Tonga</li>
                                <li value="TT">Trinidad and Tobago</li>
                                <li value="TN">Tunisia</li>
                                <li value="TR">Turkey</li>
                                <li value="TM">Turkmenistan</li>
                                <li value="TC">Turks and Caicos Islands</li>
                                <li value="TV">Tuvalu</li>
                                <li value="UG">Uganda</li>
                                <li value="UA">Ukraine</li>
                                <li value="AE">United Arab Emirates</li>
                                <li value="GB">United Kingdom</li>
                                <li value="US">United States</li>
                                <li value="UY">Uruguay</li>
                                <li value="UZ">Uzbekistan</li>
                                <li value="VU">Vanuatu</li>
                                <li value="VE">Venezuela</li>
                                <li value="VN">Viet Nam</li>
                                <li value="VG">Virgin Islands, British</li>
                                <li value="VI">Virgin Islands, U.S.</li>
                                <li value="WF">Wallis and Futuna</li>
                                <li value="EH">Western Sahara</li>
                                <li value="YE">Yemen</li>
                                <li value="ZM">Zambia</li>
                                <li value="ZW">Zimbabwe</li>
                            </ul>
                        </div>
                    </div>



                    <div class="submit-line-btn">
                        <button type="submit"><a href="#">submit <i class="fas fa-chevron-right"></i></a></button>
                    </div>


                </form>
            </div>

            <div class="container footer">
                <div class="footer-item sitemap">
                    <h5>Sitemap</h5>
                    <div class="footer-subitem">
                        <a href="index.html">Home</a><br/>
                        <a href="#">Merchants</a><br/>
                        <a href="promotions.html">Promotions</a><br/>
                        <a href="faq.html">FAQs</a><br/>
                    </div>
                </div>
                <div class="footer-item my-account">
                    <h5>My Account</h5>
                    <div class="footer-subitem">
                        <a href="edit-profile.html">Edit Your Details</a><br/>
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


        <script src="js/dropdown.js"></script>
        
    </body>
</html>
