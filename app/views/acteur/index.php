<?php

use system\lib\Util; ?>
<div class="container">
    <div class="row">
        <h1>
            Les Acteurs
        </h1>

        <p>
            Découvrez la liste des acteurs et leurs films associés.
        </p>

        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($acteurs as $a) : ?>
                    <a href="">
                        <h3 class="text-center"><?= $a->prenom . " " . $a->nom ?></h2>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>