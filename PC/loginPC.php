<!DOCTYPE html>
<html>
  <head>
    <?php session_start(); ?>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../Ressources/design.css" type="text/css"/>
    <link rel="stylesheet" href="../Ressources/bootstrap.min.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="../Ressources/jquery.min.js"></script>
    <script src="../Ressources/bootstrap.min.js"></script>
  </head>
  <body>
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
    <section id="Connexion">
      <form action="#" method="post">
        <table class="tabCo">
          <tr>
            <td>Identifiant : <input type="text" name="Pseudo"/></td>
          </tr>
          <tr>
            <td>Mot de passe : <input type="password" name="Pass"/></td>
          </tr>
          <tr>
            <td><input type="submit" value="Valider !"/></td>
          </tr>
        </table>
      </form>
    </section>

    <?php
      if (!empty($_POST['Pseudo']) && !empty(sha1($_POST['Pass']))) {
        $VerifPseudo = 0;
        $VerifMDP = 0;
        $pseudo = htmlspecialchars($_POST['Pseudo']);
        $MDP = htmlspecialchars(sha1($_POST['Pass']));
        try {
          $bdd = new PDO('mysql:host=127.0.0.1;dbname=Medilik;charset=utf8', 'phpmyadmin', 'crea-campus');
        } catch(Exception $e) {
              die('Erreur : '.$e->getMessage());
        }
        $reponse = $bdd->query('SELECT ID, Pseudo, MDP FROM USER');
        while ($donnees = $reponse->fetch())
        {
          if ($donnees['Pseudo'] == $pseudo){
            $VerifPseudo = 1;
          }
          if ($donnees['MDP'] == $MDP){
            $VerifMDP = 1;
          }
        }
        if ($VerifPseudo == 1 && $VerifMDP == 1){
          echo "OK !";
          session_start();
          $_SESSION['id'] = $donnees['ID'];
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['mail'] = $donnees['Email'];
          header('Location: indexPC.php');
        }
        else{
          echo "Mauvaise connection !";
        }
      }
    ?>


  </body>
  <footer>
SAS Médilib<br/>
Siret N° 000000000000<br/>
Adresse ; 45000 Orléans<br/>
  </footer>
</html>
