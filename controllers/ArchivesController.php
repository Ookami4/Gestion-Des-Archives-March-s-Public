<?php 

class ArchivesController
{
	
	public function getArchives(){
		$archives = Archives::getAll();
		return $archives;
	}

	public function getOneArchive(){
		if (isset($_POST['id'])) {
			$data = array('id' => $_POST['id'],);
		}
		$archive = Archives::getArchive($data);
		return $archive;
	}

	public function findArchives(){
		if (isset($_POST['search'])) {
			$data = array('search' => $_POST['search'],);
		}
		$archives = Archives::searchArchive();
		return $archives;
	}

	public function addArchive(){
		if (isset($_POST['submit'])) {
			$data = array(
			    'created_at' => date('Y/m/d'),
                'updated_at' => date('Y/m/d'),
                'numero' => $_POST['numero'],
                'mode_passation' => $_POST['mode_passation'],
                'num_offre' => $_POST['num_offre'],
                'datepublication_offre' => $_POST['datepublication_offre'],
                'dateouverture_plis' => $_POST['dateouverture_plis'],
                'num_marche' => $_POST['num_marche'],
                'nature_projet' => $_POST['nature_projet'],
                'delai_execution' => $_POST['delai_execution'],
                'objet' => $_POST['objet'],
                'lieu_execution' => $_POST['lieu_execution'],
                'date_attribution' => $_POST['date_attribution'],
                'bool_avenant' => $_POST['bool_avenant'],
                'motif_avenant' => $_POST['motif_avenant'],
                'mt_avenant' => $_POST['mt_avenant'],
                'bool_penalite' => $_POST['bool_penalite'],
                'mode_paiement' => $_POST['mode_paiement'],
                'max_mht' => $_POST['max_mht'],
                'min_mht' => $_POST['min_mht'],
                'interet_moratoire' => $_POST['interet_moratoire'],
                'bool_reconduction' => $_POST['bool_reconduction'],
                'nb_annee_recond' => $_POST['nb_annee_recond'],
                'mt_engager' => $_POST['mt_engager'],
                'id_fiscal' => $_POST['id_fiscal'],
                'bn_cnss' => $_POST['bn_cnss'],
                'bn_patente' => $_POST['bn_patente'],
                'bn_ice' => $_POST['bn_ice'],
                'bn_registre' => $_POST['bn_registre'],
                'bn_rib' => $_POST['bn_rib'],
                'bn_raisonsocial' => $_POST['bn_raisonsocial'],
                'commune' => $_POST['commune'],
                'signature' => $_POST['signature'],
                'fonction' => $_POST['fonction'],
                'date_signature' => $_POST['date_signature']
            );
			$result = Archives::add($data);
			if ($result === 'succes') {
				Session::set('success','Archive ajouté avec succés');
				Redirect::to('home');
			} else {
				echo $result;
			}
			
		}
	}

	public function updateArchive(){
		if (isset($_POST['submit'])) {
            $data = array(
                'updated_at' => date('Y/m/d'),
                'created_at' => date('Y/m/d'),
                'numero' => $_POST['numero'],
                'mode_passation' => $_POST['mode_passation'],
                'num_offre' => $_POST['num_offre'],
                'datepublication_offre' => $_POST['datepublication_offre'],
                'dateouverture_plis' => $_POST['dateouverture_plis'],
                'num_marche' => $_POST['num_marche'],
                'nature_projet' => $_POST['nature_projet'],
                'delai_execution' => $_POST['delai_execution'],
                'objet' => $_POST['objet'],
                'lieu_execution' => $_POST['lieu_execution'],
                'date_attribution' => $_POST['date_attribution'],
                'bool_avenant' => $_POST['bool_avenant'],
                'motif_avenant' => $_POST['motif_avenant'],
                'mt_avenant' => $_POST['mt_avenant'],
                'bool_penalite' => $_POST['bool_penalite'],
                'mode_paiement' => $_POST['mode_paiement'],
                'max_mht' => $_POST['max_mht'],
                'min_mht' => $_POST['min_mht'],
                'interet_moratoire' => $_POST['interet_moratoire'],
                'bool_reconduction' => $_POST['bool_reconduction'],
                'nb_annee_recond' => $_POST['nb_annee_recond'],
                'mt_engager' => $_POST['mt_engager'],
                'id_fiscal' => $_POST['id_fiscal'],
                'bn_cnss' => $_POST['bn_cnss'],
                'bn_patente' => $_POST['bn_patente'],
                'bn_ice' => $_POST['bn_ice'],
                'bn_registre' => $_POST['bn_registre'],
                'bn_rib' => $_POST['bn_rib'],
                'bn_raisonsocial' => $_POST['bn_raisonsocial'],
                'commune' => $_POST['commune'],
                'signature' => $_POST['signature'],
                'fonction' => $_POST['fonction'],
                'date_signature' => $_POST['date_signature']
            );
            $result = Archives::update($data);
            if ($result === 'succes') {
                Session::set('success', 'Archive modifié avec succés');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
	}

	public function deleteArchive(){
		if (isset($_POST['id'])) {
			$data['id'] = $_POST['id'];
			$result = Archives::delete($data);
			if ($result === 'succes') {
				Session::set('success', 'Archive supprimé avec succés');
				Redirect::to('home');
			} else {
				echo $result;
			}
		}
	}


}
