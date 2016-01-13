<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Fudong Fan">

    <title>Final Project</title>

    <script src="../fabric.js-1.6.0-rc.1/dist/fabric.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.5/docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container text-center">

      <h1>Stock Performance and Twitter News</h1>

      <div class="row">
        <div class="col-md-6">
        <h2>Stock Info</h2>
          <form action="" method="get" class="form-horizontal">
            <div class="form-group">
              <label for="ticker">Quote Lookup</label>
              <input type="text" class="form-control" id="ticker" name="ticker" placeholder="Enter a ticker">
           </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
           $ticker = $_GET["ticker"];
           echo "<img src=\"http://chart.finance.yahoo.com/z?s=". $ticker . "\">";
         ?>
        </div>
        <div class="col-md-6">
          <h2>News</h2>
        </div>
      </div> 
     </div>

    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../bootstrap-3.3.5/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap-3.3.5/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>