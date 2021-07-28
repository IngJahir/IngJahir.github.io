<!DOCTYPE HTML>
<html>

<!--------------->
<!-- HEAD PAGE -->
<!--------------->

<head>
	<title>Portafolio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!------------->
	<!-- SIDEBAR -->
	<!------------->
	<?php require_once 'INDEX/SIDEBAR.php'; ?>

	<!------------->
	<!-- WRAPPER -->
	<!------------->
	<div id="wrapper">

		<!-- About me -->
		<?php require_once 'INDEX/ABOUT_ME.php'; ?>

		<!-- Software development -->
		<?php require_once 'INDEX/DEVELOPMENTS.php'; ?>

		<!-- Simulation - FEA - HPC -->
		<?php require_once 'INDEX/SIMULATION.php'; ?>

		<!-- Skills -->
		<?php //require_once 'INDEX/SKILLS.php'; 
		?>

		<!-- Contact -->
		<?php require_once 'INDEX/CONTACT.php'; ?>
	</div>

</body>

<!---------------------->
<!-- FOOTER Y SOURCES -->
<!---------------------->
<?php require_once 'INDEX/FOOTER.php'; ?>
<?php require_once 'DEPENDENCIAS.php'; ?>

</html>