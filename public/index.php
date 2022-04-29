<?php require __DIR__ . '/../vendor/autoload.php'; ?>
<html>
<head>

</head>
<body>
<header>
    <h1>My First PHP Site</h1>
</header>
<main>
    <p>This HTML will get delivered as is</p>
    <?php echo "Hello world!";?>
    <?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";?>
    <?php echo "<ul><li>You can use any HTML tags,</li><li>like this list.</li></ul>";?>
</main>
<footer>
    <p>And this code is back in plain HTML</p>
</footer>
</body>
</html>
