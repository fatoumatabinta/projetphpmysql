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
        <h2 class="text-center mt-3">Detail sur le produit</h2>
        <form method="" action="./exe/produit/edit.php">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Libelle</label>
                <input type="text" class="form-control" name="libelle" value="<?= $data['libelle'];?>" readonly id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descriptions</label>
                <input type="descriptions" class="form-control" name="descriptions" value="<?php echo $data['descriptions'];?>" readonly id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prixunitaire</label>
                <input type="prixunitaire" class="form-control" name="prixunitaire" value="<?php echo $data['prixunitaire'];?>" readonly id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Quantite</label>
                <input type="quantite" class="form-control" name="quantite" value="<?= $data['quantite'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Montantstock</label>
                <input type="montantstock" class="form-control" name="montantstock" value="<?= $data['montantstock'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                </div>
            <a class="btn btn-primary" href="?r=produit&m=list">Retour</i></a>
            <a class="btn btn-primary" href="?r=produit&m=edit&id=<?=$data['id'];?>">Modifier</i></a>
            <a class="btn btn-danger" onclick="return confirm('Etes-vous sur de vouloir le supprimer ?')" href="exe/produit/delete.php?id=<?php echo $data['id'] ;?>">Supprimer</a>
            <!-- <button type="submit" class="btn btn-primary">Enregistrer</button> -->
        </form>
    </main>
    
</body>
</html>
<!--Debut modal section-->

<!--Fin modal section--> 