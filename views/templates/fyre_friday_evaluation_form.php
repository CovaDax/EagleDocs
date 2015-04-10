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
<form class="form-horizontal" action='../../scripts/fyreEvaluation.php' method="POST">
  <fieldset>
    <legend>
    	<CENTER>
    		Florida Gulf Cost University<BR>
			South Village<BR>
			Office of Housing and Residence Life<BR>
			FYRE (SoVi) Program Evaluation<BR>
			</CENTER>
    </legend>
    <div class="form-group">
	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label"><B>RLTA Name:</B></label>
	      <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="rltaName"></textarea>
		    </div>

	      <label for="textArea" class="col-lg-2 control-label"><B>Date of Event:</B></label>
	      <div class="form-group">
	      <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="date"></textarea>
		    </div>
	    </div>

	    <div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Resources Used? (Please note presenter's name and contact info and any other department/business used)</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea" name="resourcesUsed"></textarea>
			    </div>
			</div>
		</div>
	</div>
	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Brief Summary of Program:</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="3" id="textArea" name="summary"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Residents' Response to the Program:</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label" name="response"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="3" id="textArea"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>What was unsuccessful about ths program? What changes would you make? What obstacles did you encounter?</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label" name="changes"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Please list all staff members who contributed to the program, their assigned task, and whether that task was complete</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label" name="staff"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="4" id="textArea"></textarea>
			    </div>
			</div>
		</div>

	<div class="form-group">
		<div class="form-group">
			<label for="textArea" class="col-lg-2 control-label"><B>Would You recomend this program?</B></label>
			<div class="col-lg-3">
				<select class="form-control" id="select" name="recomend">
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>
		</div>

		<div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>RD's Initials:</B></label>
	    	<div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="initials"></textarea>
		    </div>
		    <label for="textArea" class="col-lg-2 control-label"><B>Today's Date:</B></label>
		    <div class="col-lg-3">
		    	<textarea class="form-control" rows="1"
		    	id="textArea"></textarea>
		    </div>
		</div>
	</div>
	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Total Attendance:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="totalAttendance"></textarea>
		      </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Total Cost:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="totalCost"></textarea>
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