<?php
require 'experiences.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Project-Groot</title>
</head>

<body>
  <!-- TODO EN-TÊTE HEADER/NAVIGATION -->
  <header>
    <section id="accueil">
      <nav>
        <div class="logo"></div>
        <div id="mySidenav" class="burger">
          <a id="closeBtn" href="#links" class="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </a>
        </div>

        <ul class="links" id="links">
          <li><a href="#presentation-section">Presentation</a></li>
          <li><a href="#experience-section">Experiences</a></li>
          <li><a href="#competences-section">Competences</a></li>
          <li><a href="#hobbies-section">Hobbies</a></li>
          <li><a href="#contact-section">Contact</a></li>
        </ul>

      </nav>
    </section>
  </header>

  <!-- TODO MAIN PRESENTATION -->
  <main>
    <section class="presentation" id="presentation-section">
      <div class="description">
        <img class="groot-mini" src="assets/images/groot-presentation.png" alt="groot picture" />
        <h1 class="title-presentation">Je s'appelle ...</h1>
        <p class="text-presentation">Hey ! Moi c’est GROOT ! </br>
          Je suis un extraterrestre hyper intelligent ressemblant à un</br>
          arbre de l'espèce "FLORA COLOSSUS" originaire de la PLANETE X ! </br>
          Je possède est très très gros casier judiciaire et j’ai étais</br>
          longtemps considéré comme un criminel. </br>
          Mais aujourd’hui..., Le monde me voit comme un HERO !</br>
          Effectivement, je s’appel GROOT et en ce moment je cherche</br>
          du travail alors... j’ai décidé de te contacter haha..</br>
          Je suis motivé, doux, chaleureux et simple d’esprit.</br>
          Bon, au cas ou, si ma description t’as plus ou si tu cherches</br>
          quelqu’un pour t’aider, MAIS PAS BÉNÉVOLEMENT, je te laisses</br>
          découvrir mon Curriculum Vitae, en défilant juste en dessous !</p>
      </div>
    </section>
    <div class="groot-dirt"></div>

    <!-- TODO MAIN EXPERIENCE -->
    <section class="experiences" id="experience-section">
      <h1 class="title-experiences">experiences</h1>

      <div class="articles">
        <!-- ligne timeline -->
        <div class="barre"><img src="./assets/images/liane.png" alt=""></div>

        <!-- cercle timeline -->
        <div class="circle-box">
          <div class="circle-article circle1" data-anim="1"></div>
          <div class="circle-article circle2" data-anim="2"></div>
          <div class="circle-article circle3" data-anim="3"></div>
          <div class="circle-article circle4" data-anim="4"></div>
          <div class="circle-article circle5" data-anim="5"></div>
          <div class="circle-article circle6" data-anim="6"></div>
        </div>

        <?php foreach ($articles as $key => $article) : ?>
          <div class="article-timeline article<?php echo $key + 1 ?>" data-anim="<?php echo $key + 1 ?>">

            <div class="image-timeline">
              <img src="assets/images/<?php echo $article['img'] ?>.jpeg">
            </div>

            <article class="text-article">

              <h2><?php echo $article['title'] ?></h2>
              <p><?php echo $article['description'] ?></p>

            </article>

          </div>
          
        <?php endforeach ?>
      </div>
    </section>

    <!-- TODO MAIN COMPETENCE -->

    <section class="competences" id="competences-section">
      <h1 class="title-competences">Competences</h1>
      <div class="container">
        <input type="radio" name="slider" class="d-none" id="s1">
        <input type="radio" name="slider" class="d-none" id="s2">
        <input type="radio" name="slider" class="d-none" id="s3">
        <input type="radio" name="slider" class="d-none" id="s4">
        <input type="radio" name="slider" class="d-none" id="s5">

        <div class="cards">
          <label for="s1" id="slide1">

            <div class="card">
              <div class="image">
                <img src="assets/images/grootabaisser.jpg" alt="">
              </div>

              <div class="infos">
                <h2>Élasticité</h2>
              </div>
            </div>
          </label>

          <label for="s2" id="slide2">
            <div class="card">
              <div class="image">
                <img src="assets/images/grootconfiant.jpg" alt="">
              </div>
              <div class="infos">
                <h2>Tentacules de vigne</hé>
              </div>
            </div>
          </label>

          <label for="s3" id="slide3">
            <div class="card">
              <div class="image">
                <img src="assets/images/grootchampdebataille.jpg" alt="">
              </div>
              <div class="infos">
                <h2>Génération de feuilles</h2>
              </div>
            </div>
          </label>

          <label for="s4" id="slide4">
            <div class="card">
              <div class="image">
                <img src="assets/images/grootguerre.jpg" alt="">
              </div>
              <div class="infos">
                <h2>Bouclier de branche</h2>
              </div>
            </div>
          </label>

          <label for="s5" id="slide5">
            <div class="card">
              <div class="image">
                <img src="assets/images/grootprets.jpg" alt="">
              </div>
              <div class="infos">
                <h2>Pointes de brindilles</h2>
              </div>
            </div>
          </label>
        </div>
      </div>
      <section class="description-skill">
        <div class="container-skill">
          <div class="content-skill">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eaque dolor provident velit, doloribus accusantium dolore, optio nihil tempore, repudiandae cumque voluptas perspiciatis reprehenderit! Est, natus quidem! Culpa, nobis iste.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eaque dolor provident velit, doloribus accusantium dolore, optio nihil tempore, repudiandae cumque voluptas perspiciatis reprehenderit! Est, natus quidem! Culpa, nobis iste.</p>
          </div>
        </div>
      </section>
    </section>

      <!-- TODO MAIN HOBBIES -->
      <section class="hobbies" id="hobbies-section">
        <h1 class="title-hobbies">hobbies</h1>

        <div class="container-menu">
          <!-- todo Groot picture -->
          <div class="btn-menu">
            <img src="assets/images/cute_groot.png" alt="groot's picture" />
          </div>
          <!-- todo icones bouton hobbies -->
          <div class="blob blob-1" id="modal-trigger" role="button" data-target="#modal" data-toggle="modal">
            <img src="assets/images/picto-music.png" alt="pictogram music" class="icone" />
          </div>
          <div class="blob blob-2" id="modal-trigger" role="button" data-target="#modal2" data-toggle="modal">
            <img src="assets/images/picto-cosplay.png" alt="pictogram cosplay" class="icone" />
          </div>
          <div class="blob blob-3" id="modal-trigger" role="button" data-target="#modal3" data-toggle="modal">
            <img src="assets/images/picto-dance.png" alt="pictogram dance" class="icone" />
          </div>
          <div class="blob blob-4" id="modal-trigger" role="button" data-target="#modal4" data-toggle="modal">
            <img src="assets/images/picto-game.png" alt="pictogram video game" class="icone" />
          </div>
          <div class="blob blob-5" id="modal-trigger" role="button" data-target="#modal5" data-toggle="modal">
            <img src="assets/images/picto-food.png" alt="pictogram video game" class="icone" />
          </div>
          <div class="blob blob-6" id="modal-trigger" role="button" data-target="#modal6" data-toggle="modal">
            <img src="assets/images/picto-nature.png" alt="pictogram video game" class="icone" />
          </div>
          <div class="blob blob-7" id="modal-trigger" role="button" data-target="#modal7" data-toggle="modal">
            <img src="assets/images/picto-book.png" alt="pictogram video game" class="icone" />
          </div>
          <div class="blob blob-8" id="modal-trigger" role="button" data-target="#modal8" data-toggle="modal">
            <img src="assets/images/picto-draw.png" alt="pictogram video game" class="icone" />
          </div>
        </div>


        <!-- todo Modale 1 : Musique -->
        <div class="modal-container" id="modal" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- todo Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img1"></div>
              <h2>Groot aime la musique</h2>
              <p class="text-modal">
                Un des passe temps à Groot est d'écouter la musique. Depuis
                qu'il est aux côtés des Gardiens de la Galaxie, Peter Quill à
                fait découvrir à Groot sa passion qui lui rapelle son époque
                quand il était sur Terre.
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 2 : Cosplay -->
        <div class="modal-container" id="modal2" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img2"></div>
              <h2>Groot aime ce déguiser</h2>
              <p class="text-modal">
                Cela peut surprendre ! En effet Groot est RP ! Il aime se
                déguiser et prend son rôle très sérieux.
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 3 : Danse -->
        <div class="modal-container" id="modal3" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img3"></div>
              <h2>Groot aime danser</h2>
              <p class="text-modal">
                Depuis ce renaissance, Groot se comporte comme un enfant. Dès
                qu'il entend de la musique, Groot se met dans l'ambiance et ne
                peut s'empêcher de danser même si ces compagnons se battent
                juste à côté de lui !
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 4 : Jeux vidéo -->
        <div class="modal-container" id="modal4" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img4"></div>
              <h2>Groot aime jouer aux jeux vidéos</h2>
              <p class="text-modal">
                Lorsque Groot était un petit arbuste, il aimait déjà toucher à
                tous les boutons autours de lui. En particulier des détonateurs.
                Lorsqu'il atteint l'adoslence, Groot ne pense qu'à jouer aux
                jeux vidéos dans sa chambre et déteste être dérangé.
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 5 : Nourriture -->
        <div class="modal-container" id="modal5" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img5"></div>
              <h2>Groot aime manger</h2>
              <p class="text-modal">
                Groot adore manger des cochonneries. Dès qu'il en a l'occasion,
                il dévore chips, bonbons et pleins d'autres sucreries.
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 6 : Plantes -->
        <div class="modal-container" id="modal6" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img6"></div>
              <h2>Groot aime les plantes</h2>
              <p class="text-modal">
                Groot considère ces semblables comme des frères et soeurs. Il
                s'occupe d'eux en les parlant, les câlinant et en les
                nourrissant.
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 7 : Lecture -->
        <div class="modal-container" id="modal7" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img7"></div>
              <h2>Groot aime lire des BD</h2>
              <p class="text-modal">
                Groot adore passer le temps à lire des livres. En particulier
                des Comics !
              </p>
            </div>
          </div>
        </div>

        <!-- todo Modale 8 : Art -->
        <div class="modal-container" id="modal8" role="dialog">
          <!-- arrière-plan modale -->
          <div class="overlay" id="modal-trigger"></div>

          <!-- Fenêtre modale -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-modal" id="modal-trigger" data-dismiss="dialog">
                X
              </button>
              <div class="modal-image-container img8"></div>
              <h2>Groot aime dessiner</h2>
              <p class="text-modal">
                Groot possède un esprit très créatif. Comme les enfants, il
                adore dessiner. Il montre son affection en dessinant les membres
                de son groupe qui pour lui, représente sa famille.
              </p>
            </div>
          </div>
        </div>
      </section>
  </main>

  <footer>

    <!-- TODO FOOTER CONTACT -->
    <section class="contact" id="contact-section">
      <h1 class="title-contact">Contact</h1>
      <!-- todo Formulaire -->
      <div class="content-form">
        <div class="form">
          <form action="success.php" id="formulaire" method="POST">
            <input type="text" id="first-name" name="user_firstname" placeholder="Prénom" required>
            <input type="text" id="last-name" name="user_lastName" placeholder="Nom" required>
            <input type="email" id="email" name="user_email" placeholder="Email" required>
            <input type="number" id="number" name="user_number" placeholder="Numéro" required>
            <label for="user_origin">Veuillez séléctionner votre origine</label>
            <select name="user_origin" id="user_origin">
              <option value="terrien">Terrien</option>
              <option value="wookies">Wookies</option>
              <option value="martien">Martien</option>
              <option value="robot">Robot</option>
            </select>
            <textarea id="message" name="user_message" placeholder="Message..." cols="30" rows="10" required></textarea>
            <button type="submit">envoyer</button>
          </form>
        </div>

        <!-- todo Contact réseaux -->
        <div class="info">
          <div class="groot-footer">
            <img class="groot-bye" src="assets/images/goot--contact.png" width="600px">
          </div>
          <div class="contact-info">
            <p class="text-footer">Chez les <span>Gardiens de la Galaxy</span> </br>
              Le Milano </br>
              </br>
              Tel. : 06 56 69 75 41</br>
              groot.tree@galaxy.fr</br>
          </div>
          <div class="reseaux">
            <div class="circle-logo">
              <a href="https://www.instagram.com/babygrootbabygroot/" target="_blank"><img src="assets/images/logo-insta.png" width="28px"></a>
            </div>
            <div class="circle-logo">
            <a href="https://www.tiktok.com/@groot_le_plus_fort/" target="_blank"><img src="assets/images/logo-tiktok.png" width="23px"></a>
            </div>
            <div class="circle-logo">
            <a href="https://twitter.com/GrootTreeWiz" target="_blank"><img src="assets/images/logo-twitter.png" width="30px"></a>
            </div>
            <div class="circle-logo">
            <a href="https://www.youtube.com/@GROOT98" target="_blank"><img src="./assets/images/logo-youtube.png" width="33px"></a>
            </div>
            <div class="circle-logo">
            <a href="https://fr-fr.facebook.com/people/Je-Sappelle-Groot/pfbid0eEyDREHoAyXSbr2aCKLVo3bMW4Az5hqskiMroBC5bN1WHQ7wLtfgTmiZa7n6fAaml/" target="_blank"><img src="assets/images/logo-fb.png" width="15px">
            </div>
          </div>
        </div>
      </div>
    </section>

  </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="script.js"></script>
</html>