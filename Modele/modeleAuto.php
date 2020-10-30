<?php

require_once 'Modele/Modele.php';

/**
 * Accès aux modeles constructeurs
 * 
 * @author Mickael labbe
 */
class modeleAuto extends Modele {

    /** Renvoie la liste des modeles auto du site
     * 
     * @return PDOStatement La liste des modèles auto
     */
    public function getmodeleAutos() {
        $sql = 'select idVoit as id,nomModele as modeleAuto,visuel'
                . ' FROM voiture'
                . ' order by idVoit desc limit 3';
        $modeleAuto = $this->executerRequete($sql);
        return $modeleAuto;
    }

    /** Renvoie les informations sur un modele auto
     * 
     * @param int $id L'identifiant du modele
     * @return array Le modele auto
     * @throws Exception Si l'identifiant du constructeur est inconnu
     */
    public function getmodeleAuto($idVoit) {
        $sql = 'select idVoit as id,nomModele as modeleAuto'
                . ' nomModele as nomModele FROM voiture'
                . ' where idVoit=?';
        $modeleAuTo = $this->executerRequete($sql, array($idVoit));
        if ($modeleAuto->rowCount() > 0)
            return $modeleAuto->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun constructeur ne correspond à l'identifiant '$idVoit'");
    }

}