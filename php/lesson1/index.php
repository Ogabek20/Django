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




