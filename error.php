<section class="errorPanel">
    <header>
        <h1 class="errorTitle">Nous rencontrons les problemes suivants pour traiter votre demande : </h1>
    </header>
    <main>
        <div class="errorSummary">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
    </main>
    <footer>
        <p class="back">
            <a href="index.php"><button class="errorButton">Retour au formulaire</button></a>
        </p>

    </footer>
</section>

