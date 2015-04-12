<?php
	include '../config.php';
	include ROOT_PATH . '/controllers/download.php';
?>
<HTML>
	<HEAD>
	</HEAD>
	<BODY>
<form class="form-horizontal" action="../controllers/process.php?type=programeval&upload=<?php echo $submitter;?>" method="POST">
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
	        <input class="form-control" id="name" name="username" 
	        	value='<?php echo $data['username']; ?>'
	        	readonly >
	      </div>

	      <label for="textArea" class="col-lg-2 control-label"><B>Program Topic:</B></label>
	      <div class="form-group">
	      <div class="col-lg-3">
	        <input class="form-control" id="select" name="programTopic" 
	        	value="<?php echo $data['programTopic']; ?>" readonly>
	      </div>
	    </div>

	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Title:</B></label>
		    <div class="col-lg-3">
		        <input class="form-control" id="textArea" name="programTitle" 
		        	value="<?php echo $data['programTitle']?>" readonly></textarea>
		    </div>
	    </div>

	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Day/Date:</B></label>
		    <div class="col-lg-3">
		        <input class="form-control" type="date" name="daydate" value="<?php echo $data['daydate'];?>" readonly>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Program Type:</B></label>
		    <div class="col-lg-3">
		      	<input class="form-control" name="programType" value="<?php echo $data['programType'];?>" readonly>
		    </div>
	    </div>
	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Location</B></label>
		    <div class="col-lg-3">
		        <input class="form-control" name="location" value="<?php echo $data['location'];?>" readonly>
		    </div>
	    </div>
    </div>

	    <div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Resources Used? (Please note presenter's name and contact info and any other department/business used)</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea" name="resourcesUsed" readonly>
			        	<?php echo $data['resourcesUsed'];?>"
			        </textarea>
			    </div>
			</div>
		</div>
	</div>
	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Brief Summary of Program:</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="3" id="textArea" name="summary" readonly>
			        	<?php echo $data['summary']; ?>
			        </textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Residents' Response to the Program:</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <input class="form-control" rows="3" id="textArea" name="response"
			        	value="<?php echo $data['response']; ?>" readonly>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>What was unsuccessful about ths program? What changes would you make? What obstacles did you encounter?</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea" name="changes" readonly>
			        	<?php echo $data['changes']; ?>
			        </textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		<div class="form-group">
			<label for="textArea" class="col-lg-2 control-label"><B>Would You recomend this program?</B></label>
			<div class="col-lg-3">
				<select class="form-control" id="select" name="recommend" readonly>
					<option><?php echo $data['recommend']; ?></option>
				</select>
			</div>
		</div>

		<div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>RA's Initials:</B></label>
	    	<div class="col-lg-3">
		        <input class="form-control" rows="1" id="textArea" name="initials"
		        	value="<?php echo $data['initials']; ?>" readonly>
		    </div>
		    <label for="textArea" class="col-lg-2 control-label"><B>Today's Date:</B></label>
		    <div class="col-lg-3">
		    	<input class="form-control" type="date" name="initialDate" 
		    		value="<?php echo $data['initialDate'];?>" readonly>
		    </div>
		</div>
	</div>
	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Floor/Building Attendance:</B></label>
		    <div class="col-lg-3">
		        <input class="form-control" id="textArea" name="floorAttendance"
		        		value="<?php echo $data['floorAttendance']; ?>" readonly>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Total Attendance:</B></label>
		    <div class="col-lg-3">
		        <input class="form-control" id="textArea" name="totalAttendance"
		        		value="<?php echo $data['totalAttendance']; ?>" readonly>
		      </div>
		</div>

		<div class="form-group col-lg-offset-4">
			<label for="textArea" class="col-lg-2 control-label"><B>Total Cost:</B></label>
			<div class="col-lg-3">
			    <input class="form-control" id="textArea" name="totalCost"
			    		value="<?php echo $data['totalCost']; ?>" readonly>
			</div>
		</div>
	
		<div class="form-group col-lg-offset-4">
			<label for="checkbox" class="col-lg-2 control-label"><B>Progress</B></label>
			<div class="col-lg-3 alert alert-dismissable alert-danger">
				<select class="form-control" id="select" name="progress">
					<option>Approved</option>
					<option>Denied</option>
				</select>
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