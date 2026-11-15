<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Cookie yaratish: 5 daqiqa (300 soniya)
$cookie_expire = time() + 5;

if ($username == "admin") {
    setcookie("user", "admin", $cookie_expire);
    header("Location: admin.php");
    exit();
} elseif ($username == "user") {
    setcookie("user", "user", $cookie_expire);
    header("Location: user.php");
    exit();
} else {
    echo "Login noto‘g‘ri! <a href='login.php'>Qaytish</a>";
}
