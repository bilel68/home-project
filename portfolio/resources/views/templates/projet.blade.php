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



</section>
<section>
<a name="About"></a>
<div class="container">
  <div class="row">
    <div class="col-lg-12" id="jumbOut">
      <div class="jumbotron">
      <div id="jumbIn">



              <h2>Projet  :</h2>

        <p> Pendant mon stage de 1ère année j’ai pu participer à un projet suite à la demande de mon maître de stage.
Le projet en question était la mise à jour d’un site web à l’aide du CMS Joomla.
Je devais modifier le site d’un client de transport, par rapport au Template, le logo, insertion d’un slide (plusieurs photos de transport), la page d’accueil etc…</p>

<br><br><p>L’objectif était de mettre en pratique les connaissances que j’ai pu apprendre durant les premières semaines de stage sur le CMS Joomla. Ainsi j’ai pu utiliser ces compétences pour répondre aux besoins de mon maitre de stage.
.</p>
<ul class="slides">
    <input type="radio" name="radio-btn" id="img-6" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="/img/ham1.png" />
        </div>
		<div class="nav">
			<label for="img-0" class="prev">&#x2039;</label>
			<label for="img-7" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-7" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/ham2.png" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-8" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-8" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/ham3.png" />
        </div>
		<div class="nav">
			<label for="img-7" class="prev">&#x2039;</label>
			<label for="img-9" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-9" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/ham4.png" />
        </div>
		<div class="nav">
			<label for="img-8" class="prev">&#x2039;</label>
			<label for="img-0" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-0" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/ham5.png" />
        </div>
		<div class="nav">
			<label for="img-9" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>


    <li class="nav-dots">
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
      <label for="img-7" class="nav-dot" id="img-dot-7"></label>
      <label for="img-8" class="nav-dot" id="img-dot-8"></label>
      <label for="img-9" class="nav-dot" id="img-dot-9"></label>
      <label for="img-0" class="nav-dot" id="img-dot-0"></label>

    </li>
</ul>






              <h2>Projet  :</h2>

        <p> Pendant mon stage de 2ème année j’ai pu participer à un projet suite à la demande de mon maître de stage.
Le projet en question était de créer une interface qui filtrera les contacts que possède l’entreprise en fonction des clients.
L’interface avait pour de but de créer une trace écrite ainsi que de les insérer dans la base de données de l’outil d’e-mailing. </p>

<br><br><p>L’objectif de ce projet était de mettre à profit mes connaissances en PHP/HTML5/CSS/SQL ainsi que de les approfondir en faisant l’usage d’une API en PHP.
L’API permettait de relier l’interface à l’outil d’e-mailing et de mettre à jour le contact.
Grace à l’api les données des contacts étaient insérer dans la base de données de l’outil d’e-mailing .</p>
<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="/img/int.png" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/int1.png" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/int2.png" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/int3.png" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="/img/int4.png" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>


    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>

    </li>
</ul>








</section>
<!--tabs-->


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
