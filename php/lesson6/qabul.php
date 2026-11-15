<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Natija</title>
</head>
<body>
    <h2>Kiritilgan Ma'lumotlar:</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ism = htmlspecialchars($_POST["ism"]);
        $familiya = htmlspecialchars($_POST["familiya"]);

        echo "<p>Ism: $ism</p>";
        echo "<p>Familiya: $familiya</p>";
    } else {
        echo "<p>Ma'lumot yuborilmadi.</p>";
    }
    ?>
    <br><br><br>










    
    <h2>Yuborilgan Talaba Ma'lumotlari:</h2>

    <?php
    // Formadan kelgan ma'lumotlarni olish
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = htmlspecialchars($_POST['id'] ?? '');
        $ism = htmlspecialchars($_POST['ism'] ?? '');
        $familiya = htmlspecialchars($_POST['familiya'] ?? '');
        $viloyat = htmlspecialchars($_POST['viloyat'] ?? '');

        // Ma'lumotlarni chiqarish
        echo "<p><strong>Talaba ID:</strong> $id</p>";
        echo "<p><strong>Ismi:</strong> $ism</p>";
        echo "<p><strong>Familiyasi:</strong> $familiya</p>";
        echo "<p><strong>Viloyati:</strong> $viloyat</p>";
    } else {
        echo "<p>Ma'lumot yuborilmadi!</p>";
    }
    ?>






<br><br><br><br>

    



<?php
// Foydalanuvchi formani yuborganligini tekshirish
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // POST orqali kelgan login va parolni olish
    $login = $_POST['login'] ?? '';
    $parol = $_POST['parol'] ?? '';

    // HTML xavfsizligi uchun tozalash (zarur emas, lekin tavsiya etiladi)
    $login = htmlspecialchars(trim($login));
    $parol = htmlspecialchars(trim($parol));

    // Login va parol bir xil bo‘lsa, tizimga kirgan bo‘ladi
    if ($login === $parol && $login !== '') {
        echo "<h2 style='color: green;'>✅ Siz tizimga kirdingiz!</h2>";
    } else {
        echo "<h2 style='color: red;'>❌ Login yoki parol noto‘g‘ri!</h2>";
    }

} else {
    // POST orqali yuborilmagan bo‘lsa
    echo "<p style='color: orange;'>Ma'lumot yuborilmadi. Iltimos, formani to'g'ri to'ldiring.</p>";
}
?>

</body>
</html>