<?php
	// Author: McKillerFTW
	// Github: www.github.com/mckillerftw
	// Instagram: @rexram
	// Twitter: @wizard80gamer
?>
<html>
	<head>
		<!-- Boostrap 3.3.7 (FOR THE THEME) -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Skin Grabber</title>
		<style> *{font-family: 'Titillium Web', sans-serif;} </style>
	</head>
	
	<body>

		<center>

		<h1> Skin grabber by McKillerFTW </h1>
		<form action="index.php" method="POST">
			<div class="input-group" style="width: 50%;">
				<span class="input-group-addon">Minecraft Name</span>
				<input type="text" name='mcname' class="form-control" placeholder="McKillerFTW / Steve / Alex / etc..">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit" name="submit">Grab</button>
				</span>
			</div>
		</form>
		
		<?php
			if (isset($_POST['submit'])) {
				?>
				  <ul class="nav nav-tabs" style="width: 50%;">
					<li class="active"><a data-toggle="tab" href="#main">Main</a></li>
					<li><a data-toggle="tab" href="#head">A little pictures</a></li>
					<li><a data-toggle="tab" href="#download">Download</a></li>
				  </ul>
				  <div class="tab-content">
					<div id="main" class="tab-pane fade in active">
					  <h3><?php echo $_POST['mcname']; ?></h3>
					  <img src="https://minotar.net/body/<?php echo $_POST['mcname']; ?>/100.png">
					</div>
					<div id="head" class="tab-pane fade">
					  <h3>Pictures of <?php echo $_POST['mcname']; ?>'s skin</h3>
					  <img src="https://minotar.net/helm/<?php echo $_POST['mcname']; ?>/100.png"> <img style="width: 100px; height: 120px;"src="https://minotar.net/cube/<?php echo $_POST['mcname']; ?>/100.png">
					  </br>
					  <img src="https://minotar.net/body/<?php echo $_POST['mcname']; ?>/100.png"> <img src="https://minotar.net/bust/<?php echo $_POST['mcname'];?>"></img>
					</div>
					<div id="download" class="tab-pane fade">
					  <h3>Download <?php echo $_POST['mcname']; ?>'s skin</h3>
					  <a href="https://minecraft.net/en/profile/skin/remote/?url=https://minotar.net/skin/<?php echo $_POST['mcname']; ?>.png" class="btn btn-info" role="button">Change my skin</a></p>
					  <a href="https://minotar.net/download/<?php echo $_POST['mcname']; ?>" class="btn btn-info" role="button">Download</a></p>
					</div>
				  </div>
				  <?php
			}
		?>
	
	</body>