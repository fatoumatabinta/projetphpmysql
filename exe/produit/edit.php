<?php
    require_once("../../dbConfig.php");
    var_dump($dbConnexion);
    if(!empty($_GET)){
        extract($_GET);
        $sql=$dbConnexion->prepare("UPDATE produits SET libelle=:libelle, descriptions=:descriptions,prixunitaire=:prixunitaire, descriptions=:descriptions,quantite=:quantite, descriptions=:descriptions,montantstock=:montantstock WHERE id=:id");
        $sql->bindParam(':libelle',$libelle);
        $sql->bindParam(':descriptions',$descriptions);
        $sql->bindParam(':prixunitaire',$prixunitaire);
        $sql->bindParam(':quantite',$quantite);
        $sql->bindParam(':montantstock',$montantstock);
        $sql->bindParam(':id',$id);
        $data=$sql->execute();
        try {
            if($data){
                header("Location: ../../?r=produit&&m=list");
            }
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
    }
?>