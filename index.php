<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" http-equiv="refresh" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <title>Stundenplan9b</title>
    <link rel="stylesheet" href="assets/style/header.css">
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

    <!-- Header -->
    <header>
      <div class="boas-wunsch">
        <div class="drüber"></div>
      </div>
        <!-- Homeknopf -->
        <div class="home">
            <h2><a href="index.html"><span>S</span>tundenplan9b</a></h2>
        </div>
        <!-- Liste -->
        <div class="liste">
            <ul>
              <li class="hover-stunden">Stundenpläne <i class="fas fa-sort-down"></i></li>
                  <!-- Dropdown -->
                <div class="stundenpläne">
                  <li onclick="popup1()">Informatik</li>
                  <li onclick="popup2()">Französisch</li>
                  <li onclick="popup3()">Sozialwissenschaften</li>
                  <li onclick="popup4()">Biologie</li>
                </div>

        <li class="test"><a target="blank" href="https://rshw.de">Über uns</a></li>                                     
              <li class="test"><a href="#">News</a></li>

    


        <!-- Menübutton -->
            <div onclick="container2()" class="menü">
              <span id="eins"></span>
              <span id="zwei"></span>
              <span id="drei"></span>
            </div>
            
            <!-- Handymenü -->

            <div id="auswahlmenü" class="auswahlmenü">
              <li onclick="handyauswahl()">Stundenpläne</li>
              <a href="https://rshw.de" target="blank"><li>Über uns</li></a>
              <a href="#"><li>News</li></a>
            </div>

            <div id="handymenü" class="handymenü">
              <i onclick="handyauswahl()" class="fa-solid fa-xmark"></i>
              <li onclick="popuphandy1()">Informatik</li>
              <li onclick="popuphandy2()">Französisch</li>
              <li onclick="popuphandy3()">Sozialwissenschaften</li>
              <li onclick="popuphandy4()">Biologie</li>
            </div>


          <!-- ende menü -->
            </ul>
        </div>
        
                <!-- Popup -->
                <!-- Popup-info -->
                <div id="popup-info" class="popup-info">
                  <i onclick="popup1()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/info-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/info-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/info-kunst/index.html"><li>Kunst</li></a>
                </div>

                <!-- Popup-Französisch -->
                <div id="popup-franz" class="popup-franz">
                  <i onclick="popup2()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/französisch-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/französisch-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/französisch-kunst/index.html"><li>Kunst</li></a>
                </div>
                <!-- Popup-Sowi -->
                <div id="popup-sowi" class="popup-sowi">
                  <i onclick="popup3()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/sowi-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/sowi-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/sowi-kunst/index.html"><li>Kunst</li></a>
                </div>
                <!-- Popup-Bio -->
                <div id="popup-bio" class="popup-bio">
                  <i onclick="popup4()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/bio-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/bio-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/bio-kunst/index.html"><li>Kunst</li></a>
                </div>


                <!-- Popup- Handy -->
                <!-- Popup-handy-info -->
                <div id="popup-handy-info" class="popup-handy">
                  <i onclick="popuphandy1()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/info-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/info-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/info-kunst/index.html"><li>Kunst</li></a>
                </div>

                <!-- Popup-handy-Französisch -->
                <div id="popup-handy-franz" class="popup-handy">
                  <i onclick="popuphandy2()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/französisch-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/französisch-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/französisch-kunst/index.html"><li>Kunst</li></a>
                </div>
                <!-- Popup-handy-Sowi -->
                <div id="popup-handy-sowi" class="popup-handy">
                  <i onclick="popuphandy3()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/sowi-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/sowi-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/sowi-kunst/index.html"><li>Kunst</li></a>
                </div>
                <!-- Popup-handy-Bio -->
                <div id="popup-handy-bio" class="popup-handy">
                  <i onclick="popuphandy4()" class="fa-solid fa-xmark"></i>
                  <a href="stundenpläne/bio-orchester/index.html"><li>Orchester</li></a>
                  <a href="stundenpläne/bio-technik/index.html"><li>Technik</li></a>
                  <a href="stundenpläne/bio-kunst/index.html"><li>Kunst</li></a>
                </div>

        <!-- Darkmode -->
        <div class="darkmode">
            <div class="container">
                <div id="kreis" onclick="darkmode()" class="kreis"></div>
            </div>
        </div>
    </header>


    
    

    <div style="display: block; margin-top: 200px; margin-left: 500px;" class="container">
        <div style="display: flex;" class="counter">
            <div class="day">
                <h2 id="day">12</h2>
                <p>Days</p>
            </div>
            <div class="hour">
                <h2 id="hour">21</h2>
                <p>Hours</p>
            </div>
            <div class="minute">
                <h2 id="minute">12</h2>
                <p>Minutes</p>
            </div>
            <div class="second">
                <h2 id="second">21</h2>
                <p>Seconds</p>
            </div>
        </div>
    </div>

<pre>

    <?php

    

        $now = time();
        $now2 = date("d.m.Y H:i:s", $now);
        $zeitende = "05.09.2022 15:00:00";
        $zeitende2 = strtotime($zeitende);
        $datum = array();

        $datum2 = array(
            
            "2022-06-24 13:13:13" => "Sommerferien",
            "2022-06-04 15:30:00" => "Fertig",
            "2022-12-22 15:30:00" => "Weihnachtsferien",
            
        );

        // print_r($datum2);
// 
        // ksort($datum2);
// 
        // echo "<br>";

        // print_r($datum2);

        $zähler = 0;
        $temp = 0;

        foreach($datum2 as $hallo => $termin){

            $hallots = strtotime($hallo);
            $difference2 = $hallots - $now;
            
            
            if($difference2 > 0){
                if($temp == 0){$temp = $difference2;}
                if($temp >= $difference2){
                    // echo $zähler."<li>".$hallo."<br>".$hallots."<br>";
                }
            }
            
            $zähler++;
            $name = $hallo;
        }

        echo "Bis zu den ".$datum2[$name];







        // echo $zeitende2;
        // echo "<br>";
        // echo $now;

        // $difference = $zeitende2 - $now;


        // echo "<br>";
        // // echo $difference;
        // echo "<br>";

        $min = 60;
        $hour = 60 * $min;
        $day = 24 * $hour;

        $datum['rest_tag'] = floor($temp / $day);
        // echo $datum['rest_tag'];
        // echo "<br>";

        $temp = $temp - $datum['rest_tag'] * $day;

        $datum['rest_stunde'] = floor($temp / $hour);
        // echo $datum['rest_stunde'];
        // echo "<br>";

        $temp = $temp - $datum['rest_stunde'] * $hour;

        $datum['rest_minute'] = floor($temp / $min);
        // echo $datum['rest_minute'];
        // echo "<br>";

        $temp = $temp - $datum['rest_minute'] * $min;

        // echo $difference;
        
        
        ?>

    <script>

    var second = document.getElementById("second");
    var seconds = <?=$temp?>;
    second.innerHTML = seconds;

    var minute = document.getElementById("minute");
    var minutes = <?=$datum['rest_minute']?>;
    minute.innerHTML = minutes;
    
    var hour = document.getElementById("hour");
    var hours = <?=$datum['rest_stunde']?>;
    hour.innerHTML = hours;
    
    var day = document.getElementById("day");
    var days = <?=$datum['rest_tag']?>;
    day.innerHTML = days;


    function countdown(){

        seconds--;
        second.innerHTML = seconds;

        if(seconds == 0){
            seconds = 10;

            minutes--;
            minute.innerHTML = minutes;
        }
        if(minutes == 0){
            minutes = 10;

            if(days > 0 && hours > 0){
            hours--;
            hour.innerHTML = hours;
            }
        }
        if(hours == 0){
            hours = 5;

            if(days > 0){
            days--;
            day.innerHTML = days;
            }
        }

    }
    setInterval( function(){countdown()} , 1000);
    
    

    </script>


    <script src="https://kit.fontawesome.com/350675982b.js" crossorigin="anonymous"></script>
    <script src="assets/javascript/script.js"></script>

</body>
</html>
