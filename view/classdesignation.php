     <div class="widget-header">
        <h3>Manage Class Designations</h3> <a href="?l=arh&page=examsetting" style="float:right; padding:12px;"><h5>BACK</h5></a>
        </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
	
<!--<table align="center">
<tr>
<td>
Select a Course: </td>
<td>
<select class="optn">
<option>Select a Course</option>
</select></td>
</tr>

</table>-->
<div class="control-group">
      <div class="row">
        <div class="col-md-12">
<div class="col-md-3">
<label for="normal-field" class="control-label">Select a Course:</label>
</div>
<div class="col-md-7">
<div class="form-group">
<select class="optn" style="float:left;">
<option>Select a Course</option>
</select>
</div>
</div>
</div>
</div>
</div>
<br /><br />

      <div class="row">
        <div class="col-md-12">
        
<form method="post" class="form-horizontal">
                <fieldset>
                 
                  
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Name</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="Name" class="form-control" id="normal-field">
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Marks (%)</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="Marks (%)" class="form-control input-transparent" id="transparent-field">
                    </div>
                    </div>
                  </div>
                   
             </fieldset>
              <div class="form-actions">
                  <div>
                    <button class="btn btn-success" type="button">Create</button>
                  </div>
          </div>
          </form>
</div>
</div>
<br />
<br />

      <div class="row">
        <div class="col-md-12">
<table align="left" cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example">
      <thead>
        <tr>
          <th width="90"><strong>Name</strong></th>
          <th width="5%"></th>
          <th width="5%"></th>
          </tr>
        </thead>
      <tbody>
        <tr class="gradeX">
          <td align="left">monir</td>
          <td class="center"><button class="btn btn-sm btn-primary"> Edit </button></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
          </tr>
        <tr class="gradeC">
          <td align="left">asb</td>
          <td class="center"><button class="btn btn-sm btn-primary"> Edit </button></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
      </tr>
        <tr class="gradeC">
          <td align="left">Trident</td>
          <td class="center"><button class="btn btn-sm btn-primary"> Edit </button></td>
          <td class="center"><button data-toggle="button" class="btn btn-sm btn-warning"> Delete </button></td>
      </tr>
        <tr class="gradeC">
          <td align="left">Trident</td>
          <td class="center"><button class="btn btn-sm btn-primary"> Edit </button></td>
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