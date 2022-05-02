<!--Creating Arrays with array()-->
<?php
$first_array = array("Hello", 11, "World", 22, "!");

echo count($first_array); // 5
?>

<!--Creating Arrays with Short Syntax-->
<?php
$with_function = array("PHP", "popcorn", 555.55);

$with_short = ["PHP", "popcorn", 555.55];
?>

<!--Printing Arrays-->
<?php
$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];
$favorite_nums = [7, 201, 33, 88, 91];

echo implode("!", $message); // Oh hey! You're doing great! Keep up the good work!
print_r($favorite_nums); // Array ( [0] => 7 [1] => 201 [2] => 33 [3] => 88 [4] => 91 )
var_dump($first_array); // array(5) { [0]=> string(5) "Hello" [1]=> int(11) [2]=> string(5) "World" [3]=> int(22) [4]=> string(1) "!" }
?>

<!--Accessing an Element-->
<?php
$round_one = ["X", "X", "first winner"];
$round_two = ["second winner", "X", "X", "X"];
$round_three = ["X", "X", "X", "X", "third winner"];

$winners = [$round_one[2], $round_two[0], $round_three[4]];

echo implode(" @ ", $winners); // first winner @ second winner @ third winner
print_r($winners);
var_dump($winners);
echo gettype(implode(" @ ", $winners)); // string
?>

<!--Adding and Changing Elements-->
<?php
$change_me = [3, 6, 9];

$change_me[] = "Caglar"; // adds to end
$change_me[] = 63;
$change_me[1] = "tadpole"; // updates

print_r($change_me);
?>

<!--Pushing and Popping-->
<?php
$stack = ["wild success", "failure", "struggle"];

array_push($stack, "blocker", "impediment");
array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);

echo count($stack); // 1
?>

<!--Shifting and Unshifting-->
<?php
$record_holders = [];

array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
array_shift($record_holders);
array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
array_shift($record_holders);
array_unshift($record_holders, "Usain Bolt");

echo implode(", ", $record_holders); // Usain Bolt, Asafa Powell, Maurice Greene, Donovan Bailey, Leroy Burrell, Carl Lewis
?>

<!--Nested Arrays-->
<?php
$treasure_hunt = [
    "garbage",
    "cat",
    99,
    [   "soda can",
        8,
        ":)",
        "sludge",
        ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"],
        "rock"
    ],
    "glitter",
    "moonlight",
    2.11
];

echo $treasure_hunt[3][4][2][0]; // GOLD!
?>
