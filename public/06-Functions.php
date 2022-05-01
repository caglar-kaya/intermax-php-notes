<!--Functions-->
<?php
function praisePHP() {
    echo "Hello world!";
}
?>

<!--Invoking Functions-->
<?php
function inflateEgo() {
    echo "I'm so smart!";
}

inflateEgo();
inflateEgo();
?>

<!--Return Statements-->
<?php
function printStringReturnNumber() {
    echo "Caglar";
    return 63;
}
$my_num = printStringReturnNumber();
echo "\n".$my_num;

function first()
{
    return "You did it!\n";
}

function second()
{
    return "You're amazing!\n";
}

function third()
{
    return "You're a coding hero!\n";
}

echo first() . second() . third();
?>

<!--Returning NULL-->
<?php
function createVacuum() {

}

echo createVacuum() * 10; // 0
?>

<!--Parameters-->
<?php
function increaseEnthusiasm($word) {
    return $word."!";
}

echo increaseEnthusiasm("Caglar");

function repeatThreeTimes($repeat) {
    return "\n" . $repeat . $repeat . $repeat;
}

echo repeatThreeTimes("Kaya");
?>

<!--Multiple Parameters-->
<?php
function calculateArea($height, $width) {
    return $height * $width;
}

echo calculateArea(7, 4); // 28

function calculateVolume($height, $width, $depth) {
    return calculateArea($height, $width) * $depth;
}

echo calculateVolume(8, 3, 5); // 120
?>

<!--Default Parameters-->
<?php
function calculateTip($totalCost, $tip = 20) {
    return $totalCost + ($totalCost * $tip / 100);
}

echo calculateTip(100, 25); // 125
echo calculateTip(100); // 120
?>

<!--Pass By Reference-->
<?php
$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

function convertToQuestion(&$sentence) {
    $sentence = "Do you think ".$sentence."?\n";
}

convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one; // Do you think you have teeth?
echo $string_two; // Do you think toads are nice?
echo $string_three; // Do you think brown is my favorite color?
?>

<!--Variable Scope-->
<?php
$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
    global $language;
    return $language . ": " . $concept;
}

echo generateLessonName($topic); // PHP: scope
?>
