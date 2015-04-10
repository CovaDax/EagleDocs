<?php
	session_start();
	include 'config.php';
    include_once ROOT_PATH . "/views/templates/navbar.php";
?>

<STYLE>
	<?php include 'views/css/bootstrap.css'; ?>
</STYLE>

<H1>Welcome to EagleDocs</H1>
<?php
	if(isset($_SESSION['username'])){
?>
<div class="jumbotron" style="padding: 30px; margin: 30px">
	<TABLE style="width:100%" class="table-striped table-hover">
		<CAPTION style="align-center"><H2>Your Documents</H2></CAPTION>
		<thead>
			<TR>
				<TH>Title</TH>
				<TH>Status</TH>
				<TH>Submitted</TH>
			</TR>
		</thead>
	</TABLE>
</div>

<div class="jumbotron" style="padding: 30px; margin: 30px">
	<TABLE style="width:100%" class="table-striped table-hover">
		<CAPTION style="align-center"><H2>To be Processed</H2></CAPTION>
		<thead>
			<TR>
				<TH>Title</TH>
				<TH>Submitted By</TH>
				<TH>Status</TH>
				<TH>Submitted</TH>
			</TR>
		</thead>
	</TABLE>
</div>
<?php
}
?>