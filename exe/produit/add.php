<?php
require_once("../../dbConfig.php");
  if(!empty($_POST['libelle'] && !empty($_POST['description']))){
      extract($_POST);
    //   var_dump($_POST);
    $sql=$dbConnexion->prepare("SELECT * FROM produits WHERE libelle=?");
    $sql->bindParam(1,$libelle);
    $sql->execute();
    $data=$sql->fetch();
    if($data){
      echo "<script>alert('Cet produit existe deja')
                        document.location.href='../../?r=produit&m=add';
                    </script>";
    }
    //   var_dump($dbConnexion);
      $sql=$dbConnexion->prepare("INSERT INTO produits(libelle,descriptions,prixunitaire,quantite,montantstock) VALUES(?,?,?,?,?)");
      $sql->bindParam(1,$libelle);
      $sql->bindParam(2,$descriptions);
      $sql->bindParam(3,$prixunitaire);
      $sql->bindParam(4,$quantite);
      $sql->bindParam(5,$montantstock);
      $sql->execute();
      try {
          if($sql){
              echo "<script>alert('Enregistrement avec success')
                        document.location.href='../../?r=produit&m=list';
                    </script>";
          }
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }else{
        echo "<script> alert('tous les champs sont obligatoire')</script>";
        header("Location: ../../?r=produit&m=add");
        die();
  }
?>