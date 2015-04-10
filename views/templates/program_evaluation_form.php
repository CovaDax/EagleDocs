<HTML>
	<HEAD>
		<STYLE>
			<?php
				include_once '../css/bootstrap.css';
				include_once '../../config.php';
				session_start();
			?>
		</STYLE>
	</HEAD>
	<BODY>
<form class="form-horizontal"><form class="form-horizontal" action='../../controllers/programEvaluation.php' method="POST">
  <fieldset>
    <legend>
    	<CENTER>
    		Florida Gulf Cost University<BR>
			South Village<BR>
			Office of Housing and Residence Life<BR>
			Everglades Hall Program Evaluation<BR>
			</CENTER>
    </legend>
    <div class="form-group">
	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label"><B>Resident Assistant:</B></label>
	      <div class="col-lg-3">
	        <!-- <input type="text" class="form-control" id="name" placeholder="Name"> -->
	        <B>
	        	<?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?>
	        </B>
	      </div>

	      <label for="textArea" class="col-lg-2 control-label"><B>Program Topic:</B></label>
	      <div class="form-group">
	      <div class="col-lg-3">
	        <select class="form-control" id="select">
	          <option>Individual</option>
	          <option>Collaborative</option>
	          <option>All-Staff</option>
	          <option>Community Builder</option>
	        </select>
	      </div>
	    </div>

	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Title:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Program Time:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		      </div>
		    </div>
	    </div>

	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Day/Date:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Program Type:</B></label>
		    <div class="col-lg-3">
		      	<select class="form-control" id="select">
		          <option>FYRE Partner Program</option>
		          <option>Social</option>
		          <option>Educational</option>
		          <option>Community Builder</option>
	        	</select>
		    </div>
	    </div>
	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Location</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		    </div>
	    </div>
    </div>

	    <div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Resources Used? (Please note presenter's name and contact info and any other department/business used)</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea"></textarea>
			    </div>
			</div>
		</div>
	</div>
	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Bief Summary of Program:</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="3" id="textArea"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Residents' Response to the Program:</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="3" id="textArea"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>What was unsuccessful about ths program? What changes would you make? What obstacles did you encounter?</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		<div class="form-group">
			<label for="textArea" class="col-lg-2 control-label"><B>Would You recomend this program?</B></label>
			<div class="col-lg-3">
				<select class="form-control" id="select">
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>
		</div>

		<div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>RA's Initials:</B></label>
	    	<div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		    </div>
		    <label for="textArea" class="col-lg-2 control-label"><B>Today's Date:</B></label>
		    <div class="col-lg-3">
		    	<textarea class="form-control" rows="1"
		    	id="textArea"></textarea>
		    </div>
		</div>
	</div>
	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Floor/Building Attendance:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Total Attendance:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		      </div>

		    <label for="textArea" class="col-lg-3 control-label"><B>Total Cost:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea"></textarea>
		      </div>
		</div>
	

    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
	</BODY>
</HTML>