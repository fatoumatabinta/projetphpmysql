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
        <h2 class="text-center mt-3">Enregistrer un produit</h2>
        <form method="POST" action="./exe/produit/add.php">
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
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </main>
    
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>