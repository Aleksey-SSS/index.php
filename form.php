<?php
// API ключ
$apiKey = "8f1b0c52f868f9c2d9ab922254c0d4f5";
// Город погода которого нужна
$city = "";
// Ссылка для отправки
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=ru&units=metric&appid=" . $apiKey;
// Создаём запрос
$ch = curl_init();

// Настройка запроса
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// Отправляем запрос и получаем ответ
$data = json_decode(curl_exec($ch));

// Закрываем запрос
curl_close($ch);
?>
<div class="weather">
    <h2>Погода в городе <?php echo $data->name; ?></h2>
    <p>Погода: <?php echo $data->main->temp_min; ?>°C</p>
    <p>Влажность: <?php echo $data->main->humidity; ?> %</p>
    <p>Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
</div>
