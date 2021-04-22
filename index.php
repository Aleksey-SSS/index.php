<!-- Код для погоды-->
<?php
// API ключ с профиля
$apiKey = "c7f16d7eca99fc45a11bad8057e4cc68";
// город
$city = "Ульяновск";
// ссылка для запроса
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=ru&units=metric&appid=" . $apiKey;
// создание запроса
$ch = curl_init();

// настройка запроса
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// отправка и получение ответа от сайта
$data = json_decode(curl_exec($ch));

// конец запроса
curl_close($ch);

?>

<h1> Текущее время : <?=date("H:i")?></h1>   <!-- Виджет времени-->

<html lang="ru">
<head>
    <meta charset = "UTF-8">
</head>
<body>
<div class="weather" style="text-align: center;margin-left: auto;margin-right: auto;width: 20em ; font-weight:bold ; font-size: 23px;" >

    <!-- создание формы  погоды на сайте -->
    <div class="weather" >

        <h2>Погода в городе <?php echo $data->name; ?></h2>
        <p>Температура: <?php echo $data->main->temp_min; ?>°C</p>
        <p>Влажность: <?php echo $data->main->humidity; ?> %</p>
        <p>Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
        <p>Погода: <?php echo $data->weather[0]->description; ?> </p>
        <p>Давление: <?php echo $data->main->pressure; ?> мм рт. ст.</p>

    </div>

    <div class="calculate-form" style="text-align: center;margin-left: auto;margin-right: auto;width: 20em ;">
        <h1>Калькулятор</h1>
        <!-- форма калькулятора -->

        <form action="" method="post" class="calculate-form">

            <input type="text" name="number1" class="numbers" placeholder="Первое число"> <!-- поле первого числа -->
            <br>
            <select class="operations" name="operation"> <!-- список действий -->
                <option value='plus'>+ </option>
                <option value='minus'>- </option>
                <option value="multiply">* </option>
                <option value="divide">/ </option>
            </select>
            <br>
            <input type="text" name="number2" class="numbers" placeholder="Второе число"> <!-- поле второго числа -->
            <br>

            <input class="submit_form" type="submit" name="submit" value="Получить ответ">

        </form>
</body>
</html>

<style>
    body {
        background: #0000FF url(https://img.blago.tube/2iL0000/img.jpg); /* фон */
        color: #FFFFFF; /* Цвет текста */
    }
</style>
</body>
</html>

<!-- Код для калькулятора-->
<?php
if(isset($_POST['submit'])) {
// инициализация
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    // Валидация ( проверка )  на заполнение полей
    if (!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
        $error_result = 'Не все поля заполнены';
    } // если все поля заполнены проверка на числа
    else {
        if (!is_numeric($number1) || !is_numeric($number2)) { //если не число то выдаем ошибку
            $error_result = "Операнды должны быть числами";
        } else //  иначе
            switch ($operation) { // проверка на выбранное действие
                case 'plus': // если плюс то
                    $result = $number1 + $number2;
                    break;
                case 'minus': // если минус то
                    $result = $number1 - $number2;
                    break;
                case 'multiply': // если деление то
                    $result = $number1 * $number2;
                    break;
                case 'divide': // если умножение то
                    if ($number2 == '0') // проверка на ноль
                        $error_result = "На ноль делить нельзя";
                    else
                        $result = $number1 / $number2; // если второе значение не ноль то выполняем
                    break;
            }
    }
    if (isset($error_result)) {
        echo "Ошибка: $error_result";
    } else {
        echo "Ответ: $result";
    }
}
?>