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
                            Plans <small>modifier un plan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>">Accueil</a>
                            </li>
                            <li class="active">
                                plans
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
                        
                        <form role="form" method="post" action="<?php echo base_url();?>plan/modif_process/<?php echo $rec->id_plan;?>">

                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" name="nom" type="text" value="<?php echo $rec->lib_plan;?>" required>
                                
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description">
                                    <?php echo $rec->desc_plan;?>
                                </textarea>
                                
                            </div>
                            
                            <div class="form-group">
                                <label>Activation des Options</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sms" value="1"> Sms
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="email" value="1"> Email
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="pub" value="1"> Publicité
                                    </label>
                                </div>
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
