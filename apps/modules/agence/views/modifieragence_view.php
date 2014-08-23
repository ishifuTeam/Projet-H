<?php $this->load->view('includes/header'); ?>

<body>

    <div id="wrapper">

        <?php $this->load->view('includes/menu'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Agences <small>modifier une agence</small>
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
                        
                        <?php
                            foreach ($records as $rec){
                        ?>
                        
                        <form role="form" method="post" action="<?php echo base_url();?>agence/modif_process/<?php echo $rec->id_agence;?>">

                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" name="nom" type="text" value="<?php echo $rec->lib_agence;?>" required>
                            </div>

                            <div class="form-group">
                                <label>Adresse</label>
                                <input class="form-control" name="adresse" type="text" value="<?php echo $rec->address_agence;?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" value="<?php echo $rec->email_agence;?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Entrer votre mot de passe" type="password" name="password" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Nom utilisateur</label>
                                <input class="form-control" name="login" type="text" value="<?php echo $rec->login_agence;?>" required>
                            </div>

                            <div class="form-group">
                                <label>N° de téléphone</label>
                                <input class="form-control" name="numero" type="text" value="<?php echo $rec->numtel_agence;?>" required>
                            </div>

                            <div class="form-group">
                                <label>Plan de l'agence</label>
                                <select class="form-control" name="plan">
                                    <option value="1">Free</option>
                                    <option value="2">Silver</option>
                                    <option value="3">Gold</option> 
                                </select>
                            </div>
                            
                            <hr>
                            
                            <button type="reset" class="btn btn-default">Annuler</button>
                            <button type="submit" class="btn btn-primary">Valider</button>
                            
                            <br><br><br><br>

                        </form>
                        
                        <?php
                            }
                        ?>
                        
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
