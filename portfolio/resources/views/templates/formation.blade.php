<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>



    <link rel="stylesheet" href="/css/style.css">


</head>

<body>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta http-equiv="X-UA-Compatible" content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    </head>

    <body>
        <!-- navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <button class="navbar-toggle" data-target="#mainMenu" data-toggle="collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            </div>
            <div id="mainMenu" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li>
                      <a href="{{ url('/login') }}">Accueil</a>
                  </li>
                  <li>
                      <a href="{{ url('/competence') }}">Competence </a>
                  </li>
                  <li>
                      <a href="{{ url('/formation') }}">Formation </a>
                  </li>

                  <li>
                      <a href="{{ url('/projet') }}">Projet </a>
                  </li>
                  <li>
                      <a href="{{ url('/page404') }}">Page 404 </a>
                  </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
        <!-- navbar -->


        <!--social-->

        <section>
            <a name="About"></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="jumbOut">
                        <div class="jumbotron">
                            <div id="jumbIn">


                                <p>
				                            <br>Formation professionalisante Développeur web et mobile- IT-Akademy - Novembre 2016 à Avril 2017<br>
                                    <br> Brevet technicien supérieur service informatique aux organisations – Lycée Simone Weil Septembre 2013 – Juillet 2016
                                    <br><br> Baccalauréat science et technologie de la gestion – Lycée Simone Weil Septembre 2012 – Juillet 2013
                                    <br><br> Formation d’arbitrage – district de la Loire et ligue Rhône-Alpes Mars 2010
                                    <br><br> Diplôme national du brevet – collège privée Saint-Paul</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--tabs-->
        <section>
            <div class="container">
                <div class="row row-centered Hd" id="Hd">
                    <div class="col-lg-16">
                        <div class="row" id="buttons">
                            <a class="btn btn-success" href="http://github.com/" target="_blank">Github</a>

                            <a class="btn btn-success" href="http://www.rehahlabilel1.altervista.org" target="_blank">Wordpress</a>
                        </div>


                    </div>
                </div>
            </div>
            <!--social-->
        </section>

        <!--modal-->
        <div id="modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class='pull-right'><i class="fa fa-close"></i></button>
                        <h4 class='modal-title'>Contact information:</h4>
                    </div>
                    <div class="modal-body">
                        <video src="http://oky.16mb.com/MYpublic/videoplayback2.ogg" type="video/ogg" autoplay loop></video>
                        <div class="carousel-caption">
	      <h1>Bienvenue sur ma page de contact</h1>
              <?php require 'verificationcontact.php'; ?>
              <h3>Mail: Bilel68@gmail.com</h3>
	      <form action="" method="POST">
              <label for="name">Nom : </label>
              <input type="text" name="name" id="name"><br>
              <label for="email">Email : </label>
              <input type="text" name="email" id="email"><br>
              <label for="message">Message : </label>
              <textarea name="message" id="message"></textarea><br>
              <button type="submit">Envoie</button>
              </form>

                            <h3>mail: bilel68@gmail.com</h3>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success " data-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>

        <button id="fixedButton" class="btn btn-success fixed" data-toggle="modal" data-target='#modal'>Contacts</button>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>

</body>

</html>
