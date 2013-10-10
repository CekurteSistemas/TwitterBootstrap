<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width" name="viewport">

	<link media="all" type="text/css" href="./css/bootstrap.min.css" id="bootstrap" rel="stylesheet">
	<link type="text/css" href="./css/style.css" id="theme" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
  <![endif]-->

	<title>Cekurte Sistemas</title>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1 class="navbar-brand" href="#">Quanta Fome</h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Sobre</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pushpin"></span> Estabelecimentos <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="container">
    <div class="row page-header">
      <h2 class="pull-left">Contato <small>Adicionar</small></h2>
      <div class="btn-group pull-right">
        <a href="#" class="btn btn-default">
          <span class="glyphicon glyphicon-list"></span> Listar
        </a>
      </div>
    </div>
    <div class="row">
      <div class="messages">
        <div class="alert alert-success">
          <strong>Well done!</strong> You successfully read this important alert message.
        </div>
      </div>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
          </div>
        </div>
      </form>
    </div>
    <footer class="row">
      <div class="pull-left">
        <p >© Cekurte Sistemas 2013</p>
      </div>
    </footer>
  </div>
  <script src="./js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="./js/bootstrap.min.js" type="text/javascript"></script>
  <script src="./js/main.js" type="text/javascript"></script>
</body>
</html>