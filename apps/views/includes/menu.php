<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="<?php echo base_url();?>">Projet HECTOR</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   <?php echo $agence;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>dashboard/logout"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url();?>dashboard"><i class="fa fa-fw fa-dashboard"></i> Accueil</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#agence"><i class="fa fa-fw fa-sitemap"></i> Gestion des agences </a>
                        <ul id="agence" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>agence/ajouter">Ajouter une agence</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>agence/listing">listes des agences</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#agent"><i class="fa fa-fw fa-users"></i> Gestion des agents </a>
                        <ul id="agent" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>agent/ajouter">Ajouter un agent</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>agent/listing">Liste des agents</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#plan"><i class="fa fa-fw fa-bank"></i> Gestion des plans </a>
                        <ul id="plan" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>plan/ajouter">Ajouter un plan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>plan/listing">listes des plans</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#immo"><i class="fa fa-fw fa-home"></i> Gestion des immobiliers </a>
                        <ul id="immo" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>immobilier/ajouter">Ajouter un bien</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>immobilier/listing">Liste des biens</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>type">Type de biens</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pub"><i class="fa fa-fw fa-video-camera"></i>Gestion des publicités </a>
                        <ul id="pub" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>#">Ajouter votre pub</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>#">réglage</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#config"><i class="fa fa-fw fa-cogs"></i> Configuration </a>
                        <ul id="config" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>#">General</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>#">SMS</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>#">Email</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>