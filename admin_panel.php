<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $username = "admin";
        $password = "admin";

        if(isset($_POST['send'])){
            if($_POST['username'] == $username && $_POST['passwd'] == $password){
                header("Location: panel.php");
            }
            else{
                header("Location: admin_panel.php?error=Incorrect_Login");
            }
        }
    
    ?>
<form aciton="admin_panel.php" method="POST">
        <input type="text" name="username" id=""><br>
        <input type="password" name="passwd" id=""><br>

        <input name="send" type="submit" value="send">
    </form>

</body>
</html>