<?php

    
    
require("Medoo.php");



  
     
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


    $data = $database->select("test_stundenplan", [
        "id",
        "tag",
        "stunde",
        "was",
        "wer",
    ]);


    $data = json_decode(json_encode($data));


    // print_r($data);


    // if($_GET["page"] == "info"){

    //     $kurs = "info";

    // }
    // if($_GET["page"] == "bio"){

    //     $kurs = "bio";

    // }
    // if($_GET["page"] == "sowi"){

    //     $kurs = "sowi";

    // }

    $bio_button_class = "";

    if(isset($_GET["page"])){
        switch($_GET["page"]){

                case "bio" : $kurs = "bio"; $bio_button_class = "active"; break;
                case "info" : $kurs = "info"; $info_button_class = "active";break;
                case "sowi" : $kurs = "sowi"; $sowi_button_class = "active";break;
                case "franz" : $kurs = "franz"; $franz_button_class = "active";break;
                default : $kurs = "info";
            }
    }else{
        $kurs = "info";
    }
    if(isset($_GET["subkurs"])){
        switch($_GET["subkurs"]){
            case "technik" : $subkurs = "technik";break;
            case "orchester" : $subkurs = "orchester";break;
            case "kunst" : $subkurs = "kunst";break;
            default : $subkurs = "kunst";
        }
    }else{
        $subkurs = "kunst";
    }



    // foreach($data as $hallo){

    //     if($hallo->tag == "1-Montag" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){

    //     echo "<br>".$hallo->was;

    //     }

    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // foreach($data as $hallo){

    //     if($hallo->tag == "2-Dienstag" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){

    //     echo "<br>".$hallo->was;

    //     }

    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // foreach($data as $hallo){

    //     if($hallo->tag == "3-Mittwoch" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){

    //     echo "<br>".$hallo->was;

    //     }

    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // foreach($data as $hallo){

    //     if($hallo->tag == "4-Donnerstag" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){

    //     echo "<br>".$hallo->was;

    //     }

    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // foreach($data as $hallo => $hallo2){

    //     if($hallo2->tag == "5-Freitag" && ($hallo2->wer == "alle" || $hallo2->wer == $kurs)){

    //     $freitag = "<br>".$hallo2->was;
    //     echo $freitag;


    //     }
        

    // }
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // echo $freitag;


    $bearbeiten = "";
    $size_box = "";

    if(isset($_GET["admin"]) && $_GET["admin"] == "aödlkfjowieuopoiHHÖLAKDFULKJAÖLKÖÖALDKFJöaldfLNEIOPz3987FHKBgabdfb"){

        $bearbeiten = "Ja, ist erlaubt!";
        $tollesIcon = "<span class='material-symbols-outlined'>
        drive_file_rename_outline
        </span>";
        $size_box = "1410px";

        echo "<a style='font-size:2em; color: black;' href='/test_stundenplan'>Zrück zur Startseite</a>";

    }

    $rot = "";

    foreach($data as $hallo){

        if($hallo->was == "Deutsch"){

            $rot_class = $hallo->was;

        }

    }
    ?>