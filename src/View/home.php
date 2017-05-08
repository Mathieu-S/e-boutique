<?php
include('templates/header.php');
?>

<h1>hello {name}</h1>

<ul>
<?php //foreach ($articles as $article ) {?>
    <?php foreach ($articles as $article ) {
        echo "<li><a href='".$router->url('Panier#addArticle',['id'=>$article->idArticle])."'>$article->nomArticle</a></li>";
    }









    echo "<a href='".$router->url('Default#article',['id' => "test", 'slug' => "tests"])."'>dsqdqsdsqd</a>";
    ?>
</ul>

<?php

include('templates/footer.php');
