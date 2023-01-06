<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="background: #5c85dd;font-family: 'Josefin Sans', sans-serif;">
    <h1>Es tut mir sehr leid Ihnen mitteilen zu müssen, dass<br>
        diese Webside jetzt durch große Probleme am Stundenplan geschlossen ist.<br>
        Vielen Dank für Ihr Verständniss.
</h1>

<?php

echo "hallo";

include("studenpläne/Medoo.php");

echo "hallo";
// Using Medoo namespace.

use Medoo\Medoo;
 
$database = new Medoo([
    // [required]
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 's5418_bencke',
    'username' => 's5418_bencke',
    'password' => '7sp4qM#86',
 
    // [optional]
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
    'port' => 3306,
 
    // [optional] The table prefix. All table names will be prefixed as PREFIX_table.
    'prefix' => '',
 
    // [optional] To enable logging. It is disabled by default for better performance.
    'logging' => true,
 
    // [optional]
    // Error mode
    // Error handling strategies when the error is occurred.
    // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
    // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
    'error' => PDO::ERRMODE_SILENT,
 
    // [optional]
    // The driver_option for connection.
    // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],
 
    // [optional] Medoo will execute those commands after the database is connected.
    'command' => [
        'SET SQL_MODE=ANSI_QUOTES'
    ]
    ]);



// $data = $database->select("logindaten", [
//     "benutzername" => $_POST["benutzername"],
//     "email" => $_POST["email"],
//     "password" => $_POST["password"],
// ]);


// $data = json_decode(json_encode($data));

// print_r($data);

echo "hallo";

?>

</body>
</html>