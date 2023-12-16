<?php 
include('articl.php');

if(isset($_POST['titre']) && isset($_POST['contenu']) && ($_POST['date'])){

    $titre=$_POST['titre'];
    $contenu =$_POST['contenu'];
    $date=$_POST['date'];
    $article = new Article();

    $article->setTitle($titre);
    $article->setContenu($contenu);
    $article->setDate($date);

    $article->createArticle( $titre,$contenu,$date,1);
    header('Location:index.php');
}

?>