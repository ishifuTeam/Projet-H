<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title> LOGIN - Projet H </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        
        
        <div class="box_login">
            
            <form class="form-signin" role="form" method="post" action="<?php echo base_url();?>login/redirect">
                <h2 class="form-signin-heading">Connexion</h2>
                <br>
                    <?php
                    if($msg){
                            echo $msg;
                        }
                    ?>
                <input name="email" type="email" class="form-control" placeholder="Adresse Email" required autofocus>
                <br>
                <input name="password" type="password" class="form-control" placeholder="Mot de passe" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
            </form>
            <br>
            
        </div>
        
    </div> <!-- /container -->

  </body>
</html>
