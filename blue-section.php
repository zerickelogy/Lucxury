<?php
session_start();
if ($_SESSION['user_type'] == "admin") {
}
?>
<div class="sidebar">
    <div class="sidebar-item user-id"><i class="fas fa-user"></i><a href="#">Hello, <?php echo $_SESSION["username"]; ?></a></div>

    <!--<div class="sidebar-item category cat-selector"><a href="#">Men</a><a href="#">Women</a></div>-->

    <ul id="sidebar-list" class="sidebar-list">
        <li class="sidebar-item"><a href="https://lucxury.com/lucxury_wp/" class="sidebar-anchor">News / Media</a></li>
        <li class="sidebar-item"><a href="promotions.php" class="sidebar-anchor">Promotions</a></li>
        <li class="sidebar-item"><a href="faq.php" class="sidebar-anchor">FAQs</a></li>
        <li class="sidebar-item"><a href="edit-profile.php" class="sidebar-anchor">Edit profile</a></li>
    </ul>


    <div class="sidebar-item logout-btn"><a onclick="logout()" href="#">Logout</a></div>

</div>


<script>
    $(document).ready(function () {
        console.log('<?php echo $_SESSION['user_type']; ?>');
        if ('<?php echo $_SESSION['user_type']; ?>' == "admin") {
            $('#sidebar-list').append('<li class="sidebar-item"><a href="./admin_dashboard.php" class="sidebar-anchor">Admin dashboard</a></li>');
        }
    });

    function logout() {
        $.ajax({
            type: "GET",
            url: "./Webservices/sessionController.php",
            data: {logout: true},
            cache: false,
//                    dataType: "JSON",
            success: function (response) {
                event.preventDefault();
                // console.log(response);
                window.location.href = "./login.php";
            },
            error: function (obj, textStatus, errorThrown) {
                event.preventDefault();
                // console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
    }

</script>
