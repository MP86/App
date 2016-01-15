<!doctype html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="mia 1° app">
    <meta name="author" content="MP86">
    <link rel="icon" href="img/icona.png">  <!--  icona nel titolo -->
    
	<title>Trova professionisti/@yield('title')</title>
	
	<!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    
    <link href="css/miocss.css" rel="stylesheet">
	
</head>

<body>

	<div class="nav-bar">
		@yield('nav-bar')
	</div>
	
	<div class="carosello">
		@yield('carosel')
	</div>
	
	<div class="container marketing">
	
		<div class="contenuto">
			@include('flash::message')
			@yield('content')
		</div>
		
		<div class="lista">
			@yield('list')
		</div>
		
		<script>
		$('#flash-overlay-modal').modal();
		</script>
		
		<div class="footer">
			@yield('footer')
		</div>
	
	</div>
	
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/ie10-viewport-bug-workaround.js"></script>
	
</body>

</html>