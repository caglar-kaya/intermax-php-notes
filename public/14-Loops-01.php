<!--while-->
<?php
$count = 1;
while ($count <= 100) {
    if ($count % 33 === 0) {
        echo $count . " is divisible by 33\n";
    }
    $count++;
}
?>

<!--do while-->
<?php
$plant_height = 22;

do {
    echo "The plant is {$plant_height} tall.\n";
    if ($plant_height >= 30) {
        echo "And can produce fruit.";
    }
    $plant_height += 1;
} while ($plant_height <= 30);
?>

<!--for-->
<?php
for ($i = 10; $i >= 0; $i--) {
    if ($i >= 3) {
        echo "{$i}\n";
    } elseif ($i === 2) {
        echo "Ready!\n";
    } elseif ($i === 1) {
        echo "Set!\n";
    } else {
        echo "Go!";
    }
}
?>

<!--foreach-->
<?php
$counting_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($counting_array as $count) {
    echo "The count is: " . $count . "\n";
}

$scores = [
    "Alice" => 99,
    "Bob" => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward" => 88
];

foreach ($scores as $score) {
    echo "Someone received a score of {$score}.\n";
}

foreach ($scores as $name => $score) {
    echo "{$name} received a score of {$score}.\n";
}
?>

<!--break and continue-->
<?php
for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
        echo "Ready!\n";
    } elseif ($i === 1) {
        echo "Set!\n";
        break;
    } elseif ($i === 0) {
        echo "Go!\n";
    } else {
        if ($i === 6) {
            continue;
        }
        echo $i . "\n";
    }
}
?>
