<!DOCTYPE html>
<html >
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
<div class="container">
  <div class="row row-centered Hd" id="Hd">
    <div class="col-lg-16">
            <h3>Ici , vous pourrez voir les différentes compétences que j'ai pu acquérir durant mon parcours scolaire ainsi que pendant mes stages.  </h3>

            <div class="row" id="buttons">
              <a class="btn btn-success" href="http://github.com/" target="_blank">Github</a>

              <a class="btn btn-success" href="http://www.rehahlabilel1.altervista.org" target="_blank">Wordpress</a>
            </div>
         </div>
      </div>
    </div>
<!--social-->
</section>
<section>
<a name="About"></a>
<div class="container">
  <div class="row">
    <div class="col-lg-12" id="jumbOut">
      <div class="jumbotron">
      <div id="jumbIn">
      <div id="my"><img class="pull-left" src="/img/bilel.png" height="543" width="642" alt=""></div>
        <h2>Compétences :</h2>

        <p> Ainsi j'ai pu acquérir des connaissances et moyens de développements dans différent langage tels que le HTML/CSS, en PHP, JAVA, CMS (WordPress/Joomla), Git hub. </p>



</section>
<!--tabs-->

<!--portfolio-->
     <section id="portfolio">
        <div class="container" id="Portf">
            <div class="row Hd" id="rowPortf">
                <div class="col-lg-12 text-center">
                  <div class="box">
                  	<h3>&middot;  Languages :</h3>

                  	<div class="bg">
                  	<div class="html">
                  		<span class="left">HTML</span>
                  		<span class="right">70%</span>
                  	</div>
                  	</div>
                  <br>
                  	<div class="bg">
                  	<div class="css">
                  		<span class="left">css</span>
                  		<span class="right">70%</span>
                  	</div>
                  	</div>
                  <br>
                  	<div class="bg">
                  	<div class="php">
                  		<span class="left">php</span>
                  		<span class="right">50%</span>
                  	</div>
                  	</div>
                    <br>
                    <div class="bg">
                  	<div class="java">
                  		<span class="left">Java</span>
                  		<span class="right">50%</span>
                  	</div>
                  	</div>
                    <br>
                    <div class="bg">
                  	<div class="wordpress">
                  		<span class="left">Wordpress</span>
                  		<span class="right">70%</span>
                  	</div>
                  	</div>
                    <br>
                    <div class="bg">
                    <div class="joomla">
                      <span class="left">Joomla</span>
                      <span class="right">70%</span>
                    </div>
                    </div>
                    <br>
                    <div class="bg">
                    <div class="github">
                      <span class="left">Github</span>
                      <span class="right">70%</span>
                    </div>
                    </div>
                  </div>
                              </div>

                  </div>
            </div>
         </div>
    </section>
<!--portfolio-->
<!--modal-->
<div id="modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button data-dismiss="modal" class='pull-right'><i class="fa fa-close"></i></button>
           <h4 class='modal-title'>Contact information:</h4>
      </div>
      <div class="modal-body">
         <video  src="http://oky.16mb.com/MYpublic/videoplayback2.ogg" type="video/ogg"  autoplay loop></video>
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
