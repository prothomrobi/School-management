        <div class="widget-header">
          <h3>All User</h3> <a href="?l=arh&page=user" style="float:right; padding:12px;"><h5>BACK</h5></a>
        </div>
       <!--  
        <div class="widget-header" style="height:50px;">
         <h5 style="float:right; padding-right:15px;"><a href="?l=arh&page=view_all_user" class="btn btn-sm btn-success">View All</a> &nbsp; <a href="?l=arh&page=add_user" class="btn btn-sm btn-success">Add New</a></h5>
        </div>
        
            /widget-header -->
<div class="widget-content">
<div class="shortcuts">

<div class="control-group">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <label for="normal-field" class="control-label">
                Select a Role:
                </label>
            </div>
        <div class="col-md-9">
            <div class="form-group">
                <select class="optn" style="float:left;">
                    <option>Admin</option>
                    <option>Student</option>
                    <option>Parent</option>
                    <option>Employee</option>
                    <option>Admin</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="control-group">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <label for="normal-field" class="control-label">
                Other Options:
                </label>
            </div>
        <div class="col-md-9">
            <div class="form-group">
                <select class="optn" style="float:left;">
                    <option>Student</option>
                    <option>Parent</option>
                    <option>Employee</option>
                    <option>Admin</option>
                </select>
            </div>
        </div>
    </div>
</div>
</div>
<br />
    
    <div class="row">
        <div class="col-md-12">
<table align="left" cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example">
      <thead>
        <tr>
          <th width="10%"><strong>SL</strong></th>
          <th width="40"><strong>Name</strong></th>
          <th width="35%"><strong>User Name</strong></th>
          <th width="10%"></th>
          </tr>
        </thead>
      <tbody>
        <tr class="gradeX">
          <td align="left">1</td>
          <td align="left">monir</td>
          <td class="center">159</td>
          <td class="center"><button class="btn btn-sm btn-primary"> View Profile </button></td>
          </tr>
        <tr class="gradeC">
          <td align="left">2</td>
          <td align="left">asb</td>
          <td class="center">147</td>
          <td class="center"><button class="btn btn-sm btn-primary"> View Profile </button></td>
          </tr>
        <tr class="gradeC">
          <td align="left">3</td>
          <td align="left">Trident</td>
          <td class="center">123</td>
          <td class="center"><button class="btn btn-sm btn-primary"> View Profile </button></td>
          </tr>
        <tr class="gradeC">
          <td align="left">4</td>
          <td align="left">Trident</td>
          <td class="center">123</td>
          <td class="center"><button class="btn btn-sm btn-primary"> View Profile </button></td>
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