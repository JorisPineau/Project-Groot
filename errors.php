<?php
$errors = [];


foreach($_POST as $key => $value) {
    $contact[$key] = trim($value);
}


if(empty($contact['user_firstname'])) {
    $errors[] = 'Le prénom est obligatoire';
}
if(empty($contact['user_lastname'])) {
    $errors[] = 'Le nom du est obligatoire';
}

if(empty($contact['user_email'])) {
    $errors[] = 'L\'email est obligatoire';
}


if(empty($contact['user_number'])) {
    $errors[] = 'Le numéro de téléphone est obligatoire';
}

if(empty($contact['user_message'])) {
    $errors[] = 'Le message est obligatoire';
}

if(!empty($errors)) {
    require "error.php";
    die();}
?>

<?php $contact = $_POST ?>


<link rel="stylesheet" href="success.css">
<header>
        <div class="errorPanel">
            <h1 class="errorTitle" >Nous rencontrons les problemes suivants pour traiter votre demande : </h1>
</header>
<main>
<div class="errorSummary">
            <ul>
                <?php foreach($errors as $error) : ?>
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
        </div>