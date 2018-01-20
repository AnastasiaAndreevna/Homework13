<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $hobby = mysqli_real_escape_string($mysqli, $_POST['hobby']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $birthday = mysqli_real_escape_string($mysqli, $_POST['birthday']);
    $bankcard = mysqli_real_escape_string($mysqli, $_POST['bankcard']);
    $about = mysqli_real_escape_string($mysqli, $_POST['about']);
    $category = mysqli_real_escape_string($mysqli, $_POST['category']);
    $sql = mysqli_query( $mysqli,
        "INSERT INTO `users` (`name`, `surname`, `age`, `gender`, `hobby`, `username`, `password`, `birthday`, `bankcard`, `about`, `category`)
VALUES ( '$name','$surname', '$age', '$gender', '$hobby', '$username', '$password', '$birthday', '$bankcard', '$about', '$category' )");
}

mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<a href="index.php" class="link">Back</a>
<h2>Sign Up</h2>
<form action="#" method="post">
    <ul>
        <li><label for="name">Name</label>
            <input type="text" name="name" id="name">
        </li>
        <li>
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname">
        </li>
        <li>
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </li>
        <li>
            <label for="male">Male</label>
            <input name="gender" type="radio" value="male" id="male">
            <label for="female">Female</label>
            <input name="gender" type="radio" value="female" id="female">
        </li>
        <li>
            <label for="hobby">Hobby</label>
            <select name="hobby" id="hobby" multiple>
                <option value="music">
                    Music
                </option>
                <option value="art">
                    Art
                </option>
                <option value="horse_riding">
                    Horse riding
                </option>
            </select>
        </li>
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday">
        </li>
        <li>
            <label for="bankcard">Bankcard</label>
            <input type="number" name="bankcard" id="bankcard">
        </li>
        <li>
            <label for="about">About yourself</label>
            <textarea cols="12" rows="8" name="about" id="about">About</textarea>
        </li>
        <li>
            <select name="category">
                <option value="sport">Sport</option>
                <option value="recreation">Recreation</option>
                <option value="art">Art</option>
                <option value="reading">Reading</option>
            </select>
        </li>
        <li>
            <input type="submit" name="submit" value="Sign Up">
        </li>
    </ul>
</form>
</body>
</html>
