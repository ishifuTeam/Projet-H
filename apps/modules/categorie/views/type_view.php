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

        <!-- Include Menu -->
        <?php $this->load->view('includes/menu'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Immobiliers <small>type d'immobiliers</small>
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

                <!-- add row here -->
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <br>
                        <!-- Ajouter des boutons ici -->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModalRec">
                            ajouter un type
                        </button>
                        
                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Libellé</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($records as $rec){
                                    ?>
                                    <tr>
                                        <td><?php echo $rec->lib_type;?></td>
                                        <td><?php echo $rec->desc_type;?></td>
                                        <td>
                                            <a class="label label-default" href="<?php echo base_url();?>type/modifier/<?php echo $rec->id_type;?>" data-toggle="modal" data-target="#myModalModif"><i class="fa fa-pencil"></i> Modifier</a> 
                                            <a class="label label-danger" href="<?php echo base_url();?>type/supprimer/<?php echo $rec->id_type;?>"><i class="fa fa-times"></i> Supprimer</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- Modal to record the type-->
    <div class="modal fade" id="myModalRec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <form role="form" method="post" action="<?php echo base_url();?>type/ajout_process">
                
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ajouter un type d'immobilier</h4>
                    </div>

                    <div class="modal-body">

                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" name="nom" type="text" required>
                                <p class="help-block">Entrer le nom du plan</p>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                                <p class="help-block">Entrer la description de ce plan</p>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modal to update the type -->
    <div class="modal fade" id="myModalModif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

</body>

</html>
