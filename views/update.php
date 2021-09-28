<?php

	$data = new CommunesController();
	$communes = $data->getCommunes();

	if (isset($_POST['id'])){
		$exitArchive = new ArchivesController();
		$archive = $exitArchive->getOneArchive();
	} else {
		Redirect::to('home');
	}

	if (isset($_POST['submit'])) {
		$exitArchive = new ArchivesController();
		$exitArchive->updateArchive();
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
					<input type="text" name="numero" value="<?php echo $archive['numero']; ?>"/>
				</div>
			</div>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Mode de passation</legend>
				<div class="sec">
					<div class="form-group">
						<label>Mode de passation :</label>
						<select class="form-control" name="mode_passation">
							<option value="<?php echo $archive['mode_passation']; ?>"><?php echo $archive['mode_passation']; ?></option>
							<option value="appel">Appel d'offres</option>
							<option value="negocie">Marché négocier</option>
							<option value="concours">Concours</option>
						</select>
					</div>
					<div class="form-group">
						<label>N° d'appel d'offres :</label>
						<input type="text" name="num_offre" class="form-control" value="<?php echo $archive['num_offre']; ?>">
					</div>
					<div class="form-group">
						<label>Date de publication :</label>
						<input type="Date" name="datepublication_offre" class="form-control" value="<?php echo $archive['datepublication_offre']; ?>">
					</div>
				</div>
				<div class="sec">
					<div class="form-group">
						<label>Date d'ouverture des plis :</label>
						<input type="Date" name="dateouverture_plis" class="form-control" value="<?php echo $archive['dateouverture_plis']; ?>">
					</div>
				</div>
			</fieldset>


			<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Marché</legend>
				<div class="sec">
					<div class="form-group">
						<label>N° Marché :</label>
						<input type="text" name="num_marche" class="form-control" value="<?php echo $archive['num_marche']; ?>">
					</div>
					<div class="form-group">
						<label>Nature dépense :</label>
						<select class="form-control" name="nature_projet">
							<option value="<?php echo $archive['nature_projet']; ?>"><?php echo $archive['nature_projet']; ?></option>
                            <option value="Travaux de construction">Travaux de construction</option>
                            <option value="Travaux d'aménagemant">Travaux d'aménagemant</option>
                            <option value="Etudes technique">Etudes technique</option>
                            <option value="Contrôle technique">Contrôle technique</option>
                            <option value="Achat de matier">Achat de matier</option>
                            <option value="Achat de fourniteur">Achat de fourniteur</option>
                            <option value="Autres">Autres</option>
						</select>
					</div>
					<div class="form-group">
						<label>Delai d'éxécution(jour) :</label>
						<input type="nombre" min="0" name="delai_execution" class="form-control" value="<?php echo $archive['delai_execution']; ?>">
					</div>
				</div>


				<div class="sec">
					<div class="form-group">
						<label>Objet :</label>
						<textarea class="form-control" name="objet" id="exampleFormControlTextarea1" rows="4" cols="120" value="<?php echo $archive['objet']; ?>">
	        			</textarea>
					</div>
				</div>
				<div class="sec">
					<div class="form-group">
						<label>Lieu d'éxécution :</label>
						<select name="Lieu_execution" class="form-control">
							<option value="<?php echo $archive['commune']; ?>"><?php echo $archive['commune']; ?></option>
							<?php foreach ($communes as $commune): ?>
								<option value="<?php echo $commune['nom']?>"><?php echo $commune['nom'];?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Date d'attribution :</label>
						<input type="Date" name="date_attribution" class="form-control" value="<?php echo $archive['date_attribution']; ?>">
					</div>
				</div>
			</fieldset>

			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Avenant</legend>
				<div class="sec">
					<div class="form-group">
						<label>Avenant</label>
						<select name="bool_avenant" class="form-control">
							<option value="<?php echo $archive['bool_avenant']; ?>"><?php echo $archive['bool_avenant']; ?></option>
							<option value="1">Oui</option>
							<option value="0">Non</option>
						</select>
					</div>
					<div class="form-group" id="div1">
						<label id="motif_avenant">Motifs d'avenant :</label>
						<input type="text" name="motif_avenant" class="form-control" value="<?php echo $archive['motif_avenant']; ?>">
					</div>
					<div class="form-group" id="div2">
						<label id="mt_avenant">Montant de depassemant(avenant) :</label>
						<input type="" name="mt_avenant" class="form-control" value="<?php echo $archive['mt_avenant']; ?>">
					</div>
				</div>
			</fieldset>

			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Pénalité</legend>
				<div class="sec">
					<div class="form-group">
						<select class="form-control" name="bool_penalite">
							<option value="<?php echo $archive['bool_penalite']; ?>"><?php echo $archive['bool_penalite'] ? "Oui" : "Non"; ?></option>
							<option value="1">Oui</option>
							<option value="0">Non</option>
						</select>
					</div>
				</div>
			</fieldset>


			<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Paiement</legend>
				<div class="sec">
					<div class="form-group">
						<label>Type de paiement :</label>
						<select class="form-control" name="mode_paiement">
							<option value="<?php echo $archive['mode_paiement']; ?>"><?php echo $archive['mode_paiement']; ?></option>
							<option value="espece">En éspece</option>
							<option value="cheque">Chéque</option>
							<option value="decompte">Virement</option>
						</select>
					</div>
					<div class="form-group">
						<label>Montant Maximum :</label>
						<input type="text" name="max_mht" class="form-control" value="<?php echo $archive['max_mht']; ?>">
					</div>
					<div class="form-group">
						<label>Montant Minimum :</label>
						<input type="text" name="min_mht" class="form-control" value="<?php echo $archive['min_mht']; ?>">
					</div>
				</div>
				<div class="sec">
					<div class="form-group">
						<label>Intérêts moratoires annuels :</label>
						<input type="text" name="interet_moratoire" class="form-control" value="<?php echo $archive['interet_moratoire']; ?>">
					</div>
				</div>
			</fieldset>

			<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Réconduction</legend>
				<div class="sec">
					<div class="form-group">
						<label>Reconduction :</label>
						<select class="form-control" name="bool_reconduction">
							<option value="<?php echo $archive['bool_reconduction']; ?>"><?php echo $archive['bool_reconduction']; ?></option>
							<option value="1">Oui</option>
							<option value="0">Non</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nombre d'années de reconduction :</label>
						<input type="number" min="0" name="nb_annee_recond" class="form-control" value="<?php echo $archive['nb_annee_recond']; ?>">
					</div>
					<div class="form-group">
						<label>Montant à engager la premier année<br /> y compris SAV IM du prorata :</label>
						<input type="number" name="mt_engager" class="form-control" value="<?php echo $archive['mt_engager']; ?>">
					</div>
				</div>
			</fieldset>


			<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Bénéficiaire</legend>

				<div class="sec">
					<div class="form-group">
						<label>Identifiant fiscal :</label>
						<input type="text" name="id_fiscal" class="form-control" value="<?php echo $archive['id_fiscal']; ?>">
					</div>
					<div class="form-group">
						<label>CNSS :</label>
						<input type="text" name="bn_cnss" class="form-control" value="<?php echo $archive['bn_cnss']; ?>">
					</div>
					<div class="form-group">
						<label>Patente :</label>
						<input type="text" name="bn_patente" class="form-control" value="<?php echo $archive['bn_patente']; ?>">
					</div>
				</div>

				<div class="sec">

					<div class="form-group">
						<label>ICE :</label>
						<input type="text" name="bn_ice" class="form-control" value="<?php echo $archive['bn_ice']; ?>">
					</div>
					<div class="form-group">
						<label>Registre de commerce :</label>
						<input type="text" name="bn_registre" class="form-control" value="<?php echo $archive['bn_registre']; ?>">
					</div>

					<div class="form-group">
						<label>RIB :</label>
						<input type="text" name="bn_rib" class="form-control" value="<?php echo $archive['bn_rib']; ?>">
					</div>
				</div>

				<div class="sec">
					<div class="form-group">
						<label>Raison social :</label>
						<input type="text" name="bn_raisonsocial" class="form-control" value="<?php echo $archive['bn_raisonsocial']; ?>">
					</div>
					<div class="form-group">
						<label>Siège social :</label>
						<input type="text" name="bn_siegesocial" class="form-control" value="<?php echo $archive['bn_siegesocial']; ?>">
					</div>
				</div>
			</fieldset>

			<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Signature</legend>
				<div class="sec">
					<div class="form-group">
						<label>Signature :</label>
						<input type="text" name="signature" class="form-control" value="<?php echo $archive['signature']; ?>">
					</div>
					<div class="form-group">
						<label>Fonction :</label>
						<input type="text" name="fonction" class="form-control" value="<?php echo $archive['fonction']; ?>">
					</div>
					<div class="form-group">
						<label>Date signature :</label>
						<input type="Date" name="date_signature" class="form-control" value="<?php echo $archive['date_signature']; ?>">
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
					<input type="submit" name="submit" id="enregistrer" class="btn btn-primary" value="Modifier" />
				</div>
			</div>
		</form>
	</div>
</section>