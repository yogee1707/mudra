<?php
session_start();

//echo $_SESSION['login'];

if($_SESSION['login']=='success'){
    //echo "success";
}
else {
  sleep(2);
  header("Location: error.html");
}

?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="yogee1707" content="">
    <!--<link rel="icon" href="http://getbootstrap.com/favicon.ico">-->

    <title>Mudra</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Mudra</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div>/.nav-collapse -->
      <!--</div>
    </nav>-->

    <div class="container theme-showcase" role="main">

    <div align="center" class="page-header">
      <img class="myMainIcon" src="img/bank.png"></img>
      <h1 id="title">Fab Mudra Bank</h1>
      <p>Fab Academy 2016 Final Project</p>
    </div>

    <div class="row">
      <a href="activatePage.html">
        <div align="center" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <img class="myIcon" src="img/cardActivate.png"></img>
          <br>
          <br>
          <p class="myTitle">Activate my card</p>
        </div>
      </a>
      <a href="getBalance.html">
        <div align="center" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <img class="myIcon" src="img/wallet-1.png"></img>
          <br>
          <br>
          <p class="myTitle">Check Balance</p>
        </div>
      </a>
      <a href="comingSoon.html">
        <div align="center" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <img class="myIcon" src="img/pie-chart-1.png"></img>
          <br>
          <br>
          <p class="myTitle">Track Expenses</p>
        </div>
      </a>
      <div align="center" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <form action="sendMoneyPage.php" method="post" role="form">
          <input type="hidden" name="status" value="attempt" />
          <input class="myIcon" type="image" src="img/sendMoney.png" alt="Submit">
          <p class="myTitle">Send Money</p>
        </form>
      </div>
      </a>
    </div>

    <hr>

    </div> <!-- /container -->

    <div align="center" class="row">
      <p>By Yogesh R. Tamhame</p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
