<!Doctype html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MM! FINANCE</title>
    <link rel="shortcut icon" href="../public/img/icon.png">
    <link rel="stylesheet"  href="../public/css/style.css">
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
</head>
<body>
<hr>
<div class="container">
    <div id="top">
    <a href="">
    <img src="../public/img/mm.gif"/></a>
     <?php if (!empty($_SESSION["id"])): ?> 
    <ul class="nav nav-pills justified">
        <li><a href="quote.html">Quote</a></li>
        <li><a href="buy.html">Buy</a></li>
        <li><a href="quote.html">Sell</a></li>
        <li><a href="history.html">History</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> <b>Log Out</b></a></li>
    </ul>
    <?php endif ?>
    </div>
    <div id="middle">
