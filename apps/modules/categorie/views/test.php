<?php
    foreach ($recordsType as $rectype) {
?>
<form role="form" method="post" action="<?php echo base_url();?>type/modif_process/<?php echo $rectype->id_type;?>">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modifier un type d'immobilier</h4>
    </div>

    <div class="modal-body">

            <div class="form-group">
                <label>Nom</label>
                <input class="form-control" name="nom" type="text" value="<?php echo $rectype->lib_type;?>" required>
                <p class="help-block">Entrer le nom du plan</p>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description">
                    <?php echo $rectype->desc_type;?>
                </textarea>
                <p class="help-block">Entrer la description de ce plan</p>
            </div>

    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>

</form>
<?php 
    }
?>