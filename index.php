<?php
if (isset($_POST['on1'])) {
    if ($_POST['on1']=="encender") {
        echo 'Encendio led1';
     //   $encender = exec("sudo phyton ../phyton/led.py");
    }
   
}
if (isset($_POST['off1'])) {
    if ($_POST['off1']=="apagar") {
        echo 'apagado 1';
       // $apagr = exec("sudo phyton ../phyton/ledOff.py");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de led</title>
</head>
<body>
<form action="index.php" method="POST">
    <p>LED 1</p>
    <input class="btn" type="submit" name="on1" value="encender">
    <input class="btn" type="submit" name="off1" value="apagar">
</form>

    <style>
    *{
        box-sizing: border-box;
    }
        form{
            margin: 50px auto;
            padding: 10px;
            width: 100%;
            max-width: 500px;
            font-size: 16px;
            font-family: sans-serif;
            text-align: center;
            border: solid black 1px;
            border-radius: 5px;
            background: #fafafa;
        }
        .btn{
            display: block;
            padding: 10px;
            border: 0.5px solid black;
            border-radius: 5px;
            background: #6e7478;
            width: 100%;
            margin: 5px auto;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover{
            background: #898e91;
            transform: scale(0.98);
        }
    </style>
    
</body>
</html>