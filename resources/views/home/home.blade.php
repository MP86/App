@extends('app')

@section('title')
Home
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
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#"></a></li>
                <li><a href="#registrazione">Registrazione</a></li>
                <li><a href="#"></a></li>
                <li><a href="/contatti">Contatti</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
@stop

@section('carosel')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">  <!-- immagini 1663x500 -->
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="../img/home/elettricista.jpg" alt="elettricista">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cerchi un</h1>
              <p><!-- <code>file://</code> --></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Elettricista</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="first-slide" src="../img/home/fabbro.jpg" alt="donna-fabbro">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Fabbro</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="../img/home/falegname.jpg" alt="donna-falegname">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Falegname</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="../img/home/idraulico.jpg" alt="donna-idraulico">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Idraulico</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/home/imbianchino.jpg" alt="donna-imbianchino">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Imbianchino</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/home/muratore.jpg" alt="donna-muratore">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Muratore</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/home/gruppo-operai.jpg" alt="gruppo di operai">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">o anche tutti!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/home/scelta.jpg" alt="prendere una scelta">
          <div class="container">
            <div class="carousel-caption">
              <h1>o non sai quale</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">scegliere?!?</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/home/noi.jpg" alt="noi gruppo di persone">
          <div class="container">
            <div class="carousel-caption">
              <h1>Allora fatti aiutare da</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Noi</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../img/home/preventivi.jpg" alt="preventivi">
          <div class="container">
            <div class="carousel-caption">
              <h1>iscriviti!!!</h1>
              <p>così creerai la tua pagina personale nella quale potrai effettuare le richieste per poi ottenere i</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Preventivi</a></p>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

		<hr>
@stop

@section('content')
	 <!-- Three columns of text below the carousel -->
      <div class="row"  id="registrazione">
        <div class="col-lg-6" id="reg1">
          <img class="img-circle" src="../img/home/utente.jpg" alt="utente" width="140" height="140">
          <h2>Utente</h2>
          <p>Registrandoti puoi inserire il tuo problema in modo da poter essere elaborato un preventivo per risolverlo.</p>
          <p><a class="btn btn-default" href="/utenti/create" role="button">Registrati &raquo;</a></p>
          <p><a class="btn btn-primary" href="/utente@login" role="button">Login</a></p>
        </div><!-- /.col-lg-6 -->
        
        <div class="col-lg-6" id="reg2">
          <img class="img-circle" src="../img/home/azienda.jpg" alt="azienda" width="140" height="140">
          <h2>Azienda</h2>
          <p>Qui le aziende registrandosi possono visualizzare le richieste degli utenti e eventualmente venir prese in considerazione più velocemente per i preventivi.</p>
          <p><a class="btn btn-default" href="/aziende/create" role="button">Registrati &raquo;</a></p>
          <p><a class="btn btn-primary" href="/azienda@login" role="button">Login</a></p>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      
      <hr class="featurette-divider">
@stop

@section('list')
	<h1>Le migliori aziende:</h1>
		
		<br>
		
      <div class="row featurette"  id="info1">
        <div class="col-md-7">
          <h2 class="featurette-heading">La miglior impresa di <span class="text-muted">muratori.</span></h2>
          <p class="lead"><i>Questa azienda è stata la meglio valutata da voi.</i></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../img/home/fs.jpg" alt="ferrovie dello stato">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="info2">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">La piu scelta per <span class="text-muted">imbiancare.</span></h2>
          <p class="lead"><i>Miglior qualità/prezzo.</i></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="../img/home/ef.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="info3">
        <div class="col-md-7">
          <h2 class="featurette-heading">Il migliore <span class="text-muted">io.</span></h2>
          <p class="lead"><i>Secondo chi mi paga di più.</i></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../img/home/io.jpg" alt="mia foto">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
	
@stop

@section('footer')
	<footer>
        <p class="pull-right"><a href="#registrazione"><button type="button" class="btn btn-info">Torna sù <img alt="Freccia sù" src="../img/sù.png"></button></a></p>
        <img alt="Marchio reggistrato" src="../img/MP.png">
        <p>&copy;MP86 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
@stop