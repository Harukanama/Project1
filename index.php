<?php
echo ' - is_numeric(123.123) ' . var_dump(is_numeric(123.123)) . '<br>';
echo ' - is_numeric(123) ' . var_dump(is_numeric(123)) . '<br>';
echo ' - is_numeric("qwe") ' . var_dump(is_numeric("qwe")) . '<br>';

echo '<br>';

echo ' - is_int(123.123) ' . var_dump(is_int(123.123)) . '<br>';
echo ' - is_int(123) ' . var_dump(is_int(123)) . '<br>';
echo ' - is_int("qwe") ' . var_dump(is_int("qwe")) . '<br>';

echo '<br>';

echo ' - is_float(123.123) ' . var_dump(is_float(123.123)) . '<br>';
echo ' - is_float(123) ' . var_dump(is_float(123)) . '<br>';
echo ' - is_float("qwe") ' . var_dump(is_float("qwe")) . '<br>';

echo '<br>';
echo '<br>';

echo 'round(12.6) = ' . round(12.6) . '<br>';
echo 'ceil(12.6) = ' . ceil(12.6) . '<br>';
echo 'floor(12.6) = ' . floor(12.6) . '<br>';


function r($number, $symbol_before = 2){
    return round($number, $symbol_before);
}
echo '<br>' . r(42.43752);

echo '<br>';
echo '<br>';

echo '4252 - ' . decbin(4252) . '<br>';
echo '89090 - ' . decbin(89090) . '<br>';