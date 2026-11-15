<?php
// 1. MySQLga ulanish
$conn = new mysqli('localhost', 'root', 'password', 'narsa');  

if ($conn->connect_error) {
    die("Bog'lanishda xatolik: " . $conn->connect_error);
}

// 2. Yangi mahsulot qo'shish (Create)
if (isset($_POST['add'])) {
    $nomi = $conn->real_escape_string(trim($_POST['nomi']));
    $soni = intval($_POST['soni']);
    $narxi = floatval($_POST['narxi']);

    $sql = "INSERT INTO mahsulotlar (nomi, soni, narxi) VALUES ('$nomi', $soni, $narxi)";
    if ($conn->query($sql) === TRUE) {
        echo "Yangi mahsulot qo'shildi.<br>";
    } else {
        echo "Xatolik: " . $conn->error . "<br>";
    }
}

// 3. Mahsulotni o'chirish (Delete)
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM mahsulotlar WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Mahsulot o'chirildi.<br>";
    } else {
        echo "Xatolik: " . $conn->error . "<br>";
    }
}

// 4. Mahsulotni yangilash (Update)
if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $nomi = $conn->real_escape_string(trim($_POST['nomi']));
    $soni = intval($_POST['soni']);
    $narxi = floatval($_POST['narxi']);

    $sql = "UPDATE mahsulotlar SET nomi='$nomi', soni=$soni, narxi=$narxi WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Mahsulot ma'lumotlari yangilandi.<br>";
    } else {
        echo "Xatolik: " . $conn->error . "<br>";
    }
}

// 5. Mahsulotlarni ko'rsatish (Read)
$result = $conn->query("SELECT * FROM mahsulotlar");

?>

<h2>Mahsulotlar ro'yxati</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nomi</th>
        <th>Soni</th>
        <th>Narxi</th>
        <th>Amallar</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nomi']) ?></td>
            <td><?= $row['soni'] ?></td>
            <td><?= $row['narxi'] ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>">Tahrirlash</a> |
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Haqiqatan ham o‘chirilsinmi?')">O'chirish</a>
            </td>
        </tr>
    <?php } ?>
</table>

<hr>

<?php
// Agar edit parametri bo‘lsa, tahrirlash formasini ko‘rsatamiz
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $res = $conn->query("SELECT * FROM mahsulotlar WHERE id = $id");
    if ($res->num_rows == 1) {
        $edit_row = $res->fetch_assoc();
        ?>
        <h2>Mahsulotni tahrirlash</h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?= $edit_row['id'] ?>">
            Nomi: <input type="text" name="nomi" value="<?= htmlspecialchars($edit_row['nomi']) ?>" required><br><br>
            Soni: <input type="number" name="soni" value="<?= $edit_row['soni'] ?>" required><br><br>
            Narxi: <input type="text" name="narxi" value="<?= $edit_row['narxi'] ?>" required><br><br>
            <input type="submit" name="update" value="Saqlash">
        </form>
        <hr>
        <?php
    } else {
        echo "Mahsulot topilmadi.";
    }
}
?>

<h2>Yangi mahsulot qo'shish</h2>
<form method="post" action="">
    Nomi: <input type="text" name="nomi" required><br><br>
    Soni: <input type="number" name="soni" required><br><br>
    Narxi: <input type="text" name="narxi" required><br><br>
    <input type="submit" name="add" value="Qo'shish">
</form>

<?php
$conn->close();
?>
