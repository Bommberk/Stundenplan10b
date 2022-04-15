<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>tests</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">

    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gowun Dodum', sans-serif
        }
        body
        {
            background-color: #eee;
        }
        .footer
        {
            text-align: center;
            background-color: #343434;
            color: #fff;
            width: 100%;
            position: absolute;
            bottom: 0;
            padding: 50px;
        }
        .main
        {
            display: flex;
        }
        .menu
        {
            width: 20%;
            background-color: #6c4ee6;
            margin-right: 20px;
            padding-top: 150px;
            height: 100vh;
        }
        .menu a
        {
            display: block;
            text-decoration: none;
            color: #fff;
            padding: 8px;
            display: flex;
            align-items: center;
        }
        .menu img
        {
            margin-right: 8px;
        }
        .menu a:hover
        {
            background: #ffffff11;
        }
        .content
        {
            width: 80%;
            margin-top: 120px;
            margin-right: 32px;
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.1);
        }
        .manubar
        {
            background-color: white;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 60px;
            padding-left: 50px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
        }
        .avatar
        {
            border-radius: 50%;
            background: yellowgreen;
            padding: 15px;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8px;
        }
        .name
        {
            display: flex;
            margin-right: 50px;
            align-items:center;
        }
        .card
        {
            background-color: rgba(0,0,0,0.05);
            margin-bottom: 16px;
            border-radius: 8px;
            padding: 8px;
            padding-left: 64px;
            position: relative;
        }
        .profile
        {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid white;
            position: absolute;
            left: 8px;
        }
        .phonebtn
        {
            background: #999900;
            padding: 4px;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            position: absolute;
            right: 0px;
            top: 0;
        }
        .phonebtn:hover
        {
            background: #26d026;
        }
        .delete
        {
            background: #ff6f00;
            text-decoration: none;
            color: white;
            padding: 4px 2px;
            border-radius: 4px;
            position: absolute;
            right: 0;
            bottom: 0; 
        }
        .delete:hover
        {
            background: #f00;
        }
    </style>

</head>
<body>

    <div class="manubar">
        <h1>My Contact Book</h1>

        <div class="name">
            <div class="avatar">J</div> Jim S. Mohncke
        </div>
    </div>
    
    <div class="main">
        <div class="menu">
            <a href="index.php?page=start"><img src="img/home.svg">Start</a>
            <a href="index.php?page=kontakte"><img src="img/menu.svg">Kontakte</a>
            <a href="index.php?page=legal"><img src="img/legal.svg">Impressum</a>
            <a href="index.php?page=addcontact"><img src="img/plus.svg">Kontakt hinzufügen</a>
            <a href="index.php?page=profile"><img src="img/person.svg">Profil</a>
        </div>

        <div class="content">

            <?php
                $headline = "Herzlich Willkommen";
                $contacts = [];

                if(file_exists('contacts.txt')){
                    $text = file_get_contents("contacts.txt", true);
                    $contacts = json_decode($text, true);
                }

                if(isset($_POST["name"]) && isset($_POST["phone"])){
                     echo "Kontakt <b>". $_POST['name'] ."</b> wurde hinzugefügt";
                     $newContact = [
                         'name' => $_POST['name'],
                         'phone' => $_POST['phone']
                     ];
                     array_push($contacts, $newContact);
                     file_put_contents("contacts.txt", json_encode($contacts, JSON_PRETTY_PRINT));
                }

                if($_GET["page"] == "delete"){
                    $headline = "Kontakt gelöscht";
                }

                if($_GET["page"] == "kontakte"){
                    $headline = "Deine Kontakte";
                }

                if($_GET["page"] == "addcontact"){
                    $headline = "Kontakt hinzufügen";
                }

                if($_GET["page"] == "profile"){
                    $headline = "Dein Profil";
                }

                if($_GET["page"] == "legal"){
                    $headline = "Impressum";
                }

                echo "<h1>" .$headline. "</h1>";

                if($_GET['page'] == "delete"){
                    echo "<p>Dein Kontakt wurde gelöscht</p>";
                    $index = $_GET["delete"];

                    unset($contacts[$index]);

                    file_put_contents("contacts.txt", json_encode($contacts, JSON_PRETTY_PRINT));
                }

                if($_GET["page"] == "kontakte"){
                    echo "
                            <p>Hier hast du einen überblick über deine Kontakte<br>
                            ist das nicht <b>cool</b></p><br>
                        ";

                        foreach($contacts as $index=>$row){
                            $name = $row["name"];
                            $phone = $row["phone"];
                            echo "
                            <div class='card'>
                                <img class='profile' src='img/profile.png'>
                                <b>$name</b><br>
                                $phone

                                <a class='phonebtn' href='tel:$phone'>Anrufen</a>
                                <a class='delete' href='?page=delete&delete=$index'>Löschen</a>
                            </div>
                            ";
                        }

                }else if($_GET["page"] == "legal"){
                    echo "
                            Hier kommt das impressum hin
                    ";
                }else if($_GET["page"] == "addcontact"){
                    echo "
                        <div>
                            Auf dieser Seite kannst du Kontakte hinzufügen
                        </div>

                        <form action='?page=kontakte' method='POST'>
                            <div>
                                <input placeholder='Namen eingeben' name='name'>
                            </div>
                            <div>
                                <input placeholder='Telefonnummer eingeben' name='phone'>
                            </div>
                            <button type='submit'>Absenden</button>
                        </form>
                    ";
                }else if($_GET["page"] == "profile"){
                    echo "
                            Hier ist dein Eigenes Profil
                    ";
                }else if($_GET["page"] == "start"){
                    echo "Du bist auf der Start Seite!";
                }
            ?>

        </div>
    </div>

    <!-- <div class="footer">
        &copy; ich bin voll cool
    </div> -->


</body>
</html>