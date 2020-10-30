<?php

require_once 'Modele/Modele.php';

/**
 * Accès aux constructeurs
 * 
 * @author Mickael labbe
 */
class Constructeur extends Modele {

    /** Renvoie la liste des constructeurs du blog
     * 
     * @return PDOStatement La liste des constructeurs
     */
    public function getConstructeurs() {
        $sql = 'select idConst as id,logo as logo,'
                . ' nomConst FROM constructeur'
                . ' order by idConst desc';
        $constructeurs = $this->executerRequete($sql);
        return $constructeurs;
    }

    /** Renvoie les informations sur un constructeur
     * 
     * @param int $id L'identifiant du constructeur
     * @return array Le constructeur
     * @throws Exception Si l'identifiant du constructeur est inconnu
     */
    public function getConstructeur($idConst) {
        $sql = 'select idConst as id,logo as logo'
                . ' nomConst as titre'
                . ' where idConst=?';
        $Constructeur = $this->executerRequete($sql, array($idConst));
        if ($constructeurs->rowCount() > 0)
            return $constructeurs->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun constructeur ne correspond à l'identifiant '$idConst'");
    }

}