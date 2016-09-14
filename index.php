<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Hélène CHOLEZ</title>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="js/script.js"></script>

  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <script src="js/freewall.js"></script>

</head>

<body>

  <!--MENU-->
  <div class="wrapper menu">
    <div class="container">

      <div class="col-md-3 item">
        <a href="#me" title="Qui suis-je ?">
          Qui suis-je ?
        </a>
      </div>

      <div class="col-md-3 item">
        <a href="#competences" title="Mes compétences">
          Mes compétences
        </a>
      </div>

      <div class="col-md-3 item">
        <a href="#parcours" title="Mon parcours">
          Mon parcours
        </a>
      </div>

      <div class="col-md-3 item">
        <a href="#passions" title="Mes passions">
          Mes passions
        </a>
      </div>

    </div>
  </div>

  

  <div id="slides">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
  </div>

  <div class="wrapper sub-footer">
    <div class="container">

      <div class="row">
        <div class="col-md-4 adresse">
          Hélène CHOLEZ <br>
          17, rue Fustel de Coulanges <br>
          91 300 MASSY
        </div>

        <div class="col-md-4 coordonnee">
          <i class="fa fa-envelope" aria-hidden="true"></i> chlz.helene@gmail.com <br>
          <i class="fa fa-skype" aria-hidden="true"></i> brouille_art <br>
          <i class="fa fa-mobile" aria-hidden="true"></i> 07 70 36 92 94
        </div>

        <div class="col-md-4 reseaux">

          <a href="https://www.facebook.com/PrincesseKaboom" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>

          <a href="https://twitter.com/Hcholez" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>

          <a href="https://www.linkedin.com/in/h%C3%A9l%C3%A8ne-cholez-163b7a32?trk=nav_responsive_tab_profile_pic" target="_blank">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>

          <a href="https://plus.google.com/u/0/114766381686517225565/posts" target="_blank">
            <i class="fa fa-google-plus" aria-hidden="true"></i>
          </a>

        </div>

      </div>

    </div>
  </div>

  <div class="fleche">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </div>

  <div class="wrapper footer">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          Réalisé par moi même
        </div>
      </div>

    </div>
  </div>

  <script src="js/lightbox-plus-jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/jquery.slides.min.js"></script>
  <script type="text/javascript">

  $(function(){
        $("#slides").slidesjs({
          width: 940,
          height: 528
        });
      });

  </script>

</body>

</html>
