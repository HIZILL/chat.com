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

        .right{
            position: absolute;
            right: 10px;
        }

        .left{
            position: absolute;
            left: 10px;
        }

        #container{
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

        #chat{
            background: linear-gradient(to right, #8e2de2, #4a00e0);
            border:none;
            border-radius: 20px;
            padding: 10px;
            height:30px;
            width: 55%;
        }

        #send{
            background: linear-gradient(to right, #8e2de2, #4a00e0);
            color: #fff;
            font-size: 15px;
            font-family: 'Inter';
            border-radius: 20px;
            border: none;
            padding: 10px 70px;
            justify-content: center;
            top: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <!-- ZMIEŃ HREFA-->
        <a href="http://127.0.0.1/Zadania/Pliki_Michu/second_page.php" class="left">
            <img src="./src/back-icon.png" alt="back to menu">
        </a>
        <h1>Chat.com</h1>
    </nav>
    <main>

        <div id="container">
            <input id="chat" class="left" type="text" placeholder="Text here">
            <div id="send" class="right">Send</div>
        </div>
    </main>
</body>
</html>