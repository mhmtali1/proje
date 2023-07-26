<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="./style.css" rel="stylesheet" />
</head>
<body>

<?php
    
    if(isset($_POST['send'])){

        $db = new PDO("sqlite:db/sqlite.db");
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];

        $message = $db->query('SELECT * FROM USERS');
        $db->exec("INSERT INTO USERS (username, passwd) VALUES ('$username', '$passwd');");

    }

?>

<nav class="app_header">
        <a class="app_logo" href="/">
            <img class="app_gif" src="wired-lineal-27-globe.gif" />
            <img class="purple__logo" src="wired-lineal-69-eye.gif" />        
        </a>
        <ul class="app__links">
            <li class="active">ANASAYFA</li>
            <li> <a href="login.php"></a>LOGIN</li>
            <li></li>
            <li>KAYDOL</li>
            <li>PAYLAŞIM</li>
        </ul>
    </nav>
    
    <form aciton="login.php" method="POST">
        <input type="text" name="username" id=""><br>
        <input type="password" name="passwd" id=""><br>

        <input name="send" type="submit" value="send">
    </form>

</body>
</html>