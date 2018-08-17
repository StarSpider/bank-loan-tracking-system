
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>
<style>
	img{
		   padding: 10px;
		   margin:auto;
	}
</style>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <li class="active"><a class="navbar-brand">BANK</a></li>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="login.php">LOGIN <span class="sr-only">(current)</span></a></li>
        <li><a href="signup.php">REGISTER</a></li>
  

          <div class="pull-left">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" class="navbar-text navbar right" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="7432.jpg" alt="Los Angeles" height="1250" width="1250" align="middle">
    </div>

    <div class="item">
      <img src="Personalization-in-banking_HD.jpg" class="rat" alt="Chicago" height="1250" width="1250" align="middle">
    </div>

    <div class="item">
      <img src="AI Analytics Rewriting-Customer-Experience-in-Banking_HD.jpg" alt="New York" height="1250" width="1250" align="middle">
    </div>

    <div class="item">
      <img src="banner.jpg" alt="New York" height="1250" width="1250" align="middle">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>