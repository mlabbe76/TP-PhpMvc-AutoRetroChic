<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurConstructeurs.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlAccueil;
    private $ctrlConstructeurs;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlConstructeurs = new ControleurConstructeurs();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'constructeur') {
                    $idConst = intval($this->getParametre($_GET, 'id'));
                    if ($idConst != 0) {
                        $this->ctrlConstructeurs->constructeur($idConst);
                    }
                    else
                        throw new Exception("Identifiant de constructeur non valide");
                }
                else if ($_GET['action'] == 'nomConst') {
                    $nomConst = $this->getParametre($_POST, 'nomConst');
                    $logo = $this->getParametre($_POST, 'logo');
                    $idConst = $this->getParametre($_POST, 'id');
                    $this->ctrlConstructeurs->construct($nomConst, $logo, $idConst);
                }
                else
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}
