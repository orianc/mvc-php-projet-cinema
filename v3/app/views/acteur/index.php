<?php

use system\lib\Util; ?>

<div class="container">
    <div class="row">
        <h1>
        <?=$titrepage?>
        </h1>

        <p>
            Découvrez la liste des acteurs et leurs films associés.
        </p>

        <div class="container">
            <div class="row col-12 col-sm-6 col-md-4 mx-1 py-3 bg-secondary rounded">
                <?php
                foreach ($acteurs as $a) : ?>
                    <a href="">
                        <h3 class="text-white"><?= $a->prenom . " " . $a->nom ?></h3>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>