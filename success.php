<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
    <link rel="stylesheet" href="success.css">
</head>

<body>
<div class="validation">
    <header>
        <h1>Nous traitons votre retour...</h1>
    </header>

    <main>
        <div class="summary">
      <p>  <?php echo 'Merci brave ' . $_POST['user_origin']. ' ' . $_POST ['user_firstname'] . ' ' . $_POST ['user_lastname'] . ' de nous avoir contacter' . '.' . ' Un de nos conseillers vous contactera soit à l’adresse : ' . $_POST ['user_email'] . ' ou par téléphone au : ' . $_POST ['user_number'] . 
        ' dans les plus brefs délais pour traiter votre demande : ' . 
         $_POST ['user_message'];?> </p>
    </main>
    <footer>
    <p class="back">
                <a href="index.php"><button>Retour à l'accueil</button></a>
            </p>
</footer>
</div>
</body>

</html>