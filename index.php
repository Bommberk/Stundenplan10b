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


    
   

    <script src="https://kit.fontawesome.com/350675982b.js" crossorigin="anonymous"></script>
    <script src="assets/javascript/script.js"></script>

</body>
</html>
