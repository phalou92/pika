<!Doctype html>
<html>
    <head>
        <title>Présentation du language HTML</title>
        <meta charset="utf-8">
        <meta name="keywords" content="motclé1 motclé2">
        <link type="text/css" rel="stylesheet" href="style.css">
        <meta name="description" content="la description du site web">
        <meta name="author" content="Nom Prenom">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
    <?php include 'header.html';
    ?>

     <!--fait par ryan-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"><img src="./img/adrar.jpg" height="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="presentation.html">HTML</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="css.html">CSS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mini-jeux
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="jeux/mariofps.html">Mariofps</a></li>
                  <li><a class="dropdown-item" href="jeux/flappytrump.html">FlappyTrump</a></li>
                  <li><a class="dropdown-item" href="jeux/sonic.html">Sonic</a></li>
                  <li><a class="dropdown-item" href="jeux/tetris.html">Tétris</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="librairietreejs.html">librairieThreeJS</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav><br>
            <h1>Présentation du language HTML</h1><br>
        
           <h2>
            Le language HTML c'est quoi ?
           </h2>
            <div class="container">
            <div class="row">
                <div class="col-4 card py-3 border-danger" id="paragraphe">HTML (HyperText Markup Language) est un langage de description
                    (dit de marquage) de pages Web. Il permet de présenter les documents
                    hypertextes destinés à être affichés sur le navigateur.</div>
                <div class="col-4"><img src="./img/illust.png" height="auto" width="350px"></div>
                <div class="col-4 card py-3 border-danger" id= "paragraphe1">Il s'agit d'un langage coté client (tout comme CSS et Javascript).
                    Il est supporté et développé par W3C. L'origine du HTML remonte
                    au début du Web. En effet, il a été inventé vers les années 1989
                    afin qu'il puisse présenter les documents qui circulent sur la toile
                    et établir des liens entre eux à travers les liens hypertextes (ou hyperliens).</div>
            </div>
            </div><br><br>

            <h2>Exemple de ce qu'on peut faire avec HTML :</h2><br>
            <div class="container">
                <div class="row">
                    <div class="col-6"><img src="./img/exp_html.png" /></div>
                    <div class="col-6 col-4 card py-3 border-danger">Voila ce que ça donne une fois entré dans une ligne HTML ceci nous permet de créer un sondage.</div>
                </div>
            </div><br><br>            
            <form ....>
            <h3>Avez vous bien aimé cette explication ?</h3><br>
                <input type="radio" value="reponse_1" name="choix">
                OUI
                <input type="radio" value="reponse_2" name="choix">
                NON
                </form><br><br>
                <div class="footer-basic">
                  <footer>
                      <ul class="list-inline">
                          <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                          <li class="list-inline-item"><a href="formulaire.html">Donnez nous votre avis</a></li>
                          <li class="list-inline-item"><a href="#">Ou nous trouver</a></li>
                          <li class="list-inline-item"><a href="#">Mention légales</a></li>
                      </ul>
                      <div style="text-align:center">
                        <p class="copyright">L'adrar d'Ernersto</p>
                      </div>
                  </footer>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>
</html>


