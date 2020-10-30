<?php $this->titre = "Auto Retro chic"; ?>
<section style="padding:1%;margin:0 10% 0 10%;">
<?php           echo'<p style="margin-left:2%;">';      
                echo'<p>Dans les années 30 et 40, les constructeurs automobiles français allièrent à l\'aérodynamisme de la carrosserie, l\'esthétisme stylistique.</p>';
                echo'<p>Au cours d\'une trentaine d\'années on était passé de la voiture à caisse carrée, dérivée du fiacre ou de la calèche, aux somptueuses carrosseries aux courbes et galbes voluptueux. L\'élan dynamique et affiné des lignes se mariait à l\'ondoiement et aux volutes des ailes, capots, habitacles et coffres.</p>';
                echo'<p>Dès lors, les profils s\'étirent en mouvance féminine, les proues, parées de chromes, s\'élargissent et se virlisent avec cette retenue tout à fait remarquable dans l\'aggressivité, les poupes s\'abaissent et s\'allongent, la ligne de fuite veut que l\'auto colle à la route.</p>';
                echo'</p>';
?>
</section>
<section style="padding:1%;margin:0 5% 0 5%">
<?php foreach ($modele as $mAuto):?>
    <article>
        <header>        
            
            <a href="<?= "index.php?action=nomModele&id="  ?>"><img src="<?= $mAuto['visuel'] ?>" alt="">
            </a>
            
        </header>
    </article> 
    
    <hr />
<?php endforeach; ?>
</section>
