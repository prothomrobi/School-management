<?php
$control=new Controller();
$allDesignation=$control->allDesignationData();
$allEmployeeType=$control->employeeCategoryList();

if(isset($_POST['btnSave']) && $_POST['employeeName']!="")
{
    if($_FILES['employeeImage']['size']>0) {
        $thumbnailName = "Thumbnail" . "." . time() . "." .$control->getExtension($_FILES['employeeImage']['name']);
        $thumbnailImageUploadPath = "employeeimages/" . $thumbnailName;
        $imagePath="employeeimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['employeeImage']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $employeeInfo=array($_POST['employeeID'],$_POST['employeeName'],$_POST['fatherName'],$_POST['motherName'],date('Y-m-d',strtotime($_POST['employeeDOB'])),$_POST['address'],$_POST['mobileNo'],$_POST['employeeEmail'],$_POST['gender'],$_POST['religion'],$_POST['nationality'],$_POST['employeeType'],$_POST['designationName'],$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveEmployeeInfo=$control->saveEmployeeInformation($employeeInfo);

    if($saveEmployeeInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Employee Personal Information</h3>
            <?php if(isset($sMsg) && $sMsg!=""){ echo $sMsg;} elseif(isset($eMsg) && $eMsg!=""){ echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Employee ID</label>
                <input type="text" name="employeeID">
            </fieldset>
            <fieldset>
                <label>Employee Name</label>
                <input type="text" name="employeeName">
            </fieldset>
            <fieldset>
                <label>Father Name</label>
                <input type="text" name="fatherName">
            </fieldset>
            <fieldset>
                <label>Mother Name</label>
                <input type="text" name="motherName">
            </fieldset>
            <fieldset>
                <label>Date of Birth</label>
                <input type="text" name="employeeDOB" id="dob">
            </fieldset>
            <fieldset>
                <label>Address</label>
                <textarea rows="12" name="address"></textarea>
            </fieldset>
            <fieldset>
                <label>Mobile No</label>
                <input type="text" name="mobileNo">
            </fieldset>
            <fieldset>
                <label>Email</label>
                <input type="text" name="employeeEmail">
            </fieldset>
            <fieldset>
                <label>Gender</label>
                <select name="gender" style="width:35%;">
                    <option>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </fieldset>
            <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
                <label>Religion</label>
                <select name="religion" style="width:35%;">
                    <option>Select</option>
                    <option>Islam</option>
                    <option>Hindu</option>
                    <option>Others</option>
                </select>
            </fieldset>
            <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
                <label>Nationality</label>
                <select name="nationality" style="width:35%;">
                    <option>Bangladesh</option>
                    <option>India</option>
                    <option>USA</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Image</label>
                <input type="file" name="employeeImage">
            </fieldset>
            <div class="clear"></div>
        </div>
        <header><h3 class="tabs_involved">Institute Information</h3></header>
        <div class="module_content">
            <fieldset>
                <label>Employee Type</label>
                <select name="employeeType" style="width: 35%">
                    <option value="">Select</option>
                    <?php foreach($allEmployeeType as $aet): ?>
                    <option value="<?php echo $aet[0]; ?>"><?php echo $aet[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Employee Designation</label>
                <select name="designationName" style="width: 35%;">
                    <option value="">Select</option>
                    <?php
                    foreach($allDesignation as $ad):
                        ?>
                        <option value="<?php echo $ad[0]; ?>"><?php echo $ad[1]; ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Save" name="btnSave" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.1.min.js"></script>
<script>
    $(function() {
        $( "#dob" ).datepicker({
            inline: true,
            showOtherMonths: true
        })
            .datepicker('widget').wrap('<div class="ll-skin-lugo"/>');
    });
</script>