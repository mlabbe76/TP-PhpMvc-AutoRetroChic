<?php $this->titre = "Auto Retro chic"; ?>

<?php foreach ($constructeur as $construc):?>
    <article>
        <header>
                <h1 class="nomConst"><?= $construc['nomConst'] ?></h1>
                
            
            <a href="<?= "index.php?action=constructeur&id=" . $construc['id'] ?>"><img src="<?= $construc['logo'] ?>" alt="">
            </a>
            
        </header>
    </article> 
    
    <hr />
<?php endforeach; ?>