<?php
include('templates/header.php');
?>


<h1>hello {name}</h1>
<ul>
    <?php foreach ($articles as $article ) {?>
    <li><?php echo $article ?> </li>
    <?php }

    echo "<a href='".$router->url('article',['id' => "test", 'slug' => "tests"])."'>dsqdqsdsqd</a>";
    ?>
    {test.name}

</ul>

<?php
//foreach (DefaultController::home() as $article) {
//    echo $article['nom'];
//}

include('templates/footer.php');
