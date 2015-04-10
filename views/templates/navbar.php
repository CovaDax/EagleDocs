<?php
	session_start();
?>
<STYLE><?php include ROOT_PATH . "/css/bootstrap.css"; ?></STYLE>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      	<?php
      		echo "<a href='http://" . $root . "/views/update_user.php' class='navbar-brand'>" . $_SESSION['firstName'] . " " .  $_SESSION['lastName'] . "</a>";
		?>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-tabs">
        <?php
        	echo "<li class='active'><a href='http://" . $root . "/index.php'>Home <span class='sr-only'>(current)</span></a></li>";
          echo "<li class='dropdown-active'>
                  <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Dropdown</a>
               </li>";

			if($_SESSION['role'] == "DIRECTOR" || $_SESSION['role'] == "AD" || $_SESSION['role'] == "RD" || $_SESSION['role'] == "RLTA" || $_SESSION['role'] == "RA"){
				echo "<li><a href='http://" . $root . "/views/allusers.php'>Users</a></li>";
				echo "<li><a href='http://" . $root . "/views/create_user.php'>Create New User</a></li>";
			}

      if($_SESSION['role'] == "ADMIN" || $_SESSION['role'] == "INSTRUCTOR"){
        if(basename($_SERVER['SCRIPT_FILENAME']) == "course.php"){
          echo "<li><a href='http://" . $root . "/views/create_assignment.php'>Create Assignment</a></li>";
        }
      }

		?>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">

      </form>
      <ul class="nav navbar-nav navbar-right">
    <?php
    	if(isset($_SESSION['username']))
        	echo "<li><a href='http://" . $root . "/controllers/logout.php'>Logout</a></li>";
        else 
        	echo "<li><a href='http://" . $root . "/views/login.php'>Login</a></li>";
    ?>
      </ul>
    </div>
  </div>
</nav>