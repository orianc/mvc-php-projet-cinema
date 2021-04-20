<div class="container">
    <div class="row">
        <h1>
            <?= $titrepage ?>
        </h1>

        <p>
            Découvrez la liste des films diffusé actuellement.
        </p>

        <div class="container">
            <div class="row justify-content-center">
                <?php

                use system\lib\Util;

                foreach ($films as $f) : ?>
                    <div class="col-3 bg-light rounded mx-1 p-4">
                        <h2 class="text-center text-uppercase"><?= $f->titre_film?></h2>
                        <p> <?= $f->resume_film ?></p>
                        <footer>

                            <p><a href="<?= BASE_URL ?>/film/detail<?= $f->id?>">More Détail...</a></p>


                        </footer>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>