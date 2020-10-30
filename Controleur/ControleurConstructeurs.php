<?php

require_once 'Modele/Constructeurs.php';
require_once 'Vue/Vue.php';

class ControleurConstructeurs {

    private $constructeur;
    private $commentaire;

    public function __construct() {
        $this->constructeur = new Constructeur();
    }

    // Affiche les détails sur un constructeur
    public function constructeur($idConst) {
        $constructeur = $this->constructeur->getConstructeur($idConstructeur);
        $commentaires = $this->commentaire->getCommentaires($idConst);
        $vue = new Vue("Constructeur");
        $vue->generer(array('constructeur' => $constructeur));
    }
}

