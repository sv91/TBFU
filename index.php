<?php
// Starting the session
session_start();

// Connecting to the database
try {
	$db = new PDO ( 'mysql:host=localhost;dbname=TBFU;charset=utf8', 'root', 'root' );
} catch ( Exception $e ) {
	die ( 'Erreur : ' . $e->getMessage () );
}

?>

<!-- Usual headings -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Travel Budget Follow Up</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	
	<!-- Body -->
	<body>
		<!-- Gray frame -->
		<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#efefef;" width="1024">
			<!-- Header with logo and name -->
			<tr>
				<td style="vertical-align:top;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;" width="800">					
					<!-- Padding arround the title -->
					<td style="background-color:#efefef; padding-top:15px; padding-left:20px; padding-bottom:10px;">
					<table border="0" cellspacing="0" width="100%">
						<!-- Title -->
						<td valign="bottom" style="background-color:#efefef; padding-top:15px; padding-left:20px; padding-right:20px; margin-bottom:0px; text-decoration:none; font-family:arial,sans-serif; text-transform:uppercase; color:#3e3d40;" valign="bottom"><span style="font-size:24px"><strong>Travel Budget Follow Up</strong></span><br />
						<span style="font-size:14px;">CBS Gestion</span></td>
						<!-- Epfl Logo -->
						<td align="right" style="background-color:#efefef; padding-left:20px; padding-right:20px;"><a href="http://www.epfl.ch/" target="new"><img alt="EPFL" height="97" src="http://2014.igem.org/wiki/images/thumb/0/02/EPFL_logo.png/800px-EPFL_logo.png" width="200" /></a></td>
					</table>
				</table>
			</tr>
			
			<!-- Space -->
			<tr>
				<td style="padding-top:15px;">
			</tr>
			
			<!-- Real body -->
			<tr>
				<td style="vertical-align:top;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;" width="800">					
					<!-- Padding arround the text -->
					<td style="padding:30px 15px;">
					<table border="0" cellspacing="0" width="100%" style="font-family:arial,sans-serif;">
						<!-- Code -->
						
						<?php
						$i = 0;
						$good = false;
						
						// Verify if the session have good name and id.
						if(isset($_SESSION['name']) && isset($_SESSION['id'])){
							$session = 'SELECT * FROM accounts WHERE name="'.htmlspecialchars($_SESSION['name']).'" AND id="'.htmlspecialchars($_SESSION['id']).'"' ;
							$answer = $db->query($session);
							while ( $result = $answer->fetch () ){
								$i++;
							}
							if($i>0){
								$good = true;
							}
						} 
						
						// If not good, ask to log in.
						/*if(!$good){
							echo('<td><p><u>Please log in:</u><br /></p><br /></td>
							<tr>
							<form action="login.php" method="post">
								<td>
									Name: <input type="text" name="name" />
								</td>
								<td>
									Password: <input type="password" name="pass" />
								</td>
								<td>
									<input type="submit" value="OK">
								</td>
							</form>
							</tr>
							');
						// If good, proceed with the tabs.
						} else {*/
							echo('
								<ul class="nav nav-tabs" style="font-family:arial,sans-serif;">
									<li class="active"><a data-toggle="tab" href="#tab1" style="color:#cf8888">Input</a></li>
									<li><a data-toggle="tab" href="#tab2" style="color:#cf8888">Export</a></li>
									<li><a data-toggle="tab" href="#tab3" style="color:#cf8888">Update</a></li>
									<li><a data-toggle="tab" href="#tab4" style="color:#cf8888">Follow Up</a></li>
									<li><a data-toggle="tab" href="#tab5" style="color:#cf8888">State</a></li>
								</ul>
								<div class="tab-content" style="font-family:arial,sans-serif;">
 								  	<div id="tab1" class="tab-pane fade in active">
 								    	'); 
 								    	include('input.php');
 							echo('
 								    
 								    </div>
 								  	<div id="tab2" class="tab-pane fade">
 								    	<h3>Input2</h3>
  								    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  								  	</div>
 								  	<div id="tab3" class="tab-pane fade">
 								    	<h3>Input</h3>
  								    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  								  	</div>
 								  	<div id="tab4" class="tab-pane fade">
 								    	<h3>Input</h3>
  								    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  								  	</div>
 								  	<div id="tab5" class="tab-pane fade">
 								    	<h3>Input</h3>
  								    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  								  	</div>
 								 </div>
						')
						
				//		}
						
						?>
						
					</table>
				</table>
			</tr>
			
			<!-- Footer -->
			<tr>
				<td style="padding-top:15px;">
			</tr>
		</table>
<!-- Usual bottom -->
	</body>
</html>