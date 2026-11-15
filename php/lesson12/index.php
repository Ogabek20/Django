<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email manzilingiz to'g'ri: $email";
    } else {
        echo "Xatolik: Email manzili noto'g'ri formatda!";
    }
}
?>

<form method="post">
    Email: <input type="text" name="email">
    <input type="submit" name="submit" value="Yuborish">
</form>
<br>
<br><br>

<?php
$ism = "";
$yosh = "";
$xato = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ism'])) {
        $ism = $_POST['ism'];
        if (!ctype_alpha($ism)) {
            $xato .= "Ism faqat harflardan iborat bo'lishi kerak.<br>";
        }
    }

    if (isset($_POST['yosh'])) {
        $yosh = $_POST['yosh'];
        if (!is_numeric($yosh)) {
            $xato .= "Yosh faqat son bo'lishi kerak.<br>";
        }
    }

    if ($xato) {
        echo $xato;
    } else {
        echo "Ism: $ism<br>Yosh: $yosh";
    }
}
?>

<form method="post">
    Ism: <input type="text" name="ism"><br>
    Yosh: <input type="text" name="yosh"><br>
    <input type="submit" value="Yuborish">
</form>
<br>
<br>
<br>





<?php
$id = "";
$ism = "";
$familya = "";
$xatolik = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        if (!is_numeric($id)) {
            $xatolik .= "ID faqat son bo'lishi kerak.<br>";
        }
    }

    if (isset($_POST['ism'])) {
        $ism = $_POST['ism'];
        if (!ctype_alpha($ism)) {
            $xatolik .= "Ism faqat harflardan iborat bo'lishi kerak.<br>";
        }
    }

    if (isset($_POST['familya'])) {
        $familya = $_POST['familya'];
        if (!ctype_alpha($familya)) {
            $xatolik .= "Familya faqat harflardan iborat bo'lishi kerak.<br>";
        }
    }

    if ($xatolik) {
        echo $xatolik;
    } else {
        echo "ID: $id<br>Ism: $ism<br>Familya: $familya";
    }
}
?>

<form method="post">
    ID: <input type="text" name="id"><br>
    Ism: <input type="text" name="ism"><br>
    Familya: <input type="text" name="familya"><br>
    <input type="submit" value="Yuborish">
</form>
