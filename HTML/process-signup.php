<?php


if(empty($_POST['Fname'])){
    die("First name is required");
}
if(empty($_POST['Lname'])){
    die("Last name is required");
}

if( ! filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}


if(strlen($_POST['password']) < 8) {
    die("Password must be at least 8 characters");
}

if( ! preg_match("/[a-z]/i", $_POST['password'])) {
    die("Password must contain at least one letter");
}
if( ! preg_match("/[0-9]/", $_POST['password'])) {
    die("Password must contain at least one number");
}

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);


if(empty($_POST['month'])){
    die("Birth month is required");
}
if(empty($_POST['day'])){
    die("Birth day is required");
}
if(empty($_POST['year'])){
    die("Birth year is required");
}
if(empty($_POST['gender'])){
    die("Gender is required");
}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO userInfo (Fname, Lname, email, password_hash, month, day, year, gender)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if( ! $stmt ->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssssss",
                    $_POST['Fname'],
                    $_POST['Lname'],
                    $_POST['email'],
                    $password_hash,
                    $_POST['month'],
                    $_POST['day'],
                    $_POST['year'],
                    $_POST['gender']);

if ($stmt->execute()) {                      
    header("Location: signup-success.html");
    exit;
}else {
    if ($mysqli->errno === 1062) {
        header("Location: emailTaken.html");
        exit;
        // die("Email already taken");
    }else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}


?>