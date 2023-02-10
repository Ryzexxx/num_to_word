<?php

function numberToWords($number) {
    $ones = array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
    $tens = array("", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");

    if ($number < 20) {
        return $ones[$number];
    } else if ($number < 100) {
        return $tens[intval($number / 10)] . (($number % 10 != 0) ? "-" . $ones[$number % 10] : "");
    } else if ($number < 1000) {
        if ($number % 100 == 0) {
            return $ones[intval($number / 100)] . " hundreds";
        } else {
            return $ones[intval($number / 100)] . " hundreds and " . numberToWords($number % 100);
        }
    } else if ($number < 10000) {
        $thousands = ($number >= 2000) ? "s, " : ", ";
        return numberToWords(intval($number / 1000)) . " thousand" . $thousands . numberToWords($number % 1000);
    } else {
        return "Number is too large to be converted to words";
    }
}

if ($argc < 2) {
    echo "Error: Missing argument";
    exit(1);
}

$number = intval($argv[1]);
if ($number < 0 || $number >= 10000) {
    echo "Error: Invalid argument. Must be between 0 and 9999.";
    exit(1);
}

echo numberToWords($number);

?>
