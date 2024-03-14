<?php

session_start();

include_once '../../backend/user/dbs.php';  

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE title = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			
			<tr>
				<?php echo $row->title; ?><br>
				<?php echo $row->Description;?>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Not found";
		}


}

?>