<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> IMMOBILIERS - Projet HECTOR </title>

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
                            Immobiliers <small>ajouter un bien</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>">Accueil</a>
                            </li>
                            <li class="active">
                                immobiliers
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <form role="form" method="post" action="<?php echo base_url();?>immobilier/ajout_process">
                
                    <div class="row">

                        <div class="col-lg-6">

                            <div class="form-group">
                                <label>Matricule</label>
                                <input class="form-control" name="matricule" type="text" required>
                                <p class="help-block">Entrer le n°matricule de l'immobilier</p>
                            </div>

                            <div class="form-group">
                                <label>Titre</label>
                                <input class="form-control" name="titre" type="text" required>
                                <p class="help-block">Entrer la titre de l'immobilier</p>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                                <p class="help-block">Entrer la description de l'immobilier</p>
                            </div>

                            <div class="form-group">
                                <label>Type d'immobilier</label>
                                <select class="form-control" name="type">
                                    <?php
                                        foreach ($recordsType as $rectype){
                                    ?>
                                    <option value="<?php echo $rectype->id_type;?>"><?php echo $rectype->lib_type;?></option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Agent Clientèle</label>
                                <select class="form-control" name="agent">
                                    <?php
                                        foreach ($recordsAgent as $recagent){
                                    ?>
                                    <option value="<?php echo $recagent->id_agent;?>"><?php echo $recagent->nom_agent;?> <?php echo $recagent->prenoms_agent;?></option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                                <p class="help-block">Uploader l'image de l'immobilier</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Adresse</label>
                                <textarea class="form-control" rows="3" name="adresse"></textarea>
                                <p class="help-block">Entrer l'adresse de l'immobilier</p>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Surface</label>
                                    <input class="form-control" name="surface" type="number" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Prix</label>
                                    <input class="form-control" name="prix" type="number" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Chambres</label>
                                    <input class="form-control" name="chambre" type="number" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Douches</label>
                                    <input class="form-control" name="douche" type="number" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Option</label>
                                <textarea class="form-control" rows="3" name="option"></textarea>
                                <p class="help-block">taper les options supplementaires de l'immobilier</p>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->
                
                    <div class="row">

                        <hr>
                            <div class="col-lg-4 col-lg-offset-4">    
                                <button type="reset" class="btn btn-default">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>

                                <br><br><br><br>
                            </div>


                        </div>
                    </div>
                    <!-- /.row -->
                </form>
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
