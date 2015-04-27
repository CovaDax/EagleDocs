<?php
	include_once '../config.php';
	include_once '../controllers/forms.php';
	echo "<STYLE>";
		include_once 'css/bootstrap.css'; 
	echo "</STYLE>";
?>

<BODY>
	<CENTER><H1>Welcome to EagleDocs</H1></CENTER>
	<div class="jumbotron" style="padding: 30px; margin: 30px">
		<TABLE class="table table-striped table-hover" style="margin: 2%; padding: 5%">
			<CAPTION style="align-center"><H2>Your Documents</H2></CAPTION>
			<thead>
				<TR>
					<TH>Title</TH>
					<TH>Status</TH>
				</TR>
			</thead>
			<?php
				if($results->num_rows > 0){
					while($row = $results->fetch_assoc()){
						if($row['processed']==1) { echo "<TR class='success'>"; }
						else if($row['processed']==-1) { echo "<TR class='danger'>"; }
						else { echo "<TR>"; }
							$_SESSION['directory']=$row['directory'];
							echo "<TD><a href='" . $row['type'] . ".php?name=" . $row['submitted'] . "&directory=" . $row['directory'] . "'>" . end(explode("/",$row['directory'])) . "</a></TD>";
							if($row['processed']==1) { echo "<TD>Approved</TD>"; }
							else if($row['processed']==-1) { echo "<TD>Denied</TD>"; }
							else { echo "<TD>In Progress</TD>"; }
						echo "</TR>";
					}
				}
			?>
		</TABLE>
	</div>
<?php 
	if($_SESSION['role']!="RA"){
?>
	<div class="jumbotron" style="padding: 30px; margin: 30px">
		<TABLE class="table table-striped table-hover" style="margin: 2%; padding: 5%">
			<CAPTION style="align-center"><H2>To be Processed</H2></CAPTION>
			<thead>
				<TR>
					<TH>Title</TH>
					<TH>Submitted By</TH>
					<TH>Status</TH>
				</TR>
			</thead>
			<?php
				if(sizeof($toBeProcessed) > 0){
					foreach ($toBeProcessed as $key => $row) {
						if($row['processed']==1) { echo "<TR class='success'>"; }
						else if($row['processed']==-1) { echo "<TR class='danger'>"; }
						else { echo "<TR class='warning'>"; }
							$_SESSION['directory']=$row['directory'];
							echo "<TD><a href='" . $row['type'] . ".php?name=" . $row['submitted'] . "&directory=" . $row['directory'] . "'>" . end(explode("/",$row['directory'])) . "</a></TD>";
							echo "<TD>" . $row['submitted'] . "</TD>";
							if($row['processed']==1) { echo "<TD>Approved</TD>"; }
							else if($row['processed']==-1) { echo "<TD>Denied</TD>"; }
							else { echo "<TD>In Progress</TD>"; }
						echo "</TR>";
					}
				}
			?>
		</TABLE>
	</div>
</BODY>
<?php
	}
?>