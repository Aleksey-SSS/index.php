<?php
$str = 'Улитка заходит в бар, но бармен заявляет: У нас строгая политика в отношении улиток! - и ногой выпихивает ее на улицу. Через неделю улитка возвращается в бар и говорит бармену: Ну и нахуя ты это сделал!?';
$slova = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя:!?.-');
$words = array_unique($slova);
echo $str. PHP_EOL;
echo "Общая статистика по тексту:". PHP_EOL;

$count = count($slova);
$slova_count = [];
foreach ($slova as $slovo) {
    preg_match_all('~\b' . $slovo . '\b~iu', $str, $slova_count[$slovo]);
}
foreach ($slova_count as $slovo => $slovo_count) {
    $entry_count = count($slovo_count[0]);
    echo "Слово <{$slovo}> встречается - {$entry_count} раза" . PHP_EOL;
}
echo "Общее кол-во слов = {$count}";
