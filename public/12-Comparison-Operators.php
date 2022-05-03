<!--If Statements-->
<?php
$learner_one = ["is_correct"=>FALSE, "box"=>["shape"=>"none", "color"=>"none"]];
$learner_two = ["is_correct"=>TRUE, "box"=>["shape"=>"none", "color"=>"none"]];

function markAnswer($answer, &$checkbox) {
    if ($answer) {
        $checkbox["shape"] = "checkmark";
        $checkbox["color"] = "green";
    } else {
        $checkbox["shape"] = "x";
        $checkbox["color"] = "red";
    }
}

markAnswer($learner_one["is_correct"], $learner_one["box"]);
markAnswer($learner_two["is_correct"], $learner_two["box"]);

print_r($learner_one["box"]);
print_r($learner_two["box"]);
?>

<!--Comparison Operators-->
<?php
function chooseCheckoutLane($items) {
    if ($items <= 12) {
        return "express lane";
    } else {
        return "regular lane";
    }
}

function canIVote($age) {
    if ($age >= 18) {
        return "yes";
    } else {
        return "no";
    }
}

echo chooseCheckoutLane(12);
echo chooseCheckoutLane(13);

echo canIVote(18);
echo canIVote(17);
?>

<!--Identical and Not Identical Operators-->
<?php
function agreeOrDisagree($str1, $str2) {
    if ($str1 === $str2) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}

echo agreeOrDisagree("Caglar", "Caglar");
echo agreeOrDisagree("Caglar", "caglar");

function checkRenewalMonth($renewal_month) {
    $current_month = date("M");
    if ($renewal_month === $current_month) {
        return "Time to renew";
    } else {
        return "Welcome!";
    }
}

echo checkRenewalMonth("May");
echo checkRenewalMonth("January");
?>

<!--Elseif Statements-->
<?php
function whatRelation($per_of_DNA) {
    if ($per_of_DNA === 100) {
        echo "identical twins";
    } elseif ($per_of_DNA >= 35 && $per_of_DNA <= 99) {
        echo "parent and child or full siblings";
    } elseif ($per_of_DNA >= 14 && $per_of_DNA <= 34) {
        echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($per_of_DNA >= 6 && $per_of_DNA <= 13) {
        echo "first cousins";
    } elseif ($per_of_DNA >= 3 && $per_of_DNA <= 5) {
        echo "second cousins";
    } elseif ($per_of_DNA >= 1 && $per_of_DNA <= 2) {
        echo "third cousins";
    } else {
        echo "not genetically related";
    }
}

echo whatRelation(100);
echo whatRelation(99);
?>

<!--Switch Statement-->
<?php
function airQuality($color) {
    switch ($color){
        case "green":
            echo "good";
            break;
        case "yellow":
            echo "moderate";
            break;
        case "orange":
            echo "unhealthy for sensitive groups";
            break;
        case "red":
            echo "unhealthy";
            break;
        case "purple":
            echo "very unhealthy";
            break;
        case "maroon":
            echo "hazardous";
            break;
        default:
            echo "invalid color";
    }
}

echo airQuality("green");
echo airQuality("Green");
echo airQuality("orange");
?>

<!--Switch Statements: Fall through-->
<?php
function returnSeason($month) {
    switch ($month) {
        case "December":
        case "January":
        case "February":
            return "winter";
            break;
        case "March":
        case "April":
        case "May":
            return "spring";
            break;
        case "June":
        case "July":
        case "August":
            return "summer";
            break;
        case "September":
        case "October":
        case "November":
            return "fall";
            break;
    }
}
?>

<!--Ternary Operator-->
<?php
function ternaryCheckout($number_of_items) {
    return $number_of_items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote($age) {
    return $age >= 18 ? "yes" : "no";
}

echo ternaryCheckout(12);
echo ternaryCheckout(13);

echo ternaryVote(18);
echo ternaryVote(17);
?>

<!--Truthy and Falsy-->
<?php
if ("") {
echo "this will not print";
} elseif (null) {
echo "this will not print";
} elseif ([]) {
echo "this will not print";
} elseif (0) {
echo "this will not print";
} elseif ("0") {
echo "this will not print";
} else {
echo "Finally!";
}

function truthyOrFalsy($value) {
    return $value ? "True" : "False";
}

echo truthyOrFalsy(""); // False
echo truthyOrFalsy("a"); // True
?>

<!--User Input: readline()-->
<?php
echo "Hello, there. What's your first name?\n";

$name = readline(">> ");

if (strlen($name) > 8) {
    echo "Hi, {$name}. That's a long name.";
} elseif (strlen($name) >= 4) {
    echo "Hi, {$name}.";
} elseif (strlen($name) <= 3) {
    echo "Hi, {$name}. That's a short name.";
}
?>

