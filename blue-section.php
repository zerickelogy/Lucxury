<?php
session_start();
if (!isset($_SESSION['username'])) {
//    header('Location: ./login.php');
    
}
?>
<script>
    $(document).ready(function(){
        console.log('<?php echo $_SESSION['username']; ?>');
    });

</script>
<div class="sidebar">
    <div class="sidebar-item user-id"><i class="fas fa-user"></i><a href="#">Hello, <?php echo $_SESSION["username"]; ?></a></div>

    <div class="sidebar-item category cat-selector"><a href="#">Men</a><a href="#">Women</a></div>

    <ul class="sidebar-list">
        <li class="sidebar-item"><a href="https://lucxury.com/lucxury_wp/" class="sidebar-anchor">News / Media</a></li>
        <li class="sidebar-item"><a href="promotions.php" class="sidebar-anchor">Promotions</a></li>
        <li class="sidebar-item"><a href="faq.php" class="sidebar-anchor">FAQs</a></li>
        <li class="sidebar-item"><a href="edit-profile.php" class="sidebar-anchor">Edit profile</a></li>
    </ul>


    <div class="sidebar-item logout-btn"><a href="#">Logout</a></div>

</div>
