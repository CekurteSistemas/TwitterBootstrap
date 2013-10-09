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
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Módulo <b class="caret"></b></a>
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
      <h2 class="pull-left">Contato <small>Listar</small></h2>
      <div class="btn-group pull-right">
        <a href="#" class="btn btn-default">
          <span class="glyphicon glyphicon-list"></span> Star
        </a>
        <a href="#" class="btn btn-default">
          <span class="glyphicon glyphicon-list"></span> Star
        </a>
        <a href="#" class="btn btn-default">
          <span class="glyphicon glyphicon-list"></span> Star
        </a>
      </div>
    </div>
    <div class="row">
      <div class="messages">
        <div class="alert alert-success">
          <strong>Well done!</strong> You successfully read this important alert message.
        </div>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
      <ul class="pagination pull-right">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
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