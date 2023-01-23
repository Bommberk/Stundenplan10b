<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Stundenpläne</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <?php

        echo "hallo was geht bei dir!!!";
    
    require("Medoo.php");
      
         
    // Using Medoo namespace.
    use Medoo\Medoo;
     
    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 's5418_stundenplan',
        'username' => 's5418_stundenplan',
        'password' => 'R1?0vxx06',
     
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


    $data = $database->select("test_stundenplan",[
        "id",
        "tag",
        "stunde",
        "was",
        "wer",
    ]);

    $data = json_decode(json_encode($data));

    print_r($data);
    

    ?>
</body>
</html>