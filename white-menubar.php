<?php
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
}
?>
<nav id="navigation-bar">
    <div class="hamburger-menu nav-left hidden-xs">
        <div class="button" id="btn">
            <div class="top bar"></div>
            <div class="middle bar"></div>
            <div class="bottom bar"></div>
        </div>
    </div>

    <div id="logo"><a href="index.php"><img id="logo-img" src="img/logo-black.png"></a></div>

    <button id="search-bar" onclick="openSearch()"><i class="fas fa-search"></i></button>

    <div id="myOverlay" class="overlay">

        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">
            <span class="stroke left"></span>
            <span class="stroke right"></span>
        </span>

        <div class="overlay-content" method="post">
            <form method="post" action="products.php">
                <input name="search_item" type="text" placeholder="Search for products...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>