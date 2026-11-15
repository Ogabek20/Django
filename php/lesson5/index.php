    <?php
    echo 'Hello world';
    ?>
    <?php
    $numbers=[1,2,10,9,12,15,20,30];
    echo $numbers[2];
    echo '<br>';
    rsort($numbers);
    print_r($numbers);
    echo '<br>';
    foreach($numbers as $number){
        echo $number;
        echo '<br>';
    }

    ?>
    <br>
    <br>
    <br>



    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mevalar ro'yxati</title>
</head>
<body>

<h2>Mevalar ro'yxati</h2>

<ol>
<?php

$fruits = ["Olma", "Nok", "Banan", "Uzum", "Anor"];


$fruits[] = "Apelsin";
$fruits[] = "Kivi";


$fruits[1] = "Gilos";     
$fruits[3] = "Qulupnay";  


foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
?>
</ol>

<br><br><br>





<ol>
<?php

$months = [
    "Yanvar", "Fevral", "Mart", "Aprel", "May", "Iyun",
    "Iyul", "Avgust", "Sentyabr", "Oktyabr", "Noyabr", "Dekabr"
];


foreach ($months as $month) {
    echo "<li>$month</li>";
}
?>
</ol>

<br><br><br>


<?php
// 1. Talabalar nomli assotsiativ array
$talabalar = [
    [
        "id" => 1,
        "ismi" => "Ali",
        "yoshi" => 20
    ],
    [
        "id" => 2,
        "ismi" => "Vali",
        "yoshi" => 21
    ],
    [
        "id" => 3,
        "ismi" => "Gulnora",
        "yoshi" => 22
    ],
    [
        "id" => 4,
        "ismi" => "Jamshid",
        "yoshi" => 19
    ],
    [
        "id" => 5,
        "ismi" => "Dilnoza",
        "yoshi" => 23
    ]
];


echo "<h2>Talabalar ro'yxati</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Ismi</th><thYoshi</th></tr>";

foreach ($talabalar as $talaba) {
    echo "<tr>";
    echo "<td>{$talaba['id']}</td>";
    echo "<td>{$talaba['ismi']}</td>";
    echo "<td>{$talaba['yoshi']}</td>";
    echo "</tr>";
}

echo "</table>";
?>

<br><br><br>

<?php
// 1. Yangiliklar nomli assotsiativ array
$yangiliklar = [
    [
        "sarlavha" => "Talabalar uchun yangi grantlar e’lon qilindi",
        "batafsil" => "2025-yil bahor semestri uchun 100 dan ortiq yangi grantlar taqdim etiladi."
    ],
    [
        "sarlavha" => "Universitet kutubxonasi yangilandi",
        "batafsil" => "Yangi elektron resurslar va kitoblar bilan boyitilgan kutubxona ochildi."
    ],
    [
        "sarlavha" => "Programmalash bo‘yicha musobaqa bo‘lib o‘tdi",
        "batafsil" => "30 dan ortiq jamoa qatnashgan musobaqada 1-o‘rinni TATU talabalari oldi."
    ],
    [
        "sarlavha" => "Yozgi amaliyot uchun ro‘yxatdan o‘tish boshlandi",
        "batafsil" => "Talabalar 15-maygacha yozgi amaliyot dasturiga yozilishlari mumkin."
    ],
    [
        "sarlavha" => "Yangi o‘quv binosi foydalanishga topshirildi",
        "batafsil" => "Zamonaviy texnologiyalar bilan jihozlangan binoda 10 ta auditoriya mavjud."
    ]
];

// 2. HTML ko‘rinishda chiqarish
echo "<h2>So‘nggi yangiliklar</h2>";
foreach ($yangiliklar as $news) {
    echo "<h3>{$news['sarlavha']}</h3>";
    echo "<p>{$news['batafsil']}</p>";
    echo "<hr>";
}
?>



















<br><br><br>
<?php

function chiqarish() {
    echo "Funksiya ishladi";
}



chiqarish();
?>




<br><br><br>
<?php
// 1. Funksiya e'lon qilinmoqda
function summa($a, $b) {
    $yigindi = $a + $b;
    echo "Yig‘indi: $yigindi";
}


summa(28, 7); 
?>








<br><br><br>

<?php
// 1. Talabalar ro'yxatini yaratish
$talabalar = [
    ["id" => 1, "ismi" => "Ali",     "guruhi" => "A101"],
    ["id" => 2, "ismi" => "Gulnora", "guruhi" => "B202"],
    ["id" => 3, "ismi" => "Vali",    "guruhi" => "A101"],
    ["id" => 4, "ismi" => "Dilnoza", "guruhi" => "C303"],
    ["id" => 5, "ismi" => "Jamshid", "guruhi" => "B202"]
];

// 2. Talabalarni guruh bo'yicha filterlovchi funksiya
function filterByGroup($students, $group) {
    echo "<h3>$group guruhidagi talabalar:</h3>";
    echo "<ul>";
    foreach ($students as $talaba) {
        if ($talaba['guruhi'] === $group) {
            echo "<li>ID: {$talaba['id']}, Ismi: {$talaba['ismi']}</li>";
        }
    }
    echo "</ul>";
}

// 3. Misol uchun A101 guruhidagi talabalarni chiqarish
filterByGroup($talabalar, "A101");


?>










</body>
</html>
