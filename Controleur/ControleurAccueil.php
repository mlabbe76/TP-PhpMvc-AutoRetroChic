<?php

require_once 'Modele/Constructeurs.php';
require_once 'Modele/modeleAuto.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $constructeur;
    private $modeleAuto;

    public function __construct() {
        $this->constructeur = new Constructeur();
        $this->modeleAuto = new modeleAuto();

    }

// Affiche la liste de tous les constructeurs
    public function accueil() {
        $constructeurs = $this->constructeur->getconstructeurs();
        $modeleAuto =$this->modeleAuto->getmodeleAutos();
        $vue = new Vue("Accueil");
        $vue->generer(array('constructeurs' => $constructeurs,'modele'=>$modeleAuto));
    }

}

