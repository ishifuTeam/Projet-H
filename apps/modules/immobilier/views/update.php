<?php
    foreach ($records as $rec){
?>
<form role="form" method="post" action="<?php echo base_url();?>immobilier/modif_process/<?php echo $rec->id_immo;?>">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modifier un bien immobilier</h4>
    </div>

    <div class="modal-body">

            <div class="row">

                <div class="col-lg-6">
                    
                    <div class="form-group" >
                        <label>Matricule</label>
                        <input class="form-control" name="matricule" type="text" value="<?php echo $rec->id_immo;?>" disabled>
                        <p class="help-block">Entrer le n°matricule de l'immobilier</p>
                    </div>

                    <div class="form-group">
                        <label>Titre</label>
                        <input class="form-control" name="titre" type="text" value="<?php echo $rec->titre_immo;?>" required>
                        <p class="help-block">Entrer la titre de l'immobilier</p>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description" >
                            <?php echo $rec->desc_immo;?>
                        </textarea>
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
                        <p class="help-block">Recharger l'image de l'immobilier</p>
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <textarea class="form-control" rows="3" name="adresse">
                            <?php echo $rec->adresse_immo;?>
                        </textarea>
                        <p class="help-block">Entrer l'adresse de l'immobilier</p>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Surface</label>
                            <input class="form-control" name="surface" type="number" value="<?php echo $rec->surface_immo;?>" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Prix</label>
                            <input class="form-control" name="prix" type="number" value="<?php echo $rec->prix_immo;?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Chambres</label>
                            <input class="form-control" name="chambre" type="number" value="<?php echo $rec->nbchambre_immo;?>" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Douches</label>
                            <input class="form-control" name="douche" type="number" value="<?php echo $rec->nbdouche_immo;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Option</label>
                        <textarea class="form-control" rows="3" name="option">
                            <?php echo $rec->option_immo;?>
                        </textarea>
                        <p class="help-block">taper les options supplementaires de l'immobilier</p>
                    </div>

                </div>

            </div>
            <!-- /.row -->
         
            
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>

</form>
<?php
    }
?> 