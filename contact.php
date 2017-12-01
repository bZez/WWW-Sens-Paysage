<!DOCTYPE HTML>

<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <meta charset="utf-8">

  <!-- Description, Keywords and Author -->

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Sens & Paysage | Contact</title>

  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



  <!-- style -->

  <link href="css/style.css" rel="stylesheet" type="text/css">

  <!-- style -->

  <!-- bootstrap -->

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- responsive -->

  <link href="css/responsive.css" rel="stylesheet" type="text/css">

  <!-- font-awesome -->

  <link href="css/fonts.css" rel="stylesheet" type="text/css">

  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- font-awesome -->

  <link href="css/set2.css" rel="stylesheet" type="text/css">

  <link href="css/normalize.css" rel="stylesheet" type="text/css">

</head>
<body>
  <!-- header -->
  <?php include ('header.php'); ?>
  <!-- header -->
  <!-- main -->
  <main role="main-inner-wrapper" class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
        <article role="pge-title-content" class="contact-header">
          <header>
            <h2><span>C'est à vous</span> Rendez-moi visite ou contactez-moi.</h2>
          </header>
          <p><a href="tel:0677551400"><i class="fa fa-phone" aria-hidden="true"></i> 0677551400</a><a href="mailto:melaniepennel@sens-paysage.fr"><i class="fa fa-envelope" aria-hidden="true"></i> melaniepennel@sens-paysage.fr</a></p>
        </article>
      </div>
      <!-- map -->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="demo-wrapper">
          <img class="img-responsive" src="images/gmap.png">
        </div>
      </div>
      <!-- map -->
      <div class="clearfix"></div>
      <!-- contat-from-wrapper -->
      <div class="contat-from-wrapper">
        <div id="message"></div>
        <form method="post" action="php/contactfrom.php" name="cform" id="cform">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
              <input  name="name" id="name" type="text" placeholder="Votre nom...">
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
              <input  name="email" id="email" type="email"  placeholder="Votre mail...">
            </div>
          </div>
          <div class="clearfix"></div>
          <textarea name="comments" id="comments" cols="" rows="" placeholder="Votre message..."></textarea>
          <div class="clearfix"></div>
          <input name="" type="submit" value="Envoyer !">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!-- contat-from-wrapper -->
    </div>
  </main>
  <!-- main -->
  <!-- footer -->
  <?php include('footer.php'); ?>
  <!-- footer -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <!-- custom -->
  <script src="js/custom.js" type="text/javascript"></script>
  <script src="js/jquery.contact.js" type="text/javascript"></script>
  <script src="js/nav.js" type="text/javascript"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <!-- jquery.countdown -->
  <script src="js/html5shiv.js" type="text/javascript"></script>
</body>
</html>
