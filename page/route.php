<?php
    if(!empty($_GET['r'])){
        switch($_GET['r']){
            case "produit":
                require_once("./module/produit/index.php");
                break;
            default:
                echo "Error";        
        }
    }

?>