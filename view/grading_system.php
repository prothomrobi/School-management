        <div class="widget-header">
          <h3>Edit Course</h3> <a href="?l=arh&page=batch_view" style="float:right; padding:12px;"><h5>BACK</h5></a>
        </div>



<div class="widget-content">
<div class="shortcuts">
   <div class="row">
        <div class="col-md-12" align="left">
         
<form method="post" >
     <fieldset>
     
		<div class="control-group">
             <div class="col-md-3">
              <label for="normal-field" class="control-label">Batch</label>
             </div>
             <div class="col-md-7">
                <div class="form-group">
                <select class="form-control input-transparent" id="transparent-field">
                <option>Select A Batch</option>
                </select>
                </div>
             </div>
        </div>		
		</fieldset>


</form> 
<a href="?l=arh&page=add_grade" class="btn btn-success">Add Batch</a><br />
<br />
 <div class="row">
        <div class="col-md-12">
<table align="left" cellpadding="0" cellspacing="0" border="0" class="table table-striped" >
      <thead>
        <tr>
          <th width="25"><strong>Name</strong></th>
          <th width="30%"><strong>Min Score</strong></th>
          <th width="35%"><strong>Description</strong></th>
          <th width="5%"><strong></strong></th>
          <th width="5%">&nbsp;</th>
          </tr>
        </thead>
      <tbody>
        <tr class="gradeX">
          <td align="left">News title</td>
          <td class="left">Admin</td>
          <td class="left">100</td>
          <td class="center"><a href="?l=arh&page=edit_course" class="btn btn-sm btn-primary"> Edit </a></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
        </tr>
        <tr class="gradeX">
          <td align="left">News title</td>
          <td class="left">Admin</td>
          <td class="left">100</td>
          <td class="center"><a href="?l=arh&page=edit_course" class="btn btn-sm btn-primary"> Edit </a></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
        </tr>
        
        <tr class="gradeX">
          <td align="left">News title</td>
          <td class="left">Admin</td>
          <td class="left">100</td>
          <td class="center"><a href="?l=arh&page=edit_course" class="btn btn-sm btn-primary"> Edit </a></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
        </tr>
        
        <tr class="gradeX">
          <td align="left">News title</td>
          <td class="left">Admin</td>
          <td class="left">100</td>
          <td class="center"><a href="?l=arh&page=edit_course" class="btn btn-sm btn-primary"> Edit </a></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
        </tr>

    </tbody>
</table>

</div>
</div></div>

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