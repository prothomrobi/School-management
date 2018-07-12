<?php
$control=new controller();

if(isset($_POST['btnSave']) && $_POST['admissionID']!="")
{
    if($_FILES['studentPIC']['size']>0) {
        $thumbnailName = "Thumbnail" . "." . time() . "." .$control->getExtension($_FILES['studentPIC']['name']);
        $thumbnailImageUploadPath = "../studentimages/" . $thumbnailName;
        $imagePath="studentimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['studentPIC']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $thumbnailImageUploadPath="";
    }

  $studentData=array($_POST['admissionID'],date('Y-m-d',strtotime($_POST['admissionDate'])),$_POST['studentName'],$_POST['courseName'],date('Y-m-d',strtotime($_POST['dateofBirth'])),$_POST['gender'],$_POST['bloodGroup'],$_POST['birthPlace'],$_POST['nation'],$_POST['motherTounge'],$_POST['category'],$_POST['religion'],$_POST['address'],$_POST['country'],$_POST['phone'],$_POST['mobileNo'],$_POST['email'],$_POST['smsEnable'],$thumbnailImageUploadPath,date('Y-m-d'));
  $saveStudentData=$control->saveStudentAdmissionData($studentData);

    if($saveStudentData)
    {
        $sMsg="<p>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p>Please try again.</p>";
    }
}
?>

        <div class="widget-header">
          <h3>Admission</h3> <a href="?l=arh&page=home" style="float:right; padding:12px;"><h5>BACK</h5></a>
        </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
<h4>Fields Marked with * must be filled</h4>
<?php
  if(isset($eMsg) && $eMsg!="")
  {
      echo $eMsg;
  }
?>
<br /><br />
                  <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-12">
                <fieldset>
                <div class="control-group">
                 <div class="col-md-3">
                  <label for="normal-field" class="control-label" style="float:right;">Admission ID *</label>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" placeholder="Admission Number" name="admissionID" class="form-control" id="normal-field">
                    </div>
                    </div>
                  <div class="col-md-1">
                    <label for="normal-field" class="control-label">Date *</label>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <input style="float: left;" type="date" placeholder="Admission Date" name="admissionDate" class="form-control input-transparent" id="transparent-field">
                    </div>
                </div>
            </div>
 </fieldset>
 </div></div>
 <br />

      <div class="row">
        <div class="col-md-12">
<h4>Personal Details</h4><br />
</div></div>
      <div class="row">
        <div class="col-md-12">
                <fieldset>
                  <div class="control-group">
                  <div class="col-md-3">
                  <label for="normal-field" class="control-label">Student Name *</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="Student Name" name="studentName" class="form-control" id="normal-field">
                    </div>
                    </div>
                  </div>
                   <div class="control-group">
                     <div class="col-md-3">
                      <label for="normal-field" class="control-label">Course Name</label>
                     </div>
                       <div class="col-md-7">
                           <div class="form-group">
                               <input type="text" placeholder="Course Name" name="courseName" class="form-control" id="normal-field">
                           </div>
                       </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Date of Birth *</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="date" name="dateofBirth" class="form-control input-transparent" id="transparent-field">
                    </div>
                    </div>
                  </div>
                   <div class="control-group">
                  <div class="col-md-3">
      <label for="normal-field" class="control-label">Gender</label>
                    </div>
                    
                    <div class="col-md-7">
                    <div class="form-group">
                     <select class="optn" name="gender" style="float:left;">
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                    </div>
                    </div>
                  </div>
                   <div class="control-group">
                  <div class="col-md-3">
      <label for="normal-field" class="control-label">Blood Group</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                     <select class="optn" name="bloodGroup" style="float:left;">
                    <option>A(+ve)</option>
                    <option>A(-ve)</option>
                    <option>B(+ve)</option>
                    <option>B(-ve)</option>
                    <option>AB(+ve)</option>
                    <option>AB(-ve)</option>
                    <option>O(+ve)</option>
                    <option>O(-ve)</option>
                    </select>
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Birth Place</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="Birth Place" name="birthPlace" class="form-control input-transparent" id="transparent-field">
                    </div>
                    </div>
                  </div> 
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Nationality</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                     <select class="optn" name="nation" style="float:left;">
<option>Bangladeshi</option>
</select>
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Mother Tongue</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="Mother Tongue" name="motherTounge" class="form-control input-transparent" id="transparent-field">
                    </div>
                    </div>
                  </div> 
                   
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Category</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                     <select class="optn" name="category" style="float:left;">
                       <option>Full Time</option>
                       <option>Part Time</option>
                      </select>
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Religion</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="Religion" name="religion" class="form-control input-transparent" id="transparent-field">
                    </div>
                    </div>
                  </div>

 
<div class="control-group">
 <div class="col-md-11">

<h4>Contact Details</h4><br />
</div></div>

            <div class="control-group">
                  <div class="col-md-3">
                  <label for="normal-field" class="control-label">Address</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <textarea class="form-control" name="address" id="normal-field" cols="15" rows="5"></textarea>
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Country</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                     <select name="country" class="optn" style="float:left;">
                    <option><br />
                    Bangladesh</option>
                    </select>
                    </div>
                    </div>
                  </div> 
                  <div class="control-group">
                  <div class="col-md-3">
                  <label for="normal-field" class="control-label">Phone</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" name="phone" placeholder="Phone" class="form-control" id="normal-field">
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                  <label for="normal-field" class="control-label">Mobile</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" name="mobileNo" placeholder="Mobile" class="form-control" id="normal-field">
                    </div>
                    </div>
                  </div>   
                   <div class="control-group">
                  <div class="col-md-3">
                  <label for="normal-field" class="control-label">Email</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" name="email" placeholder="Email" class="form-control" id="normal-field">
                    </div>
                    </div>
                  </div>  
                   <div class="control-group">
                  <div class="col-md-3">
                    <label for="hint-field" class="control-label">Enable SMS Feature</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="checkbox" name="smsEnable" value="1" style="float:left;" >
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="hint-field" class="control-label">Upload Photo *</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="file" name="studentPIC" style="float:left;" >
                    </div>
                    </div>
                  </div>         
                  
             </fieldset>
              <div class="form-actions">
                  <div>
                    <button class="btn btn-primary" name="btnSave" type="submit">Save</button>
                  </div>
          </div>

</div>
</div>
                  </form>
     </div>

  </div>
  <!-- /shortcuts --> 

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