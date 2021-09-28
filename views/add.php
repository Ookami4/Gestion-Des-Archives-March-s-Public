<?php
    $data = new CommunesController();
    $communes = $data->getCommunes();

	if (isset($_POST['submit'])) {
		$newArchive = new ArchivesController();
		$newArchive->addArchive();
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
        		<input type="text" name="numero" />
        	</div>
        </div>
        <fieldset class="scheduler-border">
        	<legend class="scheduler-border"> Mode de passation</legend>
	        <div class="sec">
	          <div class="form-group">
	            <label>Mode de passation :</label>
	            <select class="form-control" name="mode_passation">
	            	<option></option>
	            	<option value="appel">Appel d'offres</option>
	            	<option value="negocie">Marché négocier</option>
	            	<option value="concours">Concours</option>
	            </select>
	          </div>
	          <div class="form-group">
		            <label>N° d'appel d'offres :</label>
		            <input type="text" name="num_offre" class="form-control">
	          </div>
	          <div class="form-group">
		            <label>Date de publication :</label>
		            <input type="Date" name="datepublication_offre" class="form-control">
	           </div>
	        </div>
	        <div class="sec">
	            <div class="form-group">
		            <label>Date d'ouverture des plis :</label>
		            <input type="Date" name="dateouverture_plis" class="form-control">
	            </div>	        
	        </div>
	    </fieldset>


	    <fieldset class="scheduler-border">
	    	<legend class="scheduler-border"> Marché</legend>
	        <div class="sec">
	          <div class="form-group">
	            <label>N° Marché :</label>
	            <input type="text" name="num_marche" class="form-control">
	          </div>
	          <div class="form-group">
	            <label>Nature dépense:</label>
	            <select class="form-control" name="nature_projet">
	              <option></option>
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
	        		<input type="nombre" min="0" name="delai_execution" class="form-control">
	        	</div>

	        </div>


	        <div class="sec">
	        	<div class="form-group">
	        		<label>Objet :</label>
	        		<textarea class="form-control" name="objet" id="exampleFormControlTextarea1" rows="4" cols="120">
	        		</textarea>
	        	</div>
	        </div>
	        <div class="sec">
	        	<div class="form-group">
	        		<label>Lieu d'éxécution :</label>
	        		<select name="lieu_execution" class="form-control">
                        <option></option>
	        			<?php foreach ($communes as $commune): ?>
                        <option value="<?php echo $commune['nom']?>"><?php echo $commune['nom']?></option>
                        <?php endforeach; ?>
	        		</select>
	        	</div>
	        	<div class="form-group">
		            <label>Date d'attribution :</label>
		            <input type="Date" name="date_attribution" class="form-control">
	            </div>	
	        </div>
		</fieldset>

		<fieldset class="scheduler-border">
	    	<legend class="scheduler-border">Avenant</legend>
	    	<div class="sec">
	    		<div class="form-group">
	    			<label>Avenant</label>
	    			<select name="bool_avenant" class="form-control">
	    				<option></option>
	    				<option value="1">Oui</option>
	    				<option value="0">Non</option>
	    			</select>
	    		</div>
	    		<div class="form-group" id="div1">
	    			<label id="motif_avenant">Motifs d'avenant :</label>
                    <input type="text" name="motif_avenant" class="form-control">
	    		</div>
	    		<div class="form-group" id="div2">
	    			<label id="mt_avenant">Montant de depassemant(avenant) :</label>
	    			<input type="" name="mt_avenant" class="form-control">
	    		</div>
	    	</div>
	    </fieldset>

	    <fieldset class="scheduler-border">
	    	<legend class="scheduler-border">Pénalité</legend>
	    	<div class="sec">
	    		<div class="form-group">
			    	<select class="form-control" name="bool_penalite">
			    		<option></option>
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
		              <option></option>
		              <option value="espece">En éspece</option>
		              <option value="cheque">Chéque</option>
		              <option value="decompte">Virement</option>
		            </select>
	            </div>
	            <div class="form-group">
		            <label>Montant Maximum :</label>
		            <input type="text" name="max_mht" class="form-control">
	            </div>
		        <div class="form-group">
		            <label>Montant Minimum :</label>
		            <input type="text" name="min_mht" class="form-control">
		        </div>
	        </div>
	        <div class="sec">
            	<div class="form-group">
	        		<label>Intérêts moratoires annuels :</label>
		            <input type="text" name="interet_moratoire" class="form-control">
			    </div>
            </div>
        </fieldset>

        <fieldset class="scheduler-border">
        	<legend class="scheduler-border"> Réconduction</legend>
        	<div class="sec">
	        	<div class="form-group">
	        		<label>Reconduction :</label>
	        		<select class="form-control" name="bool_reconduction">
	        			<option></option>
	        			<option value="1">Oui</option>
	        			<option value="0">Non</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label>Nombre d'années de reconduction :</label>
	        		<input type="number" min="0" name="nb_annee_recond" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Montant à engager la premier année<br /> y compris SAV IM du prorata :</label>
	        		<input type="number" name="mt_engager" class="form-control">
	        	</div>
            </div>
        </fieldset> 


        <fieldset class="scheduler-border">
	    	<legend class="scheduler-border"> Bénéficiaire</legend>

             <div class="sec">
             	<div class="form-group">
		            <label>Identifiant fiscal :</label>
		            <input type="text" name="id_fiscal" class="form-control">
		        </div>
            	<div class="form-group">
		            <label>CNSS :</label>
		            <input type="text" name="bn_cnss" class="form-control">
		        </div>
                <div class="form-group">
		            <label>Patente :</label>
		            <input type="text" name="bn_patente" class="form-control">
		        </div>
            </div>

            <div class="sec">
            	
	            <div class="form-group">
            		<label>ICE :</label>
            		<input type="text" name="bn_ice" class="form-control">
            	</div>
            	<div class="form-group">
            		<label>Registre de commerce :</label>
            		<input type="text" name="bn_registre" class="form-control">
            	</div>
	            
	            <div class="form-group">
		        	<label>RIB :</label>
		            <input type="text" name="bn_rib" class="form-control">
	            </div>
            </div>

            <div class="sec">
            	<div class="form-group">
		        	<label>Raison social :</label>
		            <input type="text" name="bn_raisonsocial" class="form-control">
	            </div>
            	<div class="form-group">
		        	<label>Siège social :</label>
		            <input type="text" name="commune" class="form-control">
	            </div>
            </div>
	    </fieldset>

        <fieldset class="scheduler-border">
	    	<legend class="scheduler-border"> Signature</legend>
	    	<div class="sec">
	    		<div class="form-group">
	    			<label>Signature :</label>
	    			<input type="text" name="signature" class="form-control">
	    		</div>
	    		<div class="form-group">
	    			<label>Fonction :</label>
	    			<input type="text" name="fonction" class="form-control">
	    		</div>
	    		<div class="form-group">
	    			<label>Date signature :</label>
	    			<input type="Date" name="date_signature" class="form-control">
	    		</div>
	    	</div>
            
	    </fieldset>


        <div class="sec">
		    <div class="form-group">
		      <input type="submit" name="submit" id="enregistrer" class="btn btn-primary" value="Valider" />
		    </div>
        </div>
    </form>
  </div>
</section>
