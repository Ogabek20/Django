<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talabaning Ismi va Familiyasi</title>
</head>
<body>
    <h2>Talabaning Ismi va Familiyasi</h2>
    <form action="qabul.php" method="POST">
        <label for="ism">Ismi:</label><br>
        <input type="text" id="ism" name="ism" required><br><br>
        <label for="familiya">Familiyasi:</label><br>
        <input type="text" id="familiya" name="familiya" required><br><br>
        <input type="submit" value="Ma'lumotlarni Yuborish">
    </form>
</body>
</html>
<?php
    // Formadan ma'lumotlarni olish
    $ism = $_POST['ism'] ?? '';
    $familiya = $_POST['familiya'] ?? '';

    // Ma'lumotlarni ekranga chiqarish
    echo "<h2>Kirilgan Ma'lumotlar:</h2>";
    echo "<p><b>Ismi:</b> $ism</p>";
    echo "<p><b>Familiyasi:</b> $familiya</p>";
?>
<br><br><br><br><br>




<h2>Talaba Ma'lumotlarini Kiriting</h2>
    <form action="qabul.php" method="POST">
        <label for="id">Talaba ID:</label><br>
        <input type="number" id="id" name="id" required><br><br>

        <label for="ism">Ismi:</label><br>
        <input type="text" id="ism" name="ism" required><br><br>

        <label for="familiya">Familiyasi:</label><br>
        <input type="text" id="familiya" name="familiya" required><br><br>

        <label for="viloyat">Viloyati:</label><br>
        <select id="viloyat" name="viloyat" required>
            <option value="">Tanlang</option>
            <option value="Toshkent">Toshkent</option>
            <option value="Samarqand">Samarqand</option>
            <option value="Buxoro">Buxoro</option>
            <option value="Farg'ona">Farg'ona</option>
            <option value="Andijon">Andijon</option>
            <option value="Qashqadaryo">Qashqadaryo</option>
            <!-- Yana boshqa viloyatlarni qo‘shishingiz mumkin -->
        </select><br><br>

        <input type="submit" value="Yuborish">
    </form>

    <?php
// Formadan kelgan ma'lumotlarni olish
$id = $_POST['id'] ?? '';
$ism = $_POST['ism'] ?? '';
$familiya = $_POST['familiya'] ?? '';
$viloyat = $_POST['viloyat'] ?? '';

// Ma'lumotlarni chiqarish
echo "<h2>Talaba Ma'lumotlari:</h2>";
echo "<p><b>ID:</b> $id</p>";
echo "<p><b>Ismi:</b> $ism</p>";
echo "<p><b>Familiyasi:</b> $familiya</p>";
echo "<p><b>Viloyati:</b> $viloyat</p>";
?>
<br><br><br><br><br>





<h2>Talaba Ro'yxatdan O'tish Formasi</h2>

<form action="qabul.php" method="POST">
    <label for="login">Login (Talabaning ismi):</label><br>
    <input type="text" id="login" name="login" required><br><br>

    <label for="parol">Parol (Talabaning ID raqami):</label><br>
    <input type="text" id="parol" name="parol" required><br><br>

    <input type="submit" value="Kirish">
</form>

<?php
    // Foydalanuvchidan kelgan login va parolni olish
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $login = $_POST['login'] ?? '';
        $parol = $_POST['parol'] ?? '';

        // HTML xavfsizligini ta'minlash
        $login = htmlspecialchars($login);
        $parol = htmlspecialchars($parol);

        // Shart: login = ism, parol = ID bo'lishi va ikkalasi bir xil bo'lishi kerak
        if ($login === $parol && $login !== '') {
            echo "<h2 style='color:green;'>✅ Siz tizimga kirdingiz!</h2>";
        } else {
            echo "<h2 style='color:red;'>❌ Login yoki parol noto‘g‘ri!</h2>";
        }
    } else {
        echo "<p>Ma'lumot yuborilmadi.</p>";
    }
    ?>
  