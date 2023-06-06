<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <style>
        body{
            margin: 0px;
            overflow-y: auto;
            background-color: #404040;
        }
        .icon{
            width: 50px;
            height: 50px;
        }

        .icon_small{
            width: 25px;
            height: 25px;
        }

        nav{
            background-color: #141414;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family:'Inter';
            font-size: 40px;
            color: #fff;
            height: 100px;
        }
        nav h1{
            margin: 0px;
            padding: 0px;
        }
        .reverse{
            font-size:20px;
            position: absolute;
            left: 10px;
            align-self: center;
        }
        .rectangle{
            height: 100px;
            display: flex;
            background: linear-gradient(to right, #8e2de2, #4a00e0);
            color: #fff;
            font-size: 15px;
            font-family: 'Inter';
        }
        .right{
            position: absolute;
            right: 10px;
            align-self: center;
        }
        .left{
            align-self: center;
        }
        .left p{
            margin-left: 10px;
        }

        .height{
            height: 100px;
            background-color: #404040;
        }

        .contact{
        font-family: 'Inter';
        border-collapse: collapse;
        width: 100%;
        }

        .contact td {
        padding: 10px;
        text-align: left;
        }

        .contact td {
        background-color: #404040; /* Fioletowy kolor tła dla komórek */
        }
        .contact tr:nth-child(even) td {
        background-color: #d8bfd8; /* Inny odcień fioletowego dla parzystych wierszy */
        }
        .contact tr:hover td {
        background-color: #dda0dd; /* Efekt podświetlenia dla najechania na wiersz */
        }

        #add_friends{
            position: absolute;
            right: 10px;
            align-self: center;
            width: 50px;
            height: 50px;
        }

        input{
            background: linear-gradient(to right, #8e2de2, #4a00e0);
            color: #fff;
            font-size: 15px;
            font-family: 'Inter';
            border-radius: 20px;
            border: none;
            padding: 10px;
            justify-content: center;
            top: 30px;
        }

        footer{
            position: fixed;
            width: 100%;
            height: 100px;
            bottom: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #141414;
            color: #fff;
        }
    </style>
</head>
<body>
<?php

    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "chatcom_db";
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    if(isset($_SESSION['id_user'])){
        echo 'Zostałeś zalogowany jako' . ' '. $_SESSION['user_name']. ' '. $_SESSION['user_surname'];
    }

    echo
    '<nav>
     <h1>Chat.com</h1>
    </nav>';

    echo '<main>';
    // ! WYŚWIETLA WSZYSTKICH UŻYTKOWNIKÓW. NAWET OSOBE KTÓRA SIE ZALOGOWAŁA. TO NIE DOBRZE PONIEWAŻ MOŻNA DODAĆ DO ZNAJOMYCH SAMEGO SIEBIE.
    // $sql = "SELECT user_name, user_surname FROM `users`;";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         $user_2 = $row["user_name"].'<br>'.$row["user_surname"];
    //         echo '
    //         <div class="rectangle">
    //             <div class="left">
    //                 <p>'.$user_2.'</p>
    //             </div>
    //             <div class="right">
    //                 <img src="src/remove-user_2.png" alt="remove user" class="icon">
    //                 <img src="src/copy-writing_2.png" alt="write to user" class="icon">
    //             </div>
    //         </div>';
    //         }
    //     }


        if(isset($_POST['add_friends'])){
    $sql = "SELECT user_name, user_surname FROM `users`;";
    $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                echo '
                <table class="contact">
                <tr>
                    <td>Wybierz znajomego
                    <img src="./src/close.png" class="icon_small right" id="close"></td>
                </tr>
                </table>';

                while ($row = $result->fetch_assoc()) {
                    $user_1 = $row["user_name"].' '.$row["user_surname"];

                echo '
                    <table class="contact">
                        <tr>
                            <td >'.$user_1.'</td>
                        </tr>
                    </table>
                ';
            }
        }
    }

        echo '<div class="height"></div>';
    echo '</main>';
    ?>


    <footer>
        <h3>COPYRIGHT ©</h3>
        <form method="post" action="">
            <input type="submit" name="add_friends" value="Dodaj przyjaciół" class="right">
        </form>
    </footer>

    <script>
        let close = document.getElementById('close');
        let tables = document.querySelectorAll('.contact');

        close.addEventListener('click', () => {
        tables.forEach((table) => {
            table.style.display = 'none';
        });
        });
    </script>
</body>
</html>