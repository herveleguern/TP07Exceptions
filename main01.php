<?php
require 'panier.php';
require 'produit.php';

$panier=new Panier('panier1');
$produit1=new Produit('bicb','bic bleu',1,40);

try{
    $panier->ajouterProduit($produit1,100);
} catch(Exception $e){
    echo $e->getMessage()."\n";
}


?>
