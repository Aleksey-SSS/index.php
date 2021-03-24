<?php
$arr1 = [
    'Рем' => 1,
    'Нэдзуко Камадо' => 2,
    'Мику Накано' => 3,
    'Тика Фудзивара' => 4,
    'Кагуя Синомия' => 5,
    'Сэнко' => 6,
    'Сатова Ходзуки' => 7,
    'Милим Нава' => 8,
    'Эмма' => 9,
    'Рафталия' => 10,
];

$arr2 = [
    'Висп' => 1,
    'ПАДЖ' => 2,
    'Дровка' => 3,
    'Тинкер' => 4,
    'Течес' => 5,
    'Шторм' => 6,
    'ЦМ' => 7,
    'Дазл' => 8,
    'Магнус' => 9,
    'Марс' => 10,
];

$arr3 = [
    'Молчи' => 1,
    'Мальчик' => 2,
    'ЛБТД' => 3,
    'Мелочь' => 4,
    'Трахаюсь' => 5,
    'Подруга' => 6,
    'Не учи' => 7,
    'Грязь' => 8,
    'Малолетка' => 9,
    'Танцуй' => 10,
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <title>Фон</title>
    <style>
        body {
            background: #0000FF url(https://static2.aniimg.com/upload/20170527/602/e/j/v/ejvFEF.jpg); /* Цвет фона и путь к файлу */
            color: #FFFFFF; /* Цвет текста */
        }
    </style>
</head>
<body>


<form>
<div>
<?php
foreach ($arr1 as $waify=>$waify_count) {
    echo  '<pre > Вайфу ' .$waify . ' под номером '. $waify_count  ;

    ?>
<?php }?>
</div> <br>


<div> <?php
    foreach ($arr2 as $dota=>$dota_count) {
        echo  '<pre> Персонаж ' .$dota . ' под номером '. $dota_count  ;
    ?>
    <?php }?>
  </div>  <br>


<div>   <?php   foreach ($arr3 as $kiskis=>$kiskis_count) {
    echo  '<pre> Трек кис-кис ' .$kiskis . ' под номером '. $kiskis_count  ;

    ?>

<?php }?>
</div>  <br>
</form>

</body>
</html>