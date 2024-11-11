<?php
class Panier
{
    private $ref;
    private $lesProduits; //Array de Produit

    function __construct($ref)
    {
        $this->ref = $ref;
        $this->lesProduits = array(); //panier initialement vide
    }

    public function ajouterProduit($unProduit, $quantite) {
        $exemplaires = $unProduit->getStock();
        if ($quantite > $exemplaires) {
            throw new Exception('Stock insuffisant'); 
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
