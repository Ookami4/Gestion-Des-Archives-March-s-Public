<?php 
 	if (isset($_POST['find'])) {
 		$data = new ArchivesController();
 		$archives = $data->findArchives();
 	} else {
 		$data = new ArchivesController();
 		$archives = $data->getArchives();
 	}
 ?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-body bg-light">

					<a href="<?php echo BASE_url;?>add" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i> Ajoute un nouveau archive
					</a>

					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Rechercher Par N° archieve ou N° marché">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>

					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">N° archieve</th>
					      <th scope="col">N° marché</th>
					      <th scope="col">Commune</th>
					      <th scope="col">Nature dépense</th>
					      <th scope="col">Date Attribution</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($archives as $archive):?>
					    	<tr>
						      <th scope="row"><?php echo $archive['numero']; ?></th>
						      <td><?php echo $archive['num_marche'];?></td>
						      <td><?php echo $archive['commune'];?></td>
						      <td><?php echo $archive['nature_projet'];?></td>
						      <td><?php echo $archive['date_attribution'];?></td>
						      <td class="d-flex flex-row">

						      	<form method="post" class="mr-1" action="update">
						      		<input type="hidden" name="id" value="<?php echo $archive['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>

						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $archive['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>

                                <form method="post" class="mr-1" action="archieve-details">
                                    <input type="hidden" name="id" value="<?php echo $archive['id'];?>">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-more"></i></button>
                                </form>

						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
