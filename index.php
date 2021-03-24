<?php
$text = preg_replace("/(?![=$'€%-])\p{P}/u", "", mb_strtolower("купил мужик шляпу, а она ему как раз"));
$length_char = iconv_strlen($text);

$words = explode(' ', $text);
$word_count = count($words);


$words_met = [];

echo $text."<br>";
echo "<br>Количество символов: ".$length_char;
echo "<br>Количество слов: ".$word_count."<br>";

for ($i = 0; $i <= $word_count; $i++) {
    $sum = 0;
    for($j = 0; $j <= $word_count; $j++){
        if($words[$i] === $words[$j]){
            $sum++;
            $words_met[$words[$j]] = $sum;
        }
    }
}
array_pop($words_met );
foreach ( $words_met as $key => $val ) {
    echo " {$key}"." {$val} <br>" . PHP_EOL;
}
