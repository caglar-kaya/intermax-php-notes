<!--Introduction-->
<h1>Learning PHP and HTML</h1>
<p>This first paragraph is standard HTML</p>
<?= "<p>Let's insert some text into our HTML using PHP!</p>";?>
<p>This last paragraph is also standard HTML</p>

<p>*****************************************************************************************************************</p>
<!--Request Superglobals-->
<html>

<body>
$_REQUEST:
<?php print_r($_REQUEST) ?>
<br>
$_GET:
<?php print_r($_GET) ?>
<br>
$_POST:
<?php print_r($_POST) ?>
<form method="get">
    GET Form: <input type="text" name="get_name">
    <input type="submit" value="Submit GET">
</form>
<form method="post">
    POST Form: <input type="text" name="post_name">
    <input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>
</body>

</html>

<p>*****************************************************************************************************************</p>
<!--GET Form Handling-->
<html>
<body>
<form method="get">
    Country:
    <input type="text" name="country">
    <br>
    Language:
    <input type="text" name="language">
    <br>
    <input type="submit" value="Submit">
</form>
<br>
<p>Your language is: <?= $_GET["language"]?></p>
<p>Your country is: <?= $_GET["country"]?></p>
<a href="index.php">Reset</a>
</body>
</html>

<p>*****************************************************************************************************************</p>
<!--POST Form Handling-->
<html>
<body>
<form method="post">
    Favorite Color:
    <input type="text" name="color">
    <br>
    Favorite Food:
    <input type="text" name="food">
    <br>
    <input type="submit" value="Submit">
</form>
<br>
<p>Best color is: <?= $_POST["color"] ?> </p>
<p>Best food is: <?= $_POST["food"] ?> </p>
<a href="index.php">Reset</a>
</body>
</html>

<p>*****************************************************************************************************************</p>
<!--Using the "action" Attribute-->
<html>
<body>
<form method="get" action="greet_user.php">
    First Name:
    <input type="text" name="first">
    <br>
    Last Name:
    <input type="text" name="last">
    <br>
    <input type="submit" value="Submit">
</form>

<a href="index.php">Reset</a>
</body>
</html>

<p>*****************************************************************************************************************</p>
<!--Review-->

<html>
<body>
<h1>index.php</h1>
<h2>Superglobals:</h2>
$_REQUEST:
<?php print_r($_REQUEST)?>
<br>
$_GET:
<?php print_r($_GET)?>
<br>
$_POST:
<?php print_r($_POST)?>
<h2>Forms:</h2>
<form method="get" action="handle_get.php">
    GET Form: <input type="text" name="get_name">
    <input type="submit" value="Submit GET">
</form>
<form method="post">
    POST Form: <input type="text" name="post_name">
    <input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>
</body>
</html>

<p>*****************************************************************************************************************</p>
