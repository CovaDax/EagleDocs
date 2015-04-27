<?php 
  include_once '../config.php';

  session_start(); 

	echo "<STYLE>";
		include_once ROOT_PATH . '/views/css/bootstrap.css';
	echo "</STYLE>";
?>

<form class="form-horizontal col-lg-9" action='../controllers/create_user.php' method="POST" style="padding: 3%">
  <fieldset>
    <legend>Create User</legend>

    <div class="form-group">
        <!--username--> 
      <label for="inputDefault" class="col-lg-2 control-label">UIN</label>
      <div class="col-lg-10">
        <input type="numeric" class="form-control" id="inputDefault" placeholder="UIN" name="uin">
      </div>
    </div>

    <div class="form-group">
    	<!--username-->	
		<label for="inputDefault" class="col-lg-2 control-label">Username</label>
		<div class="col-lg-10">
			<input type="text" class="form-control" id="inputDefault" placeholder="Username" name="username">
		</div>

		<!-- Password -->
		<label for="inputPassword" class="col-lg-2 control-label">Password</label>
      	<div class="col-lg-10">
        	<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
	  	</div>

		<!--email -->
	    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
	    <div class="col-lg-10">
	    	<input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
	    </div>
    </div>

    <div class="form-group">
	    <label for="inputDefault" class="col-lg-2 control-label">First Name</label>
		<div class="col-lg-10">
			<input type="text" class="form-control" id="inputDefault" placeholder="First Name" name="firstName">
		</div>

		<label for="inputDefault" class="col-lg-2 control-label">Last Name</label>
		<div class="col-lg-10">
			<input type="text" class="form-control" id="inputDefault" placeholder="Last Name" name="lastName">
		</div>

    </div>

    <!--
      Change radio options to real permission levels
    -->
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Roles</label>
      <div class="col-lg-4">
        <select class="form-control" id="select" name="building">
            <option value="" name="">Select a Housing Area</option>
            <option value="glades">The Glades - North Lake Village</option>
            <option value="groves">The Groves - North Lake Village</option>
            <option value="gardens">The Gardens - North Lake Village</option>
            <option value="wlv">West Lake Village</option>
            <option value="biscayne">Biscayne - South Lake Village</option>
            <option value="eagle">Eagle - South Lake Village</option>
            <option value="everglades">Everglades - South Lake Village</option>
            <option value="osprey">Osprey - South Lake Village</option>
            <option value="palmetto">Palmetto - South Lake Village</option>
        </select>
      </div>
      <div class="col-lg-4">
        <select class="form-control" id="select" name="role">
            <option value="" name="">Select the User's Position</option>
            <option value="DIRECTOR">Director</option>
            <option value="AD">Assisstant Director</option>
            <option value="RD">Resident Director</option>
            <option value="RLTA">Resident Leader Team Assisstant</option>
            <option value="RA">Resident Assisstant</option>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancel</button>
        <input type="submit" class="btn btn-primary">
      </div>
    </div>
  </fieldset>
</form>