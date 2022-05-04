<!--Nested Conditional Statements-->
<?php

function both($par1, $par2) {
    if ($par1 === true) {
        if ($par2 === true) {
            return "both";
        } else {
            return "not both";
        }
    } else {
        return "not both";
    }
}

echo both(true, true);
echo both(true, false);

function both2($par1, $par2) {
    if ($par1 === true && $par2 === true) {
        return "both";
    } else {
        return "not both";
    }
}
?>

<!--The || Operator-->
<?php
function willWeEat($meal, $hungry) {
    if ($meal === "dessert" || $hungry === true) {
        return "Yum. Thanks!";
    } else {
        return "No thanks. We're not hungry.";
    }
}

echo willWeEat("dessert", false);
echo willWeEat("hamburger", false);
?>

<!--The && Operator-->
<?php
function clapYourHands($happy, $know) {
    if ($happy === true && $know === true) {
        return "CLAP!";
    } else {
        return ":(";
    }
}

echo clapYourHands(true, true);
echo clapYourHands(false, true);
?>

<!--The Not Operator-->
<?php
function duckDuckGoose($is_goose) {
    if (!$is_goose) {
        return "duck";
    } else {
        return "goose!";
    }
}

echo duckDuckGoose(false);
echo duckDuckGoose(false);
echo duckDuckGoose(true);
?>

<!--The Xor Operator-->
<?php
$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks", "butter", "vanilla extract",
                    "bananas", "heavy cream", "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];

// Write your code below:
function eatPie($ingredients) {
    if (in_array("chicken", $ingredients) xor in_array("bananas", $ingredients)) {
        return "Delicious pie!";
    } else {
        return "Disgusting!";
    }
}

echo eatPie($banana_cream);
echo eatPie($experimental_pie);
?>

<!--Alternate Syntax-->
<?php
$is_admin = FALSE;
$is_user = TRUE;
if ($is_admin or $is_user){
    echo "You can change the password.\n";
}

$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin and $sufficient_funds){
    echo "You can make the withdrawal.";
}
?>

<!--Multi-File Programs: include-->
<?php
include "top_bread.php";
include "mayo.php";
include "lettuce.php";
echo "Meat burger\n";
echo "Tomato\n";
echo "Ketchup\n";
include "bottom_bread.php";
echo "Enjoy your hamburger!";
?>

