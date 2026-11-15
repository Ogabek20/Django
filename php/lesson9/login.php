<?php
// Cookie tekshiruvi: foydalanuvchi allaqachon tizimga kirganmi?
if (isset($_COOKIE['user'])) {
    if ($_COOKIE['user'] == 'admin') {
        header("Location: admin.php");
        exit();
    } elseif ($_COOKIE['user'] == 'user') {
        header("Location: user.php");
        exit();
    }
}
?>

<h2>Login Formasi</h2>
<form action="check_login.php" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Parol:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Kirish">
</form>
