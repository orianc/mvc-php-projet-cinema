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
            <div class="row justify-content-center">
                <?php
                foreach ($acteurs as $a) : ?>
                    <a href="">
                        <h3 class="text-center"><?= $a->prenom . " " . $a->nom ?></h3>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>