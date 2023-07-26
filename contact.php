<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link href="./style.css" rel="stylesheet" />
</head>
<body>

    <?php
    
        if(isset($_POST['send'])){

            $db = new PDO("sqlite:db/sqlite.db");
            $title = $_POST['title'];
            $email = $_POST['email'];
            $des = $_POST['messages'];

            $message = $db->query('SELECT * FROM contact');
            $db->exec("INSERT INTO contact (uname, email, messages) VALUES ('$title', '$email', '$des');");

        }

    ?>

    <nav class="app_header">
        <a class="app_logo" href="/">
            <img class="app_gif" src="wired-lineal-27-globe.gif" />
            <img class="purple__logo" src="wired-lineal-69-eye.gif" />        
        </a>
        <ul class="app__links">
            <li class="active">ANASAYFA</li>
            <li>GİRİŞ</li>
            <li> <a href="contact.php">CONTACT</a></li>
            <li>KAYDOL</li>
            <li>PAYLAŞIM</li>
        </ul>
    </nav>
    
    <form aciton="new.php" method="POST">
        <input type="text" name="title" id=""><br>
        <input type="email" name="email" id=""><br>
        <input type="text" name="messages" id=""><br>

        <input name="send" type="submit" value="send">
    </form>

</body>
</html>