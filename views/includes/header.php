<!DOCTYPE html>
<html lang="en">
<head>
	<title>DPN-AREFO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./views/icons/trone.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./views/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/css/util.css">
	<link rel="stylesheet" type="text/css" href="./views/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div style="overflow:auto">
        <header>
            <div id="A">
                <div>
                    <img src="./views/images/trone.png">
                    <strong id="p">
                        La Direction Provinciale de Nador AREFO
                    </strong>
                </div>
                <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true)
                {
                echo '<div><br /><strong id="p">'. $_SESSION['username'].'</strong><br /><a href="'.BASE_url.'logout" title="Déconnexion" id="lo"><strong class="deconnecter"> Se deconnecter</strong></a></div>';
                } ?>
            </div>
        </header>