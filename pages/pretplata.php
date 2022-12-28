<?php
  session_start();
  include '../database/conn.php';
?>
<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/pricing/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
    
    <title>Pricing example for Bootstrap</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
    <link href="../styles/pricing.css" rel="stylesheet">
  </head>

  <body>
  <?php
  include '../components/navbar2.php';
?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pretplati se</h1>
      <p class="lead">Gledaj sve najnovije filmove po najnižim cenama!</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Horror</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Gledajte preko 100 najstrašnijih horor filmova</li>
              <li>Pogledajte ispod kreveta pre i posle gledanja</li>
            </ul>
            <form action="../handlers/prvi.php" method="post">
              <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Pretplati se</button>
            </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Akcioni</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Bićete zadivljeni specijalnim efektima</li>
              <li>Gledajte ljude koji rizikuju život da bi spasili planetu</li>
            </ul>
            <form action="../handlers/drugi.php" method="post">
              <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Pretplati se</button>
            </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Komedija</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Opustite se sa malo smešnog sadržaja</li>
              <li>Pogledajte filmove stvorene radi vaše zabave</li>
            </ul>
            <form action="../handlers/treci.php" method="post">
              <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Pretplati se</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Pricing example for Bootstrap_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Pricing example for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Pricing example for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Pricing example for Bootstrap_files/holder.min.js.download"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

</body></html>