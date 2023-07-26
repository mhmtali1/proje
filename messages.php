<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new PDO("sqlite:db/sqlite.db");
        $messages = $db->query('SELECT * FROM contact');

        foreach($messages as $mesage){

    ?>
    <div>
        <div class="title"><?php echo $mesage['uname']; ?></div>
        <div class="email"><?php echo $mesage['email']; ?></div>
        <div class="description"><?php echo $mesage['messages']; ?></div>
    </div>
    <br>
    <?php }?>
</body>
</html>