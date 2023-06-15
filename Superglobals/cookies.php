<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <?php
    $time = time() - 86400 * 30;
    setcookie("name", "Faith", $time);

    print_r($_COOKIE);

    echo "<br>";
    echo $_COOKIE['name'];
    ?>
</body>
</html>