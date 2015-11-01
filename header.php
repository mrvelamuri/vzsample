<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>VZ Sample App | Verizon</title>
    <!-- Bootstrap core CSS -->
	  <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/vzbootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.min.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->
    <script src="scripts/jquery.min.js"></script>
  </head>

  <body>

    <!--Global Navigation-->
    <header class="vz-global-header">
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li <?=($selected_page == "index" ? 'class="active"' : '') ?>><a href="index.php"><i class="fa fa-lg fa-home"></i> Home</a></li>
              <li <?=($selected_page == "page3" ? 'class="active"' : '') ?>><a href="page3.php">User Data</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>

    <div class="container whitepage">

      <div class="row row-eq-height">
        <div class="col-md-12 col-sm-12">
          <br />
         
          <div>
          

