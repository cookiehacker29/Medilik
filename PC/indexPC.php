<!DOCTYPE html>
<html>
  <head>
    <?php session_start(); ?>
    <meta charset="utf-8">
    <title>Crea campus project</title>
    <link rel="stylesheet" href="../Ressources/design.css" type="text/css"/>
    <link rel="stylesheet" href="../Ressources/bootstrap.min.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="../Ressources/jquery.min.js"></script>
    <script src="../Ressources/bootstrap.min.js"></script>
  </head>
  <body>
    <img id="ban" src="../Ressources/Banière.png"/>
    <header>
      <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="indexPC.php"></a>
          <img src="../Ressources/Logo.png">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="indexPC.php">Accueil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RDV <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="PrendreRDVPC.php">Prendre un RDV</a></li>
                <li><a href="MesRDVPC.php">Vos RDV</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Practiciens <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="ContactMedicPC.php">Échanger avec eux</a></li>
                <li><a href="#">Leurs qualité</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boutique Bio <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="ListeBoutiqueBIOPC.php">A proximité</a></li>
              </ul>
            </li>
            <li><a href="actualite.php">Actualité</a></li>
            <li><a href="partenaire.php">Partenaire</a></li>
            <li><a href="Qui-sommes-nous.php">Qui sommes-nous</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
              if (empty($_SESSION['pseudo'])) {
                  echo '<li><a href="RegisterPC.php">Inscrivez vous</a></li><li><a href="loginPC.php">Connectez vous</a></li>';
              } else {
                  echo '<li><a href="profilePC.php">Profil</a></li><li><a href="logoutPC.php">Deconnexion</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    </header>

    <section id="nav">
      <aside id="Liens important">
        <h2>Nos liens !</h2>
        <ul>
          <li><a href="https://www.facebook.com/Emileetuneplante/">Facebook</a></li>
        </ul>
      </aside>
    </section>


    <section id="Corps">
      <article id="recherche">
        <h1>Trouvez votre médecin !</h1>

        <form action="#" method="POST">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Type de médecine :</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Acupuncture</option>
              <option>Apithérapie</option>
              <option>Aromathérapie</option>
              <option>auriculothérapie</option>
              <option>Fasciathérapie</option>
              <option>Fleurs de Bach</option>
              <option>Homéopathie</option>
              <option>Hypnose</option>
              <option>Luminothérapie</option>
              <option>Médecine chinoise</option>
              <option>Ostéopathie</option>
              <option>Phytothérapie</option>
              <option>Sophrologie</option>
              <option>Techniques de relaxation </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ville</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ville">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Valider !</button>
        </form>
      </article>

      <article id="Introduction">
        <h1>Qu'est-ce que Medilib ?</h1>
        <p>paragraphe 1</p>
        <p>paragraphe 2</p>
        <p>paragraphe 3</p>
        <p>paragraphe 4</p>
      </article>

      <article id="background" />
    </section>

    <footer>
SAS Médilib<br/>
Siret N° 000000000000<br/>
Adresse ; 45000 Orléans<br/>
    </footer>
  </body>
</html>
