<?php
require_once './controllers/UsersController.php';
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>
<div style="overflow:auto">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="views/includes/images/trone.png" alt="IMG">
					<span class="login100-form-title">
					 La Direction Provinciale du Ministère de l'Éducation Nationale et de la Formation Professionnelle à Nador AREFO
					</span>
				</div>
                 
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Authentification
				    </span>
                    <?php include('./views/includes/alerts.php');?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="submit" class="login100-form-btn">Connexion</button>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>