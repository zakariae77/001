<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $_SESSION["useruid"]  ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f98e4932c7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1> ********  Profile   *******</h1>
    <b> \__________/  Welcome  \__________/\___________/\_-_-__  <?php echo  $_SESSION["useruid"]  ?> \_______/</br>  </b>

</body>
</html>