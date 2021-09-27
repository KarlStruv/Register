<?php

require_once 'vendor/autoload.php';

use App\Person;
use App\Register;

$register = new Register('storage/data.csv');

if (isset($_POST['submit'])) {

    $person = new Person(
        $_POST['name'],
        $_POST['surname'],
        $_POST['personalId'],
        $_POST['description']
    );

    $register->add($person);
}

if (isset($_GET['search'])) {
    $personFound = $register->search($_GET['personalId']);
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
<div class="display">
    <form method="post" action="/">
        <div id="name">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name">
        </div>

        <div id="surname">
            <label for="surname">Surname: </label>
            <input type="text" id="surname" name="surname">
        </div>

        <div id="personalId">
            <label for="personalId">Person ID number: </label>
            <input type="text" id="personalId" name="personalId">
        </div>

        <div id="description">
            <label for="description">Description: </label>
            <input type="text" id="description" name="description">
        </div>

        <button type="submit" name="submit" class="submitButton">Add to the register</button>
    </form>
</div>

<form class="search" method="get" action="Search.php">
    <div class="searchButton">
        <input type="text" name="personalId" placeholder="Personal ID">
    </div>

    <button id="searchButton" type="submit" name="search">Search</button>
</form>

</body>
</html>

