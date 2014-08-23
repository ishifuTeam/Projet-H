<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> AGENCES - Projet HECTOR </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <div id="wrapper">

        <?php $this->load->view('includes/menu'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Agences <small>ajouter une agence</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>">Accueil</a>
                            </li>
                            <li class="active">
                                agences
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">

                        <form role="form" method="post" action="<?php echo base_url();?>agence/ajout_process">

                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" name="nom" type="text" required>
                                <p class="help-block">Entrer le nom de l'agence</p>
                            </div>

                            <div class="form-group">
                                <label>Adresse</label>
                                <input class="form-control" name="adresse" type="text" required>
                                <p class="help-block">Entrer la situation geographique de l'agence</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" required>
                                <p class="help-block">Entrer l'email de l'agence</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Entrer votre mot de passe" type="password" name="password" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Nom utilisateur</label>
                                <input class="form-control" name="login" type="text" required>
                                <p class="help-block">Entrer le nom utilisateur de l'agence</p>
                            </div>

                            <div class="form-group">
                                <label>N° de téléphone</label>
                                <input class="form-control" name="numero" type="text" required>
                                <p class="help-block">Entrer le numero de telephone de l'agence</p>
                            </div>

                            <div class="form-group">
                                <label>Plan de l'agence</label>
                                <select class="form-control" name="plan">
                                    <?php
                                        foreach ($records as $rec){
                                    ?>
                                    <option value="<?php echo $rec->id_plan;?>"><?php echo $rec->lib_plan;?></option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <hr>
                            
                            <button type="reset" class="btn btn-default">Annuler</button>
                            <button type="submit" class="btn btn-primary">Valider</button>
                            
                            <br><br><br><br>

                        </form>

                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

</body>

</html>
