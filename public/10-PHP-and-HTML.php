<html>
<body>
<h1>PHP and HTML</h1>
<p>This is HTML</p>
<?php
echo "<p>This is PHP</p>";
?>

<p>*****************************************************************************************************************</p>

<?php
$about_me = [
    "name" => "Aisle Nevertell",
    "birth_year" => 1902,
    "favorite_food" => "pizza"
];

function calculateAge ($person_arr){
    $current_year = date("Y");
    $age = $current_year - $person_arr["birth_year"];
    return $age;
}
?>

<h1>Welcome!</h1>
<h2>About me:</h2>

<?php
#Add your code here
echo "<h3>Name: {$about_me["name"]}</h3>";
echo "<p>Age: ".calculateAge($about_me)."</p>";
echo "<div>Favorite food: {$about_me["favorite_food"]}</div>"
?>

<p>*****************************************************************************************************************</p>

</body>
</html>