<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="bank, mudra, fab academy, fabacademy2016, fabacademy">
    <meta name="author" content="yogesh tamhame">
    <!--<link rel="icon" href="http://getbootstrap.com/favicon.ico">-->

    <title>Admin Login</title>

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
      <img class="myMainIcon" src="img/admin.png"></img>
      <h2 id="title">Admin Login</h2>
    </div>

    <?php
      if(isset($_REQUEST['status'])){
        $status = $_REQUEST['status'];

        if($status == 'failed'){
          echo "<div align='center' class='alert alert-danger' role='alert'>";
          echo "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>";
          echo "<span class='sr-only'>Error:</span>";
          echo " Not registred user";
          echo "</div>";
        }
        else if($status == 'notAdmin'){
          echo "<div align='center' class='alert alert-danger' role='alert'>";
          echo "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>";
          echo "<span class='sr-only'>Error:</span>";
          echo " You're not administrator. Please <a href='personalLoginPage.php?status=attempt'>login here.</a>";
          echo "</div>";
        }
      }
    ?>

    <div align="center" class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">

        <form action="adminLogin.php" method="post" role="form">
          <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" class="form-control" name="userName" required>
          </div>
          <div class="form-group">
            <label for="pwd">Enter your password:</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <input type="submit" value="Log In">
        </form>

      </div>
      <div class="col-sm-2"></div>
    </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

<div data-original-title="Copy to clipboard" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" height="100%" width="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1459931192689">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="Theme%20Template%20for%20Bootstrap_files/ZeroClipboard.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit" height="100%" width="100%">                </object></div><svg style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;" preserveAspectRatio="none" viewBox="0 0 1140 500" height="500" width="1140" xmlns="http://www.w3.org/2000/svg"><defs><style type="text/css"></style></defs><text style="font-weight:bold;font-size:57pt;font-family:Arial, Helvetica, Open Sans, sans-serif" y="57" x="0">Thirdslide</text></svg>
</body>
</html>
