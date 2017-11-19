<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("inc/head.php"); ?>
  </head>

  <body>

    <?php include("inc/nav.php"); ?>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Welcome!</h1>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Page One</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="page1.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Page Two</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="page2.php" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <?php include("inc/footer.php"); ?>
    </div>

    <?php include("inc/scripts.php"); ?>
  </body>
</html>
