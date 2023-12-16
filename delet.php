<?php 
include('articl.php');


if(isset($_GET['delete_id'])) {
    $articleId = $_GET['delete_id'];

    //  l'instance du classe Article :
    $article = new Article();
//  l'appelle dyal lmethode deletArticle 
    $article->deleteArticle($articleId);

    header('Location:index.php');
    exit();
}

?>