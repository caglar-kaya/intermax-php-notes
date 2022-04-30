<!--Numbers-->
<?php
$my_number = 63;
echo $my_number;
echo "\n";
$floating_number = 72.19;
echo $floating_number;
?>

<!--Addition and Subtraction-->
<?php
echo 5 + 1; // Prints: 6
echo 6.6 + 1.2; // Prints: 7.8
echo 198263 - 263;  // Prints: 198000
echo -22.8 - 19.1; // Prints: -41.9
?>

<!--Using Number Variables-->
<?php
$last_month = 1187.23;
$this_month = 1089.98;

echo $last_month - $this_month;
?>

<!--Multiplication and Division-->
<?php
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;

echo $days_per_language; // 44
?>

<!--Exponentiation-->
<?php
echo 8 ** 2; // 64
?>

<!--Modulo-->
<?php
$students = 82;
$group = 6;
$left = $students % $group;

echo $left; // 4
?>

<!--Order of Operations-->
<?php
echo 94 - 4.25 + 7 - 23.5 - (23.5 * 0.2) + (20 / 4); // 73.55
?>

<!--Mathematical Assignment Operators-->
<?php
$my_num = 6;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer; // 1
?>

