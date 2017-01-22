<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/master.css">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PortFolio') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style1.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<div class="intro-header">
    <div class="bg-overlay">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">

                      <h1>Bienvenue sur mon portfolio </h1><br>
                      <h1>Bilel REHAHLA</h1><br>
                      <h1>Developpeur Web </h1>

                        <hr class="intro-divider">

                        <ul class="list-inline intro-social-buttons">

                            <li>
                                <a href="index.html" class="btn btn-default btn-lg ">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ url('/competence') }}"class="btn btn-default btn-lg ">Competence </a>
                            </li>
                            <li>
                                <a href="{{ url('/formation') }}"class="btn btn-default btn-lg ">Formation </a>
                            </li>

                            <li>
                                <a href="{{ url('/projet') }}"class="btn btn-default btn-lg ">Projet </a>
                            </li>
                            <li>
                                <a href="{{ url('/page404') }}"class="btn btn-default btn-lg ">Page 404 </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

<footer style="text-align:center;">
  <p>Copyright : ITAkademy 2017</p>
  <a href="contact">Nous contacter</a>
</footer>
</html>
