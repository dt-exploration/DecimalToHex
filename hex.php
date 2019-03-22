<?php

$hex_array = array('0' => '0',
                   '1' => '1',
                   '2' => '2',
                   '3' => '3',
                   '4' => '4',
                   '5' => '5',
                   '6' => '6',
                   '7' => '7',
                   '8' => '8',
                   '9' => '9',
                  '10' => 'A',
                  '11' => 'B',
                  '12' => 'C',
                  '13' => 'D',
                  '14' => 'E',
                  '15' => 'F');

function hexmap($num)
{
     global $hex_array;
     return $hex_array[$num];
}

$num = 125478;

function decimalToHex($num)
{
    $first = floor($num / 16);
    $second = $num % 16;

    if ($first < 16) {
        return hexmap($first).hexmap($second);
    } else {
        $result = decimalToHex($first).hexmap($second);
        return $result;
    }
}

echo decimalToHex($num);

?>
