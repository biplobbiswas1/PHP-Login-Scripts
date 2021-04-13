<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
?>

<html>

<body>

    <div style="text-align:right">
        <a href="logout.php">Logout</a>
    </div>

    This is a sample content on page-1. This page content is only available for login users.
    <br>
    <a href="page-2.php">Go to page-2</a>

</body>

</html>
