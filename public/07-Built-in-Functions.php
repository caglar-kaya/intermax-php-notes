<!--BUILT-IN PHP FUNCTIONS-->
<?php
echo("This works!\n"); // This works!

echo "This also works!\n"; // This also works!

// echo("This would NOT work", "\n");

echo "Buuuut!", " ", "This", " ", "does!", "\n"; // Buuuut! This does!
?>

<!--Working with Variables-->
<?php
$first = "Welcome to the magical world of built-in functions.";

$second = 82137012983;

echo gettype($first);
echo gettype($second);

var_dump($first);
var_dump($second);
?>

<!--String Functions-->
<?php
echo strrev(".pu ti peeK .taerg gniod er'uoY");
echo strtolower("\nSOON, tHiS WILL Look NoRmAL.\n");
echo str_repeat("There's no place like home.\n", 3);
?>

<!--Working with Substrings-->
<?php
$essay_one = "I really enjoyed the book. I thought the characters were really interesting. 
The plot of the novel was really engaging. 
I really felt the characters' emotions. They were really well-written. 
I really wish the ending had been different though.";

$essay_two = "Obviously this is a really good book. 
You obviously would not have made us read it if it wasn't. 
I felt like the ending was too obvious though. 
It was so obvious who did it right away. 
I think the thing with the light was obviously a metaphor for life. 
It would have been better if the characters were less obvious about their secrets.";

echo substr_count($essay_one, "really"); // 6
echo substr_count($essay_two, "obvious"); // 5
?>

<!--Number Functions-->
<?php
function calculateDistance($num1, $num2) {
    return abs($num1 - $num2);
}

function calculateTip($total_cost) {
    return round($total_cost * 1.18);
}
?>

<!--Generating Random Numbers-->
<?php
echo getrandmax(); // in my computer: 2147483647
echo "\n";
echo rand();
echo "\n";
echo rand(1, 52);
?>

<!--Documentation-->
<?php
$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

echo str_pad($b, $a, $d, $c); // *~**~**~*You did it!*~**~**~*
?>

<!--Finding Functions-->
<?php
function convertToShout($str) {
    return strtoupper($str)."!";
}

echo convertToShout("woah there, buddy");

function tipGenerously($cost) {
    return ceil($cost * 1.2);
}

echo tipGenerously(100.00);

function calculateCircleArea($diameter) {
    return pi() * pow($diameter / 2, 2);
}

echo calculateCircleArea(25);
?>

<!--Review-->
<?php
$string_var = "Check it out";
echo strtoupper($string_var) . "!\n"; // CHECK IT OUT!
echo ceil(8.873); // 9
echo pi(); // 3.1415926535898
echo str_pad("PHP", 30, "*^*-", STR_PAD_BOTH); // *^*-*^*-*^*-*PHP*^*-*^*-*^*-*^
echo getrandmax(); // 2147483647
echo rand(); // 635777407
echo rand(1, 52);
echo abs(-1287); // 1287
echo round(8723.999); // 8724
echo substr_count($string_var, " "); // 2
echo strrev("\n.pu ti peeK .taerg gniod er'uoY"); // You're doing great. Keep it up.
echo strtolower("SOON, tHiS WILL Look NoRmAL.\n"); // soon, this will look normal.
echo str_repeat("There's no place like home.\n", 3);
echo gettype($string_var); // string
echo var_dump($string_var); // string(12) "Check it out"
