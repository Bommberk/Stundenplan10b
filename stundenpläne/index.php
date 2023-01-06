<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

<?php require_once("function.php");?>

<h1>hallo</h1>




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

                        if($hallo->tag == "1-Montag" && ($hallo->wer == "alle" || $hallo ->wer == $subkurs || $hallo->wer == $kurs)){

                            
                            if($bearbeiten == "Ja, ist erlaubt!"){
                                echo "<li>".$hallo->was."<a class='icons' href='formular.php?eddit=true&id=".$hallo->id."&tag=".$hallo->tag."&stunde=".$hallo->stunde."&was=".$hallo->was."&wer=".$hallo->wer."'>".$tollesIcon."</a><li>";
                            } else {

                                if($hallo->was == "Deutsch"){
                                    echo "<li style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Mathe" || $hallo->was == "Mathe Förder"){
                                    echo "<li style='color: green;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Deutsch Förder"){
                                    echo "<li style='color: red;'>".$hallo->was."<li>";
                                }
                                if($hallo->was == "Religion"){
                                    echo "<li style='color: grey;'>".$hallo->was."<li>";
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
            <li>Dienstag</li>
            <hr>
                <?php
                    
                    foreach($data as $hallo){

                        if($hallo->tag == "2-Dienstag" && ($hallo->wer == "alle" || $hallo ->wer == $subkurs || $hallo->wer == $kurs)){
                            
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

                        if($hallo->tag == "3-Mittwoch" && ($hallo->wer == "alle" || $hallo ->wer == $subkurs || $hallo->wer == $kurs)){

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

                        if($hallo->tag == "5-Freitag" && ($hallo->wer == "alle" || $hallo ->wer == $subkurs || $hallo->wer == $kurs)){
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