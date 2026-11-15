<?php
if (!isset($_COOKIE['user']) || $_COOKIE['user'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>
<h2>Admin Sahifasi</h2>
<p>Xush kelibsiz, admin!</p>
