<?php
    
    include("Medoo.php");
    
    
    
      
         
    // Using Medoo namespace.
    
    use Medoo\Medoo;
     
    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 's5164_stundenplan',
        'username' => 's5164_stundenplan',
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
    

    ?>




<link rel="stylesheet" href="style.css">
<?php


/* ********************************************************************************************************** */
/* Wenn Variable "eddit" gesetzt UND true ist, dann soll das Formular gezeigt werden */
if(isset($_GET["eddit"]) && $_GET["eddit"] == "true"){

    $eddit = true;
    // echo "editieren: ja update";
    echo "
    
        <form name='formular' class='formular' action='?update=true' method='POST' >
            <input readonly type='text' name='id' placeholder='was' id='' value='".$_GET["id"]."'><br>
            <input readonly type='text' name='tag' placeholder='was' id='' value='".$_GET["tag"]."'><br>
            <input readonly type='text' name='stunde' placeholder='was' id='' value='".$_GET["stunde"]."'><br>
            <input type='text' name='was' placeholder='was' id='' value='".$_GET["was"]."'><br>
            <input type='text' name='wer' placeholder='wer' id='' value='".$_GET["wer"]."'><br><br>
            <input type='submit' value='Absenden'>
        </form >

    ";

}
/* ********************************************************************************************************** */









/* ********************************************************************************************************** */
/* Wenn Variable "update" gesetzt ist, soll die Datenbank mit den Werten aus dem Formular aktualisiert werden */
elseif(isset($_GET["update"]) && $_GET["update"] == "true"){



    echo "<h1 class='head_update'>Es wurde erfolgreich geändert</h1>";

    if(isset($_POST["was"]) && isset($_POST["wer"]) && isset($_POST["tag"]) && isset($_POST["stunde"]) && isset($_POST["id"])){
        // echo "<b>".$_POST["id"]."</b> wurde geändert";
        // echo "<br>";
        echo "<b>".$_POST["tag"]."</b> wurde geändert";
        echo "<br>";
        echo "<b>".$_POST["stunde"]."</b> wurde geändert";
        echo "<br>";
        echo "<b>".$_POST["was"]."</b> wurde geändert";
        echo "<br>";
        echo "<b>".$_POST["wer"]."</b> wurde geändert";


        $database->update("test_stundenplan", [
            "tag" => $_POST["tag"],
            "stunde" => $_POST["stunde"],
            "was" => $_POST["was"],
            "wer" => $_POST["wer"],],
            ["id[=]" => $_POST["id"],]
            
        );

            echo "<pre>";

            // var_dump($database);

}

}
/* ********************************************************************************************************** */









/* ********************************************************************************************************** */
/* Wenn keine Bedingung erfüllt ist, soll der Browser ein fettes STOP-Schild zeigen und das Skript beendet werden */
else {


    echo "
    
        <body style='background: red;'></>
        <meta http-equiv='refresh' content='3; URL=index.php'>
        <h1 class='haltstop''>HALT STOP!!!</h1>
    
    ";


}
/* ********************************************************************************************************** */

?>
