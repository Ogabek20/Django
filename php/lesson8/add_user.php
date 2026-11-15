<?php
$host = "localhost";
$username = "root";
$password = "password";
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
