<?php
    require_once("./exe/produit/liste.php");
    if(!empty($_GET['id'])){
        $id=$_GET['id'];
        var_dump($id);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">   
        <!--Debut modal section-->
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier un produit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <?php
                        var_dump($data);
                    ?>
                   
                    <div class="modal-body">
                        <form method="" action="./exe/produit/add.php">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Libelle</label>
                                <input type="text" class="form-control" name="libelle" value="<?= $data['libelle'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Descriptions</label>
                                <input type="descriptions" class="form-control" name="descriptions" value="<?= $data['descriptions'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Prixunitaire</label>
                                <input type="prixunitaire" class="form-control" name="telephone" value="<?= $data['prixunitaire'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Quantite</label>
                                <input type="quantite" class="form-control" name="quantite" value="<?= $data['quantite'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Montantstock</label>
                                <input type="montantstock" class="form-control" name="montantstock" value="<?= $data['montantstock'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin modal section-->  

        <!-- Debut liste produit -->
        <h2 class="text-center mt-3">La liste des produits</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prixunitaire</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Montantstock</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($data as $value){?>
                    <tr>
                        <td colspan="1"><?php echo $value['libelle']; ?></td>
                        <td colspan="1"><?php echo $value['description']; ?></td>
                        <td colspan="1"><?php echo $value['prixunitaire']; ?></td>
                        <td colspan="1"><?php echo $value['quantite']; ?></td>
                        <td colspan="1"><?php echo $value['montantstock']; ?></td>
                        <td colspan="" class="text-center"><a href="?r=produit&m=edit&id=<?php echo $value['id']?>" data-bs-toggle="" data-bs-target="#">modifier</a></td>
                        <td colspan=""><a onclick="return confirm('Etes-vous sur de vouloir le supprimer ?')" href="exe/produit/delete.php?id=<?php echo $value['id'] ;?>">supprimer</a></td>
                        <td colspan=""><a href="?r=produit&m=voir&id=<?php echo $value['id']?>">details</a></td>
                       
                    </tr>
                <?php }?>
            </tbody>
        </table>
        <!-- Fin liste produits -->
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>        
</html>