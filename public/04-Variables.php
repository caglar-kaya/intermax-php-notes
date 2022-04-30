<!--Variables-->
<?php
$my_full_name = "Caglar Kaya";
$biography = "\nI want to be a developer!";
$favorite_food = "\n"."tur"."duck"."en";
?>

<!--Using Variables-->
<?php
$name = "Caglar";
$language = "PHP";
echo "My name is ".$name;
echo "\nI'm learning ".$language;
?>

<!--Variable Parsing-->
<?php
$noun = "Caglar";
$adjective = "happy";
$verb = "learn";
echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";
echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";
?>

<!--Variable Reassignment-->
<?php
$movie = "___";
$movie = "Superman";
$old_favorite = $movie;
echo "I'm a fickle person, my favorite movie used to be $movie.";
$movie = "Ironman";
echo "\nBut now my favorite is $movie.";
echo "\nMy old favorite movie is still $old_favorite.";
?>

<!--Concatenating Assignment Operator-->
<?php
echo "I'm going on a picnic!";
$sentence = "\nI'm going on a picnic, and I'm taking apples";
echo $sentence;
$sentence .= ", banana";
echo $sentence;
$sentence .= ", cucumber";
echo $sentence;
?>

<!--Assign by Reference-->
<?php
$very_bad_unclear_name = "15 chicken wings";
$order =& $very_bad_unclear_name;
$order .= ", potatos";
echo "\nYour order is: $very_bad_unclear_name."; // Your order is: 15 chicken wings, potatoes.
?>
