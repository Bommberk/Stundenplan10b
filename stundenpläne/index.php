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

    $bearbeiten = "";
    $size_box = "";

    if(isset($_GET["admin"]) && $_GET["admin"] == "aödlkfjowieuopoiHHÖLAKDFULKJAÖLKÖÖALDKFJöaldfLNEIOPz3987FHKBgabdfb"){

        $bearbeiten = "Ja, ist erlaubt!";
        $tollesIcon = "<span class='material-symbols-outlined'>
        drive_file_rename_outline
        </span>";
        $size_box = "1410px";

        echo "<a style='font-size:2em; color: black;' href='../stundenpläne'>Zrück zur Startseite</a>";

    }
    
    ?>

<div class="container">
    <div class="box" style="width: <?=$size_box?>;">
        <ul class="zeit">
            <li>Zeit</li>
            <hr>
            <li>7:55<br>8:40</li>
            <li>8:45<br>9:30</li>
            <li>9:45<br>10:35</li>
            <li>10:40<br>11:25</li>
            <li>11:45<br>12:30</li>
            <li>12:30<br>13:15</li>
        </ul>
        <ul>
            <li>Montag</li>
            <hr>

            <?php
                    
                    foreach($data as $hallo){

                        if($hallo->tag == "1-Montag" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){

                            
                            if($bearbeiten == "Ja, ist erlaubt!"){
                                echo "<li>".$hallo->was."<a class='icons' href='formular.php?eddit=true&id=".$hallo->id."&tag=".$hallo->tag."&stunde=".$hallo->stunde."&was=".$hallo->was."&wer=".$hallo->wer."'>".$tollesIcon."</a><li>";
                            } else {

                                if($hallo->was == "Deutsch"){
                                    echo "<li onclick='deutsch()' style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Mathe" || $hallo->was == "Mathe Förder"){
                                    echo "<li style='color: green;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Kunst"){
                                    echo "<li style='color: yellow;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Informatik" || $hallo->was == "Sowi" || $hallo->was == "Französisch" || $hallo->was == "Biologie"){
                                    echo "<li onclick='info()' style='color: grey;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Chemie"){
                                    echo "<li style='color: #1bf5cd;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Freiheit"){
                                    echo "<li class='rgb'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Englisch"){
                                    echo "<li style='color:blue;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Sport"){
                                    echo "<li style='color: #222;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Politik"){
                                    echo "<li style='color: purple;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Orchester" || $hallo->was == "Technik"){
                                    echo "<li style='color: gold;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Physik"){
                                    echo "<li style='color: #0f0;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Geschichte"){
                                    echo "<li style='color: orange;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Philosophie"){
                                    echo "<li style='color: pink;'>".$hallo->was."<li>";
                                }
                            }
                            

                        }

                    }
                ?>

        </ul>
        <ul>
            <li>Dienstag</li>
            <hr>
                <?php
                    
                    foreach($data as $hallo){

                        if($hallo->tag == "2-Dienstag" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){
                            
                            if($bearbeiten == "Ja, ist erlaubt!"){
                                echo "<li>".$hallo->was. "<a class='icons' href='formular.php?eddit=true&id=".$hallo->id."&tag=".$hallo->tag."&stunde=".$hallo->stunde."&was=".$hallo->was."&wer=".$hallo->wer."'>" .$tollesIcon."</a><li>";
                            } else {

                                if($hallo->was == "Deutsch"){
                                    echo "<li style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Mathe" || $hallo->was == "Mathe Förder"){
                                    echo "<li style='color: green;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Kunst"){
                                    echo "<li style='color: yellow;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Informatik" || $hallo->was == "Sowi" || $hallo->was == "Französisch" || $hallo->was == "Biologie"){
                                    echo "<li style='color: grey;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Chemie"){
                                    echo "<li style='color: #1bf5cd;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Freiheit"){
                                    echo "<li class='rgb'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Englisch"){
                                    echo "<li style='color:blue;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Sport"){
                                    echo "<li style='color: #222;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Politik"){
                                    echo "<li style='color: purple;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Orchester" || $hallo->was == "Technik"){
                                    echo "<li style='color: gold;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Physik"){
                                    echo "<li style='color: #0f0;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Geschichte"){
                                    echo "<li style='color: orange;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Philosophie"){
                                    echo "<li style='color: pink;'>".$hallo->was."<li>";
                                }
                            }

                        }

                    }
                ?>
        </ul>
        <ul>
            <li>Mittwoch</li>
            <hr>
                <?php
                    
                    foreach($data as $hallo){

                        if($hallo->tag == "3-Mittwoch" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){

                            if($bearbeiten == "Ja, ist erlaubt!"){
                                echo "<li>".$hallo->was."<a class='icons' href='formular.php?eddit=true&id=".$hallo->id."&tag=".$hallo->tag."&stunde=".$hallo->stunde."&was=".$hallo->was."&wer=".$hallo->wer."'>" .$tollesIcon."</a><li>";
                            } else {

                                if($hallo->was == "Deutsch"){
                                    echo "<li style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Mathe" || $hallo->was == "Mathe Förder"){
                                    echo "<li style='color: green;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Kunst"){
                                    echo "<li style='color: yellow;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Informatik" || $hallo->was == "Sowi" || $hallo->was == "Französisch" || $hallo->was == "Biologie"){
                                    echo "<li style='color: grey;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Chemie"){
                                    echo "<li style='color: #1bf5cd;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Freiheit"){
                                    echo "<li class='rgb'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Englisch"){
                                    echo "<li style='color:blue;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Sport"){
                                    echo "<li style='color: #222;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Politik"){
                                    echo "<li style='color: purple;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Orchester" || $hallo->was == "Technik"){
                                    echo "<li style='color: gold;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Physik"){
                                    echo "<li style='color: #0f0;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Geschichte"){
                                    echo "<li style='color: orange;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Philosophie"){
                                    echo "<li style='color: pink;'>".$hallo->was."<li>";
                                }
                            }

                        }

                    }
                ?>
        </ul>
        <ul>
            <li>Donnerstag</li>
            <hr>
                <?php
                    
                    foreach($data as $hallo){

                        if($hallo->tag == "4-Donnerstag" && ($hallo->wer == "alle" || $hallo ->wer == $subkurs || $hallo->wer == $kurs)){

                            if($bearbeiten == "Ja, ist erlaubt!"){
                                echo "<li>".$hallo->was."<a class='icons' href='formular.php?eddit=true&id=".$hallo->id."&tag=".$hallo->tag."&stunde=".$hallo->stunde."&was=".$hallo->was."&wer=".$hallo->wer."'>" .$tollesIcon."</a><li>";
                            } else {

                                if($hallo->was == "Deutsch"){
                                    echo "<li style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Mathe" || $hallo->was == "Mathe Förder"){
                                    echo "<li style='color: green;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Kunst"){
                                    echo "<li style='color: yellow;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Informatik" || $hallo->was == "Sowi" || $hallo->was == "Französisch" || $hallo->was == "Biologie"){
                                    echo "<li style='color: grey;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Chemie"){
                                    echo "<li style='color: #1bf5cd;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Freiheit"){
                                    echo "<li class='rgb'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Englisch"){
                                    echo "<li style='color:blue;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Sport"){
                                    echo "<li style='color: #222;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Politik"){
                                    echo "<li style='color: purple;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Orchester" || $hallo->was == "Technik"){
                                    echo "<li style='color: gold;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Geschichte"){
                                    echo "<li style='color: orange;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Physik"){
                                    echo "<li style='color: #0f0;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Philosophie"){
                                    echo "<li style='color: pink;'>".$hallo->was."<li>";
                                }
                            }

                        }

                    }
                ?>
        </ul>
        <ul>
            <li>Freitag</li>
            <hr>
                <?php
                    
                    foreach($data as $hallo){

                        if($hallo->tag == "5-Freitag" && ($hallo->wer == "alle" || $hallo->wer == $kurs)){
                            if($bearbeiten == "Ja, ist erlaubt!"){
                                echo "<li>".$hallo->was."<a class='icons' href='formular.php?eddit=true&id=".$hallo->id."&tag=".$hallo->tag."&stunde=".$hallo->stunde."&was=".$hallo->was."&wer=".$hallo->wer."'>" .$tollesIcon."</a><li>";
                            } else {

                                if($hallo->was == "Deutsch"){
                                    echo "<li style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Mathe" || $hallo->was == "Mathe Förder"){
                                    echo "<li style='color: green;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Kunst"){
                                    echo "<li style='color: yellow;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Informatik" || $hallo->was == "Sowi" || $hallo->was == "Französisch" || $hallo->was == "Biologie"){
                                    echo "<li style='color: grey;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Chemie"){
                                    echo "<li style='color: #1bf5cd;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Freiheit"){
                                    echo "<li class='rgb'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Englisch"){
                                    echo "<li style='color:blue;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Politik"){
                                    echo "<li style='color: purple;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Orchester" || $hallo->was == "Technik"){
                                    echo "<li style='color: gold;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Geschichte"){
                                    echo "<li style='color: orange;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Orchester" || $hallo->was == "Technik"){
                                    echo "<li style='color: purple;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Physik"){
                                    echo "<li style='color: #0f0;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Philosophie"){
                                    echo "<li style='color: pink;'>".$hallo->was."<li>";
                                }
                            }

                        }

                    }
                ?>
        </ul>
    </div>
</div>


<div class="links">
<a href="?page=info" class="<?=$info_button_class?>">Informatik</a>
<a href="?page=bio" class="<?=$bio_button_class?>">Biologie</a>
<a href="?page=sowi" class="<?=$sowi_button_class?>">Sowi</a>
<a href="?page=franz" class="<?=$franz_button_class?>">Französisch</a>
</div>

<div class="subkurs">
    <h2 onclick="dropdown()">Kurse ></h2>
    <div id="kurse" class="dropdown">
        <a href="?page=<?=$kurs?>&subkurs=technik">Technik</a>
        <a href="?page=<?=$kurs?>&subkurs=orchester">Orchester</a>
        <a href="?page=<?=$kurs?>&subkurs=kunst">Kunst</a>
    </div>
</div>

<script>

var kurse = document.getElementById("kurse");

function dropdown(){
    kurse.classList.toggle("hiduei");
}

</script>
</body>
</html>