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

        <!-- Include Menu -->
        <?php $this->load->view('includes/menu'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Immobiliers <small>liste des biens</small>
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
                    <div class="col-lg-12">
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:10%;">Matricule</th>
                                        <th style="width:35%;">Titre</th>
                                        <th style="width:4%;">Chambres</th>
                                        <th style="width:4%;">Douches</th>
                                        <th style="width:12%;">Type</th>
                                        <th style="width:10%;">Agence</th>
                                        <th style="width:25%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($records as $rec){
                                    ?>
                                    <tr>
                                        <td style="width:10%;"><?php echo $rec->id_immo;?></td>
                                        <td style="width:35%;"><?php echo $rec->titre_immo;?></td>
                                        <td style="width:4%;"><?php echo $rec->nbchambre_immo;?></td>
                                        <td style="width:4%;"><?php echo $rec->nbdouche_immo;?></td>
                                        <td style="width:12%;"><?php echo $rec->lib_type;?></td>
                                        <td style="width:10%;"><?php echo $rec->lib_agence;?></td>
                                        <td style="width:25%;">
                                            <a class="label label-default" href="<?php echo base_url();?>immobilier/voir/<?php echo $rec->id_immo;?>"><i class="fa fa-eye"></i> Voir</a>
                                            <a class="label label-default" href="<?php echo base_url();?>immobilier/modifier/<?php echo $rec->id_immo;?>" data-toggle="modal" data-target=".bs-example-modal-lg" ><i class="fa fa-pencil"></i> Modifier</a> 
                                            <a class="label label-danger" href="<?php echo base_url();?>immobilier/supprimer/<?php echo $rec->id_immo;?>"><i class="fa fa-times"></i> Supprimer</a>
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
    
    <!-- Modal to update  -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
