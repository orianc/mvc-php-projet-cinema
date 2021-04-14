<div class="container">
    <div class="row">
        <h1>
            Les films
        </h1>

        <p>
            Découvrez la liste des films diffusé actuellement.
        </p>

        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div>
                        <h2 class="titre-film"></h2>
                        <p class="synopsys"></p>
                        <footer>
                            <p class="acteur"></p>
                            <p class="realisateur"></p>
                        </footer>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>