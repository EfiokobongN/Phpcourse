<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
    session_start();

    //storing information
    $_SESSION["Name"] = "Faith";
    $_SESSION["Age"] = 27;
    echo "Welcom " .$_SESSION["Name"];
    session_destroy();
    


//connecting to database
/*
    $sql = 'SELECT * FROM users WHERE id =5';
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

    if($rowCount > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['username']. "<br>";
        }
        
    }else{
        echo "No result found.";
    }
    */
    ?>
</body>
</html>