<?php
// Starting the session
session_start();
?>

<!-- Usual headings -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Travel Budget Follow Up: Password creator</title>
	</head>
	<body>
	<?php
	if(isset($_POST['name']) && isset($_POST['pass'])){
		// Connecting to the database
		try {
			$db = new PDO ( 'mysql:host=localhost;dbname=TBFU;charset=utf8', 'root', 'root' );
		} catch ( Exception $e ) {
			die ( 'Erreur : ' . $e->getMessage () );
		}
		
		$sql= 'INSERT INTO accounts (id,name,password,createdBy) VALUES ('.rand(1, 1000000000).',"'.$_POST['name'].',"'.isset($_POST['pass']).',"'.date("Y-m-d H:i:s").'")';
		if ($db->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		$sql= 'INSERT INTO accounts (id,name,password,created) VALUES ("'.rand(1, 1000000000).'","'.$_POST['name'].'","'.isset($_POST['pass']).'","'.date("Y-m-d H:i:s").'")';
		if ($db->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $db->error;
		}
		}
		$db->close();
		
	}
	
	
	
	?>
	
	
	
<!-- Usual bottom -->
	</body>
</html>