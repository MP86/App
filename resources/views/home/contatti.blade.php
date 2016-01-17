@extends('app')

@section('title')
Contatti
@stop

@section('nav-bar')
	<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Trova professionisti.MP</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="#"></a></li>
                <li><a href="/registrazione">Registrazione</a></li>
                <li><a href="#"></a></li>
                <li class="active"><a href="/contatti">Contatti</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
@stop

@section('carosel')

@stop

@section('content')
	<div class="row">
        <div class="col-lg-6" id="reg1">
          <img class="img-circle" src="../img/home/utente.jpg" alt="utente" width="140" height="140">
          <h2>Utente</h2>
          <p>Registrandoti puoi inserire il tuo problema in modo da poter essere elaborato un preventivo per risolverlo.</p>
          <p><a class="btn btn-default" href="/registrazione" role="button">Registrati &raquo;</a></p>
          <p><a class="btn btn-primary" href="/utente@login" role="button">Login</a></p>
        </div><!-- /.col-lg-6 -->
        
        <div class="col-lg-6" id="reg2">
          <img class="img-circle" src="../img/home/azienda.jpg" alt="azienda" width="140" height="140">
          <h2>Azienda</h2>
          <p>Qui le aziende registrandosi possono visualizzare le richieste degli utenti e eventualmente venir prese in considerazione più velocemente per i preventivi.</p>
          <p><a class="btn btn-default" href="/registrazione" role="button">Registrati &raquo;</a></p>
          <p><a class="btn btn-primary" href="/azienda@login" role="button">Login</a></p>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      
      <hr class="featurette-divider">
    
     <h1>Vuoi saperne di piu?</h1>
		
		<br>
		
      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading">Allora manda una mail a: <a href="mailto: matteopretolani86@gmail.com"><span class="text-muted"> matteopretolani86@gmail.com</span></a></h2>
         <!-- <p class="lead"><i>Questa azienda è stata la meglio valutata da voi.</i></p> -->
        </div>
        <div class="col-md-0">
          <img class="featurette-image img-responsive center-block" src="" alt="">
        </div>
      </div>
      
@stop

@section('list')

@stop

@section('footer')
	<footer>
        <p class="pull-right"><a href="/errore"><button type="button" class="btn btn-info">Torna alla Home</button></a></p>
        <img alt="Marchio reggistrato" src="../img/MP.png">
        <p>&copy;MP86 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
@stop