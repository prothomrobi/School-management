        <div class="widget-header">
          <h3>Send SMS to Employees</h3><a href="?l=arh&page=sms_setting" style="float:right; padding:12px;"><h5>BACK</h5></a>
        </div>
            <!-- /widget-header -->
<div class="widget-content">
<div class="shortcuts">
<div class="row">
<div class="col-md-12" align="left">

<form method="post" >
     <fieldset>
     
		<div class="control-group">
             <div class="col-md-3">
             <label for="normal-field" class="control-label">Select A Department:</label>
             </div>
             <div class="col-md-7">
                <div class="form-group">
                <select type="text" class="form-control input-transparent" id="transparent-field">
                <option>Select A Department</option>
                </select>
                </div>
             </div>
        </div>	
        
		</fieldset>



<br />

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" >

		<thead>
        <tr>
        <td>Select: <button class="btn btn-success" type="submit">All</button>
        <button class="btn btn-danger" type="submit">None</button> </td>
        </tr>
        </thead>
      <tbody>
        <tr class="gradeX">
          <td width="70%"><input type="checkbox" /> Application</td>
          </tr>
          <tr class="gradeC">
            <td><input type="checkbox" /> Students Admission</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Exam</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Event</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Attendance</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Send SMS to Students</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Send SMS to batch</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Send SMS to employee</td>
          </tr>
        <tr class="gradeC">
          <td><input type="checkbox" /> Send SMS to employee</td>
          </tr>
       
    </tbody>
</table>

<div class="control-group">
             <div class="col-md-2">
             <br />
             </div>
             <div class="col-md-8">
                <div class="form-group">
                <textarea  class="form-control input-transparent" id="transparent-field"></textarea>
                </div>
             </div>
        </div>	

<div class="form-actions" align="center">
    <div>
    	<button class="btn btn-success" type="submit">Send SMS</button>
    </div>
</div>

</form>  

</div>


  </div>
  <!-- /shortcuts --> 
</div>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/smooth-sliding-menu.js"></script>


<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable( {
					"sPaginationType": "full_numbers"
				} );
			} );
		</script>