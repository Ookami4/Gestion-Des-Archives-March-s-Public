<?php
    if(isset($_POST['id'])){
       $selectedArchive = new ArchivesController();
       $archive = $selectedArchive->getOneArchive();
    }else{
        Redirect::to('home');
    }
?>


<section>
    <br/>
    <div class="container box">
        <br/>
        <form method="post" id="s">

            <div class="sec">
                <div>
                    <label>Numéro :</label>
                    <input type="text" value="<?php echo $archive['numero']; ?>" readonly/>
                </div>
            </div>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Mode de passation</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>Mode de passation :</label>
                        <select class="form-control">
                            <option value="<?php echo $archive['mode_passation']; ?>"><?php echo $archive['mode_passation']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>N° d'appel d'offres :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['num_offre']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Date de publication :</label>
                        <input type="Date" class="form-control" value="<?php echo $archive['datepublication_offre']; ?>" readonly>
                    </div>
                </div>
                <div class="sec">
                    <div class="form-group">
                        <label>Date d'ouverture des plis :</label>
                        <input type="Date" class="form-control" value="<?php echo $archive['dateouverture_plis']; ?>" readonly>
                    </div>
                </div>
            </fieldset>


            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Marché</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>N° Marché :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['num_marche']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nature dépense :</label>
                        <select class="form-control">
                            <option value="<?php echo $archive['nature_projet']; ?>"><?php echo $archive['nature_projet']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Delai d'éxécution(jour) :</label>
                        <input type="nombre" min="0" class="form-control" value="<?php echo $archive['delai_execution']; ?>" readonly>
                    </div>
                </div>


                <div class="sec">
                    <div class="form-group">
                        <label>Objet :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="120" value="<?php echo $archive['objet']; ?>" readonly>
	        			</textarea>
                    </div>
                </div>
                <div class="sec">
                    <div class="form-group">
                        <label>Lieu d'éxécution :</label>
                        <select class="form-control">
                            <option value="<?php echo $archive['commune']; ?>"><?php echo $archive['commune']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date d'attribution :</label>
                        <input type="Date" class="form-control" value="<?php echo $archive['date_attribution']; ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Avenant</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>Avenant</label>
                        <select class="form-control">
                            <option value="<?php echo $archive['bool_avenant']; ?>"><?php echo $archive['bool_avenant'] ? "Oui" : "Non"; ?></option>
                        </select>
                    </div>
                    <div class="form-group" id="div1">
                        <label id="motif_avenant">Motifs d'avenant :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['motif_avenant']; ?>" readonly>
                    </div>
                    <div class="form-group" id="div2">
                        <label id="mt_avenant">Montant de depassemant(avenant) :</label>
                        <input type="" class="form-control" value="<?php echo $archive['mt_avenant']; ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Pénalité</legend>
                <div class="sec">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="<?php echo $archive['bool_penalite']; ?>"><?php echo $archive['bool_penalite'] ? "Oui" : "Non"; ?></option>
                        </select>
                    </div>
                </div>
            </fieldset>


            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Paiement</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>Type de paiement :</label>
                        <select class="form-control">
                            <option value="<?php echo $archive['mode_paiement']; ?>"><?php echo $archive['mode_paiement']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Montant Maximum :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['max_mht']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Montant Minimum :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['min_mht']; ?>" readonly>
                    </div>
                </div>
                <div class="sec">
                    <div class="form-group">
                        <label>Intérêts moratoires annuels :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['interet_moratoire']; ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Réconduction</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>Reconduction :</label>
                        <select class="form-control">
                            <option value="<?php echo $archive['bool_reconduction']; ?>"><?php echo $archive['bool_reconduction']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nombre d'années de reconduction :</label>
                        <input type="number" class="form-control" value="<?php echo $archive['nb_annee_recond']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Montant à engager la premier année<br /> y compris SAV IM du prorata :</label>
                        <input type="number" class="form-control" value="<?php echo $archive['mt_engager']; ?>" readonly>
                    </div>
                </div>
            </fieldset>


            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Bénéficiaire</legend>

                <div class="sec">
                    <div class="form-group">
                        <label>Identifiant fiscal :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['id_fiscal']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>CNSS :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['bn_cnss']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Patente :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['bn_patente']; ?>" readonly>
                    </div>
                </div>

                <div class="sec">

                    <div class="form-group">
                        <label>ICE :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['bn_ice']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Registre de commerce :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['bn_registre']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>RIB :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['bn_rib']; ?>" readonly>
                    </div>
                </div>

                <div class="sec">
                    <div class="form-group">
                        <label>Raison social :</label>
                        <input type="text"class="form-control" value="<?php echo $archive['bn_raisonsocial']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Siège social :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['bn_siegesocial']; ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Signature</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>Signature :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['signature']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Fonction :</label>
                        <input type="text" class="form-control" value="<?php echo $archive['fonction']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Date signature :</label>
                        <input type="Date" class="form-control" value="<?php echo $archive['date_signature']; ?>" readonly>
                    </div>
                </div>

            </fieldset>

            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Ajouter et Modifier</legend>
                <div class="sec">
                    <div class="form-group">
                        <label>Ajouter En :</label>
                        <input type="Date" class="form-control" value="<?php echo $archive['created_at']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Modifier En :</label>
                        <input type="Date"  class="form-control" value="<?php echo $archive['updated_at']; ?>" readonly>
                    </div>
                </div>
            </fieldset>

            <div class="sec">
                <div class="form-group">
                    <form method="post" class="mr-1" action="update">
                        <input type="hidden" name="id" value="<?php echo $archive['id'];?>">
                        <input type="submit" name="submit" id="modifier" class="btn btn-primary" value="Modifier" />
                    </form>
                </div>
            </div>

        </form>
    </div>
</section>