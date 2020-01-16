<?php
  require_once('dao/config.php');
  require_once('dao/crudDAO.php');

  $a = new crudDAO();
  $list =$a->index();


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Example</title>



    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link rel="stylesheet" href="../online_selling/bootstrap4/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Tim's Bike</h5>
        <nav class="my-2 my-md-0 mr-md-3">
      </nav>
       <a style="margin: 5px;" class="btn btn-outline-primary" href="login.php"> Log In </a>
      <a  class="btn btn-outline-primary" href="signup.php"> Sign Up </a>
       </div>
     

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Motor Bike </h1>
      <p class="lead">“A dog is the only thing on earth that loves you more than he loves himself.”</p>
     <p > Get yours now</p>
    </div>
<?php foreach($list as $key=>$value) { ?>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
          <?php echo $value['catdesc'];?>
          </div>
          <div class="card-body">
          <?php $imgURL ="upload/".$value['file_name']; ?>
          <img src="<?php echo $imgURL ?>">
            <ul class="list-unstyled mt-3 mb-4">
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Order Now</button>
          </div>
        </div>
        <?php } ?>

   <!--     <div class="card mb-4 box-shadow">
          <div class="card-header">
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <img style="height: 180px; width:180px;" src=british.jpg>
              <li>British Staffordshire Terrier</li>
              <h1 class="card-title pricing-card-title">$400,000<small class="text-muted"></small></h1>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Order Now</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <img style="height: 180px; width:180px;" src=american.>
              <li>British Staffordshire Terrier</li>
              <h1 class="card-title pricing-card-title">$750,000<small class="text-muted"></small></h1>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Order Now</button>
            </ul>
          </div>
        </div>
      </div>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
