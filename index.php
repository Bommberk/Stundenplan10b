<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" http-equiv="refresh" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <title>Stundenplan9b</title>
    
    <!-- <link rel="stylesheet" href="assets/style/header.css"> -->
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/header.css">
    <link rel="stylesheet" href="assets/style/countdown.css">
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
              <li class="hover-stunden"><a href="stundenpläne">Stundenpläne</a></li>
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
              <li onclick="handyauswahl()"><a href="stundenpläne">Stundenpläne</a></li>
              <a href="https://rshw.de" target="blank"><li>Über uns</li></a>
              <a href="#"><li>News</li></a>
            </div>

        <!-- Darkmode -->
        <div class="darkmode">
            <div class="container">
                <div id="kreis" onclick="darkmode()" class="kreis"></div>
            </div>
        </div>
    </header>


    <?php
    
        $datum = array();
        $now = time();
        $now2 = date("d.m.Y H:i:s", $now);


        $termine = array(

            "2022-09-28 08:00:00" => "Herbstferien",
            "2022-09-05 08:00:00" => "Mein Geburtstag",
            "2022-12-24 08:00:00" => "Weihnachten",
            "2023-01-01 00:00:00" => "Jahr 2023",
            "2023-03-10 00:00:00" => "Osterferien",
            "2022-06-24 11:30:00" => "Sommerferien",

        );

        
        ksort($termine);

        // print_r($termine);

        


        $zähler = 0;
        $temp = 0;

        foreach($termine as $hallo => $namekey){

            $hallots = strtotime($hallo);
            $difference2 = $hallots - $now;

            if($difference2 > 0){


                if($temp == 0){$temp = $difference2;}
                if($temp >= $difference2){


                    $nummerTermin = $zähler;
                    $nameTermin = $namekey;
                    $zeitTermin = $hallo;
                }
                
                $temp = $difference2;
            }
            $zähler++;
        }

        // echo "<br>";
        // echo $nummerTermin;
        // echo "<br>";
        // echo $nameTermin;
        // echo "<br>";
        // echo $zeitTermin;

        
        $zeitende = $zeitTermin;
        $zeitende2 = strtotime($zeitende);


        $difference = $zeitende2 - $now;

        $min = 60;
        $hour = 60 * $min;
        $day = 24 * $hour;

         $datum['rest_tage'] = floor($difference / $day);
        $difference = $difference - $datum['rest_tage'] * $day;

        $datum['rest_stunden'] = floor($difference / $hour);
        $difference = $difference - $datum['rest_stunden'] * $hour;

         $datum['rest_minuten'] = floor($difference / $min);
        $difference = $difference - $datum['rest_minuten'] * $min;

        include("stundenpläne/Medoo.php");

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

    $data = $database->select("logindaten",[
        "benutzername",
        "email",
        "password",
    ]);

    $data = json_decode(json_encode($data));

    echo "<pre>";

    print_r($data);
    echo "</pre>";

    ?>
    
    <div class="container2">
        <div class="counter">
            <div class="day">
                <h2 id="day">12</h2>
                <p>Days</p>
            </div>
            <div class="hour">
                <h2 id="hour">02</h2>
                <p>Hours</p>
            </div>
            <div class="minute">
                <h2 id="minute">32</h2>
                <p>Minutes</p>
            </div>
            <div class="second">
                <h2 id="second"></h2>
                <p>Seconds</p>
            </div>
        </div>
        <div class="infos">
          <h3>Bis zu <?=$nameTermin?></h3>
        </div>
    </div>

   <?php
    


#$empfaenger = "jim.mohncke@rshw.de";
#$betreff = "Die Mail-Funktion";
#$from = "From: Jim Mohncke <jim.mohncke@rshw.de>";
#$text = "
#        <h1>Hallo Jim</h1><br>
#        <h3>Jetzt neu blah blah blah</h3>
#";

#mail($empfaenger, $betreff, $text, $from);



    
// include("PHPMailer-master/src/PHPMailer.php");

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


// $bodytext = "neuer Besuchsbericht von Deiner Webseite\r\n";
// $bodytext .= "\r\n";
// $bodytext .= "
//     <h1>Hallo Jim</h1><br>
//     <h3>Jemand hat Deine Webseite besucht.!</h3><br>
//     <h3>IST DAS NICHT RICHTIG COOL!!!</h3>
// ";

// echo "<pre>";
// $email = new PHPMailer();
// #var_dump($email);

// $email->CharSet = 'UTF-8';
// $email->isHTML(true);
// $email->SetFrom('jim.mohncke@rshw.de', 'Jim Mohncke');
// $email->Subject = 'neuer Besuchsbericht ';
// $email->Body = $bodytext;
// $email->AddAddress('jim.mohncke@rshw.de');




// $e = $email->Send();

#echo "hallo".$e;


    ?>

    <script>

        var second = document.getElementById("second");
        var seconds = <?=$difference?>;
        second.innerHTML = seconds;

        var minute = document.getElementById("minute");
        var minutes = <?=$datum['rest_minuten']?>;
        minute.innerHTML = minutes;

        var hour = document.getElementById("hour");
        var hours = <?=$datum['rest_stunden']?>;
        hour.innerHTML = hours; 

        var day = document.getElementById("day");
        var days = <?=$datum['rest_tage']?>;
        day.innerHTML = days; 


        function countdown(){
            seconds = seconds - 1;
            second.innerHTML = seconds;

            if(seconds == 0){
                seconds = 60;

                minutes = minutes - 1;
                minute.innerHTML = minutes;
            }
            
            if(minutes == 0){
                minutes = 60;

                hours = hours - 1;
                hour.innerHTML = hours;
            }
            if(hours == 1){
                hours = 24;

                days = days -1;
                day.innerHTML = days;
            }
            if(days == 0){
                days = 0;
            }
        }
        setInterval(function(){countdown()}, 1000);

    </script>
    
   

    <script src="https://kit.fontawesome.com/350675982b.js" crossorigin="anonymous"></script>
    <script src="assets/javascript/script.js"></script>

</body>
</html>
