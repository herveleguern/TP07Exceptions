<?php
require 'ProduitException.php';

class Panier
{
    private $ref;
    private $lesProduits; //Array de Produit

    function __construct($ref)
    {
        $this->ref = $ref;
        $this->lesProduits = array(); //panier initialement vide
    }

    /*
    VERSION1
    public function ajouterProduit($unProduit, $quantite) {
        $exemplaires = $unProduit->getStock();
        if ($quantite > $exemplaires) {
            throw new ProduitException('Stock insuffisant',0); 
        }
        $this->lesProduits[$unProduit->getRef()] = array($unProduit,$quantite);
    }
*/
/*VERSION2 : personnaliser le message*/
    public function ajouterProduit($unProduit, $quantite) {
        $exemplaires = $unProduit->getStock();
        if ($quantite > $exemplaires) {
            $message="Stock insuffisant, ";
            $message.="produit=".$unProduit->getRef().", ";
            $message.="stock=".$unProduit->getStock().", ";
            $message.="qtéCommandée=".$quantite;
            throw new ProduitException($message,0); 
        }
        $this->lesProduits[$unProduit->getRef()] = array($unProduit,$quantite);
    }
    public function supprimerProduit($uneCle) {
        unset($this->lesProduits[$uneCle]);
    }
    
    public function getLesProduits()
    {
        return $this->lesProduits;
    }

   }
