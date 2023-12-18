<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>  
         <div class="container">
            <form method='POST' action="add.php">
                <label for="firts name">Titre de l'article :</label><br>
                <input type="text" name="titre" required><br>
                <label for="last name">Contenu de l'article :</label><br>
                <input type="text" name="contenu" required><br>
                <label for="email"> Date de creation :</label><br>
                <input type="date" name="date" required><br>
                <input type="submit" name="submit" class="btn btn-primary"></input><br>
            </form>
          </div>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">titre l'article </th>
                  <th scope="col">Contenu de l'article</th>
                  <th scope="col">Date de creation de l'article</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              
              <tbody>
                     <?php
                       include('articl.php');
                       $article=new Article();
                       $articles=$article->afficherArticle();
		                  	foreach($articles as $article){
		             	  	?>
		             	  	<tr>
		             	  		<td>
		             	  			<?php echo $article['titre']; ?>
		             	  		</td>
		             	  		<td>
		             	  			<?php echo $article['contenu']; ?>
		             	  		</td>
                          <td>
		             	  			<?php echo $article['date_de_creation']; ?>
		             	  		</td>
                        <td>
                          <a href="delet.php?delete_id=<?php echo $article['id_article'];?>">Supprimer</a>
                          <a href="editer.php?editer_id=<?php echo $article['id_article'];?>">Éditer</a>
                        </td>
                      </tr>
                         <?php 
                         }
                         ?>
               </tboy>
           </table> 

</body>
</html>