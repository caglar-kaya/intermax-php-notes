<?php require __DIR__ . '/../vendor/autoload.php'; ?>
<html>
<head>

</head>
<body>
<h1>Test</h1>
<ul>
<?php


$listOfNumbers = ['bir', 'ikki','uz','dort','bez'];

// https://spatie.be/docs/ray/v1/usage/framework-agnostic-php
ray()->clearScreen();
ray($listOfNumbers);

foreach($listOfNumbers as $number){
    echo '<li>'.$number.'</li>';
}

?>
</ul>
</body>
</html>
