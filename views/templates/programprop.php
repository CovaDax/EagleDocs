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
<form class="form-horizontal">
  <fieldset>
    <legend>
    	<CENTER>
    		Florida Gulf Cost University<BR>
			South Village<BR>
			Office of Housing and Residence Life<BR>
			Everglades Hall Program Proposal<BR>
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
		        <textarea class="form-control" rows="1" id="textArea" name="title"></textarea>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Program Time:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="time"></textarea>
		      </div>
		    </div>
	    </div>

	    <div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label"><B>Program Day/Date:</B></label>
		    <div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="date"></textarea>
		    </div>

		    <label for="textArea" class="col-lg-2 control-label"><B>Program Type:</B></label>
		    <div class="col-lg-3">
		      	<select class="form-control" id="select" name="type">
		          <option>FYRE Partner Program</option>
		          <option>Social</option>
		          <option>Educational</option>
		          <option>Community Builder</option>
	        	</select>
		    </div>
	    </div>
    </div>

	    <div class="form-group">
		    <div class="form-group">
		    	<B><CENTER>Detailed Description of Program (including names of other RAs particupating</CENTER></B>
		    	<label for="textArea" class="col-lg-2 control-label"></label>
		    	<div class="col-lg-8">
			        <textarea class="form-control" rows="10" id="textArea" name="description"></textarea>
			    </div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="form-group">
			<label for="textArea" class="col-lg-2 control-label"><B>Outside Resrouce Used:</B></label>
			<div class="col-lg-3">
				<select class="form-control" id="select" name="outsideResources">
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>

			<label for="textArea" class="col-lg-2 control-label"><B>If so, Who?:</B></label>
			<div class="col-lg-3">
				<select class="form-control" id="select" name="resourceName">
					<option>Campus Recreation</option>
					<option>CAPS</option>
					<option>Career Center</option>
					<option>Center for Academic Achievement</option>
					<option>Faculty (Specify in Description)</option>
					<option>Prevention and Wellness</option>
					<option>Staff(Specify in description)</option>
					<option>Student Involvement</option>
					<option>University Police</option>
				</select>
			</div>
		</div>

		<div class="form-group">
		    <label for="textArea" class="col-lg-2 control-label">Anticipated Attendence:</label>
	    	<div class="col-lg-3">
		        <textarea class="form-control" rows="1" id="textArea" name="anticipatedAttendence"></textarea>
		    </div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-10 col-lg-offset-1">
			<TABLE class="table table-striped table-hover" style="width100%">
				<THEAD>
					<TR>
						<TH>Items</TH>
						<TH>Quantity</TH>
						<TH>Indivitual Cost</TH>
						<TH>Total Cost</TH>
					</TR>
				</THEAD>
				<tbody>
					<?php
					for($i=0; $i < 4; $i++){
					?>
					<TR>
						<TD><textarea class="form-control" rows="1" id="textArea" name="items$i"></textarea></TD>
						<TD><textarea class="form-control" rows="1" id="textArea" name="quantity$i"></textarea></TD>
						<TD><textarea class="form-control" rows="1" id="textArea" name="individualCost$i"></textarea></TD>
						<TD><textarea class="form-control" rows="1" id="textArea" name="totalCost$i"></textarea></TD>
					</TR>
					<?php
					}
					?>
					<TR>
						<TD></TD>
						<TD></TD>
						<TD>Total Cost</TD>
						<TD><textarea class="form-control" rows="1" id="textArea" name="finalTotalCost"></textarea></TD>
					</TR>
				</tbody>
			</TABLE>
		</div>
	</div>

    <div class="form-group">
	    <div class="form-group" style="float:left">
		    <div class="col-lg-5 col-lg-offset-1">
		    	<label for="textArea" class="control-label">Purpose of Purchase:</label>
				<textarea class="form-control" rows="5" id="textArea" name="purposePurchase"></textarea>
		    </div>
		    <div class="col-lg-5 col-lg-offset-1">
		    	<label for="textArea" class="control-label">Vendors Used:</label>
				<textarea class="form-control" rows="5" id="textArea" name="vendors"></textarea>
		    </div>
	    </div>

	    <div class="form-group">
		    <div class="col-lg-5 col-lg-offset-1">
		    	<label for="textArea" class="control-label">Purpose of Purchase:</label>
		    	<textarea class="form-control" rows="5" id="textArea" name="purpose"></textarea>
		    </div>
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