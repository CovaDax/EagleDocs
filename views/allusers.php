<meta http-equiv="refresh" content="60">
<?php
	require_once '../config.php';

	session_start();
    if(!isset($_SESSION["username"])){
    	header("Location:http://" . $root . "/index.php");
    }

	$db = new Database($database);
	$fivemin = date("Y-m-d H:i:s",mktime(date("H"),(date("i")-5),date("s"),date("m"),date("d"),date("Y")));
	$sql = "SELECT * FROM user u
				INNER JOIN online o ON o.uin = u.uin 
				AND o.online > '$fivemin'";
	$results = $db->query($sql);

	$sql = "SELECT * FROM user u
				INNER JOIN online o ON o.uin = u.uin 
				AND o.online < '$fivemin'";
	$results2 = $db->query($sql);


?>

<BODY>
<style>
	<?php
		include_once ROOT_PATH . "/views/css/bootstrap.css";
		include_once 'views/templates/navbar.php';
	?>
</style>

<div class="jumbotron" style="padding: 30px; margin: 30px">
	<TABLE style="width:100%" class="table-striped table-hover">
		<CAPTION style="align-center"><H2>Online Users</H2></CAPTION>
		<thead>
			<TR>
				<TH>UIN</TH>
				<TH>username</TH>
				<TH>First Name</TH>
				<TH>Last Name</TH>
				<TH>eMail</TH>
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
							echo "<TD>" . $row['firstName'] .  "</TD>";
							echo "<TD>" . $row['lastName'] . "</TD>";
							echo "<TD>" . $row['email'] . "</TD>";
							echo "<TD>" . $row['role'] . "</TD>";
							if($_SESSION['role']=="ADMIN" && $row['username']!=$_SESSION['username']){
								echo "<TD class='danger'><a href='http://" . $root . "/controllers/delete_user.php?id=" . $row['id'] . "'>DELETE</a></TD>";
							}
						echo "</TR>";
					}
				}
			?>
		</tbody>
	</TABLE>

		<TABLE style="width:100%" class="table-striped table-hover">
		<CAPTION style="align-center"><H2>Offline Users</H2></CAPTION>
		<thead>
			<TR>
				<TH>UIN</TH>
				<TH>username</TH>
				<TH>First Name</TH>
				<TH>Last Name</TH>
				<TH>eMail</TH>
				<TH>Role</TH>
			</TR>
		</thead>
		<tbody>
			<?php
				if($results2->num_rows > 0){
					while($row = $results2->fetch_assoc()){
						echo "<TR>";
							echo "<TD>" . $row['uin'] . "</TD>";
							echo "<TD><a href='http://" . $root . "/views/update_user.php?uin=". $row['id'] ."'>" . $row['username'] .  "</a></TD>";
							echo "<TD>" . $row['firstName'] .  "</TD>";
							echo "<TD>" . $row['lastName'] . "</TD>";
							echo "<TD>" . $row['email'] . "</TD>";
							echo "<TD>" . $row['role'] . "</TD>";
							if($_SESSION['role']=="ADMIN" && $row['username']!=$_SESSION['username']){
								echo "<TD class='danger'><a href='http://" . $root . "/controllers/delete_user.php?id=" . $row['id'] . "'>DELETE</a></TD>";
							}
						echo "</TR>";
					}
				}
			?>
		</tbody>
	</TABLE>
</div>
</BODY>
<?php
	header("Location:");
?>