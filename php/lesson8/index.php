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