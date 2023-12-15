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
            <label for="firts name">NOM D'ARTICLE</label><br>
            <input type="text" name="nom"><br>
            <label for="last name">CONTENU</label><br>
            <input type="text" name="CONTENU"><br>
            <input type="submit" name="submit" class="btn btn-primary"></input><br>
        </form>
    </div>

    <button type="button" class="btna btna-primary">Ajouter</button>
    
    <table>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Numero de l'article </th>
                <th scope="col">nom de l'article</th>

              </tr>
            </thead>
            <tbody>
            </tbody>
       </table>
</body>
</html>