<?php


session_start();

if (!isset($_SESSION['logged']) || $_SESSION['role'] !== 'admin') {
    // Redirect them to login page or show an error
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <title>Gerer cours</title>
    <link rel="stylesheet" href="dashboardAdmin.css">
    <link rel="stylesheet" href="manageCours.css">
</head>
<body>
    <div class="dash-title">
        <h1>Gerer les cours</h1>
        <button class="disconnectBtn" onclick="location.href='../logout.php'">Se deconnecter</button>
        <div id="failed" class="error-alert" hidden></div>

    </div>
    <!-- Side Navigation Menu -->
    <div class="side-nav">
        <img src="../pfp.png">
        <h2><?php echo $_SESSION['nom_complet']; ?></h2>
        <h4><?php echo $_SESSION['role']; ?></h4>
        <a href="dashboardAdmin.php" id="dashboard-link">Dashboard</a>
        <a href="manageUsers.php" id="manage-users-link">Gerer les utilisateurs<span id="notif" hidden>!</span></a>
        <a href="manageCours.php" id="manage-cours-link">Gerer les cours</a>
        <a href="addUsers.php" id="addUsers-link">Ajouter utilisateurs</a>
        <a href="../logout.php">Se deconnecter</a>
    </div>
    
    <div class="tables-cont">
        <div class="contn">
        <h2>Liste des cours</h2>
        <div id="cours" class="table-wrapper"></div>
        </div>
    </div>

</body>
<script src="../../scripts/manageCoursAdmin.js"></script>

<footer class="footer">
    Copyright © 2024 ENSA Tetouan.
</footer>
</html>


<script type="text/javascript">
    // Get the current page URL
    const currentPageUrl = window.location.href;

    // Get the sidebar links
    const sidebarLinks = document.querySelectorAll('.side-nav a');

    // Loop through the sidebar links
    sidebarLinks.forEach(link => {
        // Check if the link href matches the current page URL
        if (link.href === currentPageUrl) {
            // Add a class to highlight the selected link
            link.classList.add('selected');
        }
    });
</script>