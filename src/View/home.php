<?php
use Controller\DefaultController;

var_dump(DefaultController::home());
?>

<h1>hello</h1>

<?php foreach (DefaultController::home() as $article) {
    echo $article['nom'];
} ?>