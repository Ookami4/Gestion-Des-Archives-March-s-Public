<?php 

class Archives
{
	
	static public function getAll(){
		$statment = DB::connect()->prepare("SELECT * FROM archives");
		$statment->excute();
		return $statment->close();
		$statment = null;
	}

	public function getArchive($data){
		$id = $data['id'];
		try{
			$statment = DB::connect()->prepre("SELECT * FROM archives WHERE id=:id");
			$statment->excute(array(":id"=> $id));
			$archives = $statment->fetch(PDO::FETCH_OBJ);
			return $archives;
		} catch (PDOException $e){
			echo 'Error' . $e.getMessage();
		}
	}

	public function searchArchive($data){
		$search = $data['search'];
		try {
			$statment = DB::connect()->prepare("SELECT * FROM archives WHERE num_marche LIKE ? OR num_archive LIKE ?");

			$statment->excute(array('%'.$search.'%', '%'.$search.'%'));
			$archives = $statment->fetchAll();
			return $archives;
		} catch (PDOException $e) {
			echo "Error" . $e.getMessage();
		}
	}

    static public function add($data){
    	$statment = DB::connect()->prepare("INSERT INTO archives(numero,mode_passation,num_offre,datepublication_offre,dateouverture_plis,num_marche,nature_projet,delai_execution,objet,lieu_execution,date_attribution,bool_avenant,motif_avenant,mt_avenant,bool_penalite,mode_paiement,max_mht,min_mht,interet_moratoire,bool_reconduction,nb_annee_recond,mt_engager,id_fiscal,bn_cnss,bn_patente,bn_ice,bn_registre,bn_rib,bn_raisonsocial,commune,signature,fonction,date_signature,created_at, updated_at) 
            VALUES (:numero,:mode_passation,:num_offre,:datepublication_offre,:dateouverture_plis,:num_marche,:nature_projet,:delai_execution,:objet,:lieu_execution,:date_attribution,:bool_avenant,:motif_avenant,:mt_avenant,:bool_penalite,:mode_paiement,:max_mht,:min_mht,:interet_moratoire,:bool_reconduction,:nb_annee_recond,:mt_engager,:id_fiscal,:bn_cnss,:bn_patente,:bn_ice,:bn_registre,:bn_rib,:bn_raisonsocial,:commune,:signature,:fonction,:date_signature,:created_at,:updated_at)
        ");
        $statment ->bindParam(':numero', $data['numero'], PDO::PARAM_STR);
        $statment ->bindParam(':mode_passation', $data['mode_passation'], PDO::PARAM_STR);
        $statment ->bindParam(':num_offre', $data['num_offre'], PDO::PARAM_STR);
        $statment ->bindParam(':datepublication_offre', $data['datepublication_offre'], PDO::PARAM_STR);
        $statment ->bindParam(':dateouverture_plis', $data['dateouverture_plis'], PDO::PARAM_STR);
        $statment ->bindParam(':num_marche', $data['num_marche'], PDO::PARAM_STR);
        $statment ->bindParam(':nature_projet', $data['nature_projet'], PDO::PARAM_STR);
        $statment ->bindParam(':delai_execution', $data['delai_execution'], PDO::PARAM_INT);
        $statment ->bindParam(':objet', $data['objet'], PDO::PARAM_STR);
        $statment ->bindParam(':lieu_execution', $data['lieu_execution'], PDO::PARAM_STR);
        $statment ->bindParam(':date_attribution', $data['date_attribution'], PDO::PARAM_STR);
        $statment ->bindParam(':bool_avenant', $data['bool_avenant'], PDO::PARAM_BOOL);
        $statment ->bindParam(':motif_avenant', $data['motif_avenant'], PDO::PARAM_STR);
        $statment ->bindParam(':mt_avenant', $data['mt_avenant'], PDO::PARAM_STR);
        $statment ->bindParam(':bool_penalite', $data['bool_penalite'], PDO::PARAM_BOOL);
        $statment ->bindParam(':mode_paiement', $data['mode_paiement'], PDO::PARAM_STR);
        $statment ->bindParam(':max_mht', $data['max_mht'], PDO::PARAM_STR);
        $statment ->bindParam(':max_mht', $data['max_mht'], PDO::PARAM_STR);
        $statment ->bindParam(':interet_moratoire', $data['interet_moratoire'], PDO::PARAM_STR);
        $statment ->bindParam(':bool_reconduction', $data['bool_reconduction'], PDO::PARAM_BOOL);
        $statment ->bindParam(':nb_annee_recond', $data['nb_annee_recond'], PDO::PARAM_STR);
        $statment ->bindParam(':mt_engager', $data['mt_engager'], PDO::PARAM_STR);
        $statment ->bindParam(':id_fiscal', $data['id_fiscal'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_cnss', $data['bn_cnss'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_patente', $data['bn_patente'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_ice', $data['bn_ice'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_registre', $data['bn_registre'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_rib', $data['bn_rib'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_raisonsocial', $data['bn_raisonsocial'], PDO::PARAM_STR);
        $statment ->bindParam(':commune', $data['commune'], PDO::PARAM_STR);
        $statment ->bindParam(':signature', $data['signature'], PDO::PARAM_STR);
        $statment ->bindParam(':fonction', $data['fonction'], PDO::PARAM_STR);
        $statment ->bindParam(':date_signature', $data['date_signature'], PDO::PARAM_STR);
        if ($statment->execute()) {
        	return 'succes';
        }else{
        	return 'erreur';
        }
        $statment->close();
        $statment = null;

    }

    static public function update($data){
    	$statment = DB::connect()->prepare("UPDATE archives SET numero = :numero ,mode_passation = :mode_passation, num_offre = :num_offre, datepublication_offre = :datepublication_offre, dateouverture_plis = :dateouverture_plis, num_marche = :num_marche, nature_projet = :nature_projet, delai_execution = :delai_execution, objet = :objet, lieu_execution = :lieu_execution, date_attribution = :date_attribution, bool_avenant = :bool_avenant, motif_avenant = :motif_avenant, mt_avenant = :mt_avenant, bool_penalite = :bool_penalite, mode_paiement = :mode_paiement, max_mht = :max_mht, min_mht = :min_mht, interet_moratoire = :interet_moratoire, bool_reconduction = :bool_reconduction, nb_annee_recond = :nb_annee_recond, mt_engager = :mt_engager, id_fiscal = :id_fiscal, bn_cnss = :bn_cnss, bn_patente = :bn_patente, bn_ice = :bn_ice, bn_registre = :bn_registre, bn_rib = :bn_rib, bn_raisonsocial = :bn_raisonsocial, commune = :commune, signature = :signature, fonction = :fonction, date_signature = :date_signature, created_at = :created_at, updated_at = :updated_at WHERE id = :id");
        $statment ->bindParam(':id', $data['id'], PDO::PARAM_INT);
    	$statment ->bindParam(':numero', $data['numero'], PDO::PARAM_STR);
        $statment ->bindParam(':mode_passation', $data['mode_passation'], PDO::PARAM_STR);
        $statment ->bindParam(':num_offre', $data['num_offre'], PDO::PARAM_STR);
        $statment ->bindParam(':datepublication_offre', $data['datepublication_offre'], PDO::PARAM_STR);
        $statment ->bindParam(':dateouverture_plis', $data['dateouverture_plis'], PDO::PARAM_STR);
        $statment ->bindParam(':num_marche', $data['num_marche'], PDO::PARAM_STR);
        $statment ->bindParam(':nature_projet', $data['nature_projet'], PDO::PARAM_STR);
        $statment ->bindParam(':delai_execution', $data['delai_execution'], PDO::PARAM_INT);
        $statment ->bindParam(':objet', $data['objet'], PDO::PARAM_STR);
        $statment ->bindParam(':lieu_execution', $data['lieu_execution'], PDO::PARAM_STR);
        $statment ->bindParam(':date_attribution', $data['date_attribution'], PDO::PARAM_STR);
        $statment ->bindParam(':bool_avenant', $data['bool_avenant'], PDO::PARAM_BOOL);
        $statment ->bindParam(':motif_avenant', $data['motif_avenant'], PDO::PARAM_STR);
        $statment ->bindParam(':mt_avenant', $data['mt_avenant'], PDO::PARAM_STR);
        $statment ->bindParam(':bool_penalite', $data['bool_penalite'], PDO::PARAM_BOOL);
        $statment ->bindParam(':mode_paiement', $data['mode_paiement'], PDO::PARAM_STR);
        $statment ->bindParam(':max_mht', $data['max_mht'], PDO::PARAM_STR);
        $statment ->bindParam(':max_mht', $data['max_mht'], PDO::PARAM_STR);
        $statment ->bindParam(':interet_moratoire', $data['interet_moratoire'], PDO::PARAM_STR);
        $statment ->bindParam(':bool_reconduction', $data['bool_reconduction'], PDO::PARAM_BOOL);
        $statment ->bindParam(':nb_annee_recond', $data['nb_annee_recond'], PDO::PARAM_STR);
        $statment ->bindParam(':mt_engager', $data['mt_engager'], PDO::PARAM_STR);
        $statment ->bindParam(':id_fiscal', $data['id_fiscal'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_cnss', $data['bn_cnss'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_patente', $data['bn_patente'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_ice', $data['bn_ice'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_registre', $data['bn_registre'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_rib', $data['bn_rib'], PDO::PARAM_STR);
        $statment ->bindParam(':bn_raisonsocial', $data['bn_raisonsocial'], PDO::PARAM_STR);
        $statment ->bindParam(':commune', $data['commune'], PDO::PARAM_STR);
        $statment ->bindParam(':signature', $data['signature'], PDO::PARAM_STR);
        $statment ->bindParam(':fonction', $data['fonction'], PDO::PARAM_STR);
        $statment ->bindParam(':date_signature', $data['date_signature'], PDO::PARAM_STR);
        $statment ->bindParam(':created_at', $data['created_at'], PDO::PARAM_STR);
        $statment ->bindParam(':updated_at', $data['updated_at'], strtotime (date ("Y-m-d H:i:s")), PDO::PARAM_STR);
    	 if ($statment->execute()) {
             return 'succes';
        }else{
        	return 'erreur';
        }
        $statment->close();
        $statment = null;

    }



    static public function delete($data){

    	$id = $data['id'];
    	try{
	    	$statment = DB::connect()->prepare("DELETE FROM archives WHERE id=:id ");
	    	$statment->excute(array(":id" => $id));
	    	return ($statment->excute()) ? 'succes' : 'erreur' ;
	    	$statment->close();
	    	$statment = null;
	    }catch(PDOException $e){
	    	echo 'Ops! Erreur'.$e.getMessage();
	    }

    }
}