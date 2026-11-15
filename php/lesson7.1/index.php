<?php
$host = "localhost";
$username = "root";
$password = "password"; // XAMPP uchun odatda bo'sh
$dbname = "asaxy";

// MySQLga ulanish
$conn = new mysqli($host, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Foydalanuvchilarni olish
$sql = "SELECT * FROM foydalanuvchilar";
$result = $conn->query($sql);

// Jadvalni chiqarish
echo "<h2>Foydalanuvchilar Ro'yxati</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Ismi</th><th>Familyasi</th><th>Telefon</th><th>Viloyat</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['ismi']}</td>
            <td>{$row['familyasi']}</td>
            <td>{$row['tel_raqami']}</td>
            <td>{$row['viloyati']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Hozircha ma'lumot yo'q</td></tr>";
}
echo "</table>";

$conn->close();
?>
<br>
<a href="form.html">Yangi foydalanuvchi qo‘shish</a>

<h2>Foydalanuvchi qo‘shish formasi</h2>
<form action="add_user.php" method="POST">
    <label>Ism:</label><br>
    <input type="text" name="ismi" required><br><br>
    
    <label>Familiya:</label><br>
    <input type="text" name="familyasi" required><br><br>
    
    <label>Telefon raqami:</label><br>
    <input type="text" name="tel_raqami" required><br><br>
    
    <label>Viloyati:</label><br>
    <input type="text" name="viloyati" required><br><br>
    
    <input type="submit" value="Qo‘shish">
</form>




<?php
$host = "localhost";
$username = "root";
$password = "pasword";
$dbname = "asaxy";

// Ulanish
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Formadagi ma'lumotlarni olish
$ismi = $_POST['ismi'];
$familyasi = $_POST['familyasi'];
$tel_raqami = $_POST['tel_raqami'];
$viloyati = $_POST['viloyati'];

// Jadvalga qo‘shish
$sql = "INSERT INTO foydalanuvchilar (ismi, familyasi, tel_raqami, viloyati)
        VALUES ('$ismi', '$familyasi', '$tel_raqami', '$viloyati')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Foydalanuvchi muvaffaqiyatli qo‘shildi.<br>";
    echo "<a href='index.php'>Ro'yxatga qaytish</a>";
} else {
    echo "❌ Xatolik: " . $conn->error;
}

$conn->close();
?>

