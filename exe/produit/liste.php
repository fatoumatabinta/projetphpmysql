<?php
    require_once("./dbConfig.php");
    $sql=$dbConnexion->prepare("SELECT * FROM produits ORDER BY id ASC");
    $sql->execute();
    $data=$sql->fetchAll(PDO::FETCH_ASSOC);
?>