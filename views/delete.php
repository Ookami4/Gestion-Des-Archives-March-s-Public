<?php 
	if (isset($_POST['id'])) {
		$exitArchive = new ArchivesController();
		$exitArchive->deleteArchive();
	}
?>