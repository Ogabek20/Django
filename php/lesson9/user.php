<?php
if (!isset($_COOKIE['user']) || $_COOKIE['user'] != 'user') {
    header("Location: login.php");
    exit();
}
?>
<h2>Foydalanuvchi Sahifasi</h2>
<p>Xush kelibsiz, user!</p>
