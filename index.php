<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/footer.css">
    <link rel="stylesheet" type="text/css" href="./styles/main-content.css"> 
    <title>Golden Wing</title>
</head>

<?php

    if(empty($_SERVER["QUERY_STRING"])){
        $var = "main-content.php";
        include_once("$var");
    }
    else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

?>