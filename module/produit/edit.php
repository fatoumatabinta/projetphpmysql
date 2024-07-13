<?php
    require_once("./exe/produit/liste.php");
    if(!empty($_GET['id'])){
        $id=$_GET['id'];
        $sql=$dbConnexion->prepare("SELECT * FROM produits WHERE id=$id");
        $sql->execute();
        $data=$sql->fetch();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h2 class="text-center mt-3">Modifier le produit</h2>
        <form method="" action="./exe/produit/edit.php">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Libelle</label>
                <input type="text" class="form-control" name="libelle" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descriptions</label>
                <input type="descriptions" class="form-control" name="descriptions" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prixunitaire</label>
                <input type="prixunitaire" class="form-control" name="prixunitaire" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Quantite</label>
                <input type="quantite" class="form-control" name="quantite" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Montantstock</label>
                <input type="montantstock" class="form-control" name="montantstock" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            <button type="submit" class="btn btn-success">Enregistrer</button>
            <a class="btn btn-primary" href="?r=etudiant&m=list">Annuler</i></a>
        </form>
    </main>
    
</body>
</html>
<!--Debut modal section-->

<!--Fin modal section--> 