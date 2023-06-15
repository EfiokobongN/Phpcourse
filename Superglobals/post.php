<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <?php
    if (isset($_POST)){
        echo $_POST['name'] . ", Thank you, Your form is submit";
    }
    echo "<br>";
    print_r($_POST);
    ?>
<form action="post.php" method="post">
    <input type="text" name="name">
    <input type="name" name="age">
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>