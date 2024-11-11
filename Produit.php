<?php
class Produit {
    private $ref;
    private $nom;
    private $prix;
    private $stock;

    function __construct($ref, $nom, $prix,$stock) {
        $this->ref = $ref;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock=$stock;
    }
    

    public function getRef()
    {
        return $this->ref;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getStock()
    {
        return $this->stock;
    }
}
?>
