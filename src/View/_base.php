<?php
require_once '../Controller/DefaultController.php';

require_once '../Model/Connection.php';
require_once '../Model/Article.php';
require_once '../Model/User.php';

session_start();
var_dump($_GET);
var_dump($_SESSION);
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>E-boutique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
</head>
<body>
<?php
    if (empty($_GET)) {
        header('Location: _base.php?page=home');
    }

    switch ($_GET['page']) {
        case 'home':
            require_once 'home.php';
            break;
        case 'login':
            require_once 'login.php';
            break;
        default:
            echo 'nooooooooooooooooooooo';
    }
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>

