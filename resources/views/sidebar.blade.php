<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vestibular ITA</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/matrix-style.css" />
  <link rel="stylesheet" href="css/matrix-media.css" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!--top-Header-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Página principal</a>
<h1></h1>
  <ul>
    <li class="active"><a href="{{action('PaginaController@inicio')}}"><i class="icon icon-home"></i> <span>Página principal</span></a> </li>
    <li> <a href="{{action('PaginaController@inscricao')}}"><i class="icon icon-th-list"></i> <span>Inscrição</span></a> </li>
    <li> <a href="{{action('PaginaController@inscricoes')}}"><i class="icon icon-th-list"></i> <span>Inscrições</span></a> </li>
    <li> <a href="{{action('PaginaController@localidades')}}"><i class="icon icon-map-marker"></i> <span>Locais de exame</span> <span class="badge badge-info">24</span></a></li>
    <li> <a href="{{action('PaginaController@engenharias')}}"><i class="icon icon-align-left"></i> <span>Engenharias</span> <span class="badge badge-info">6</span></a></li>
    <li> <a href="{{action('PaginaController@contato')}}"><i class="icon icon-envelope"></i> <span>Contato</span> <span class="badge badge-info">4</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->
@yield('content')
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Vestibular ITA. Feito por <a href="#">Source Code</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/matrix.js"></script>
</body>
</html>
