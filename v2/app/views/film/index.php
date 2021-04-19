<div class="container">
    <div class="row">
        <h1>
            Les films
        </h1>

        <p>
            Découvrez la liste des films diffusé actuellement.
        </p>

        <div class="container">
            <div class="row justify-content-center">
                <?php

use system\lib\Util;

foreach ($films as $f) : ?>
                    <div class="col-4 bg-light rounded mx-1">
                        <h2 class="text-center"><?= $f->titre_film?></h2>
                        <p> <?= $f->resume_film?></p>
                        <footer>
                            <p class="acteur"></p>
                            <p><a href="#"><?= $f->realisateur_prenom . " " . $f->realisateur_nom?></a></p>
                            <p class=""><a href="#"><?= $f->nom_genre?></a></p>

                        </footer>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>