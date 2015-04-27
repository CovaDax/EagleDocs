<?php
	require_once '../config.php';

	session_start();
    if(!isset($_SESSION["username"])){
    	header("Location:http://" . $root . "/index.php");
    }

	$db = new Database($database);
	$sql = "SELECT * FROM user";
	$results = $db->query($sql);
?>

<BODY>
<style>
	<?php
		include_once ROOT_PATH . "/views/css/bootstrap.css";
	?>
</style>

<div class="jumbotron" style="padding: 30px; margin: 30px">
	<TABLE style="width:100%" class="table-striped table-hover">
		<CAPTION style="align-center"><H2>Online Users</H2></CAPTION>
		<thead>
			<TR>
				<TH>UIN</TH>
				<TH>username</TH>
				<TH>Name</TH>
				<TH>eMail</TH>
				<TH>Building</TH>
				<TH>Role</TH>
			</TR>
		</thead>
		<tbody>
			<?php
				if($results->num_rows > 0){
					while($row = $results->fetch_assoc()){
						echo "<TR>";
							echo "<TD>" . $row['uin'] . "</TD>";
							echo "<TD><a href='http://" . $root . "/views/update_user.php?uin=". $row['id'] ."'>" . $row['username'] .  "</a></TD>";
							echo "<TD>" . $row['firstName'] .  " " . $row['lastName'] . "</TD>";
							echo "<TD>" . $row['email'] . "</TD>";
							//echo "<TD><a href='http://" . $root . "/views/email.php?name=" . $row['username'] . "'>" . $row['email'] . "</a></TD>";
							echo "<TD>" . $row['village'] . " " . $row['building'] . "</TD>";
							echo "<TD>" . $row['role'] . "</TD>";
							if($_SESSION['role']=="DIRECTOR" && $row['username']!=$_SESSION['username']){
								echo "<TD class='danger'><a href='http://" . $root . "/controllers/delete_user.php?id=" . $row['uin'] . "'>DELETE</a></TD>";
							}
						echo "</TR>";
					}
				}
			?>
		</tbody>
	</TABLE>
</div>
</BODY>