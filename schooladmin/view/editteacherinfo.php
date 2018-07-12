<?php
$control=new Controller();
$allDesignation=$control->allDesignationData();
$allEmployeeType=$control->employeeCategoryList();
$employeeInfoData=$control->specificEmployeeInformation($_GET['tid']);

 if (isset($_POST['btnEdit']) && $_POST['editEmployeeName'] != "") {
      if(!empty($_FILES['editEmployeeImage']['name'])){
        if ($_FILES['editEmployeeImage']['size'] > 0) {
            $thumbnailName = "Thumbnail" . "." . time() . "." . $control->getExtension($_FILES['editEmployeeImage']['name']);
            $thumbnailImageUploadPath = "employeeimages/" . $thumbnailName;
            $imagePath = "employeeimages/" . $thumbnailName;
            $thumbnail = move_uploaded_file($_FILES['editEmployeeImage']['tmp_name'], $thumbnailImageUploadPath);
        } else {
            $imagePath = "";
        }

        $employeeInfo = array($employeeInfoData[0],$_POST['editEmployeeID'], $_POST['editEmployeeName'], $_POST['editFatherName'], $_POST['editMotherName'], date('Y-m-d', strtotime($_POST['editEmployeeDOB'])), $_POST['editAddress'], $_POST['editMobileNo'], $_POST['editEmployeeEmail'], $_POST['editGender'], $_POST['editReligion'], $_POST['editNationality'], $_POST['editEmployeeType'], $_POST['editDesignationName'], $imagePath, $_SESSION['asbUser'], date('Y-m-d'));
        $editEmployeeInfo = $control->editEmployeeImageInformation($employeeInfo);

        if ($editEmployeeInfo) {
            $sMsg = "<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
            
        } else {
            $eMsg = "<p style='color: red; font-weight: bold'>Please try again.</p>";
        }
    }
    else{
       $employeeInfo = array($employeeInfoData[0],$_POST['editEmployeeID'], $_POST['editEmployeeName'], $_POST['editFatherName'], $_POST['editMotherName'], date('Y-m-d', strtotime($_POST['editEmployeeDOB'])), $_POST['editAddress'], $_POST['editMobileNo'], $_POST['editEmployeeEmail'], $_POST['editGender'], $_POST['editReligion'], $_POST['editNationality'], $_POST['editEmployeeType'], $_POST['editDesignationName'],$_SESSION['asbUser'], date('Y-m-d'));
        $editEmployeeInfo = $control->editEmployeeInformation($employeeInfo);

        if ($editEmployeeInfo) {
            $sMsg = "<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        } else {
            $eMsg = "<p style='color: red; font-weight: bold'>Please try again.</p>";
        } 
    }
    }
if(isset($_GET['act']) && $_GET['act']=="edit") {
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Employee Personal Information</h3>
                <?php if (isset($sMsg) && $sMsg != "") {
                    echo $sMsg;
                } elseif (isset($eMsg) && $eMsg != "") {
                    echo $eMsg;
                } ?>
            </header>
            <div class="module_content">
                <fieldset>
                    <label>Employee ID</label>
                    <input type="text" name="editEmployeeID" value="<?php echo $employeeInfoData[1]; ?>">
                </fieldset>
                <fieldset>
                    <label>Employee Name</label>
                    <input type="text" name="editEmployeeName" value="<?php echo $employeeInfoData[2]; ?>">
                </fieldset>
                <fieldset>
                    <label>Father Name</label>
                    <input type="text" name="editFatherName" value="<?php echo $employeeInfoData[3]; ?>">
                </fieldset>
                <fieldset>
                    <label>Mother Name</label>
                    <input type="text" name="editMotherName" value="<?php echo $employeeInfoData[4]; ?>">
                </fieldset>
                <fieldset>
                    <label>Date of Birth</label>
                    <input type="text" name="editEmployeeDOB" id="dob" value="<?php echo date('d-m-Y',strtotime($employeeInfoData[5])); ?>">
                </fieldset>
                <fieldset>
                    <label>Address</label>
                    <textarea rows="12" name="editAddress"><?php echo $employeeInfoData[6]; ?></textarea>
                </fieldset>
                <fieldset>
                    <label>Mobile No</label>
                    <input type="text" name="editMobileNo" value="<?php echo $employeeInfoData[7]; ?>">
                </fieldset>
                <fieldset>
                    <label>Email</label>
                    <input type="text" name="editEmployeeEmail" value="<?php echo $employeeInfoData[8]; ?>">
                </fieldset>
                <fieldset>
                    <label>Gender</label>
                    <select name="editGender" style="width:35%;">
                        <option>Select</option>
                        <option <?php if($employeeInfoData[9]=="Male"){?> selected="selected" <?php } ?>>Male</option>
                        <option <?php if($employeeInfoData[9]=="Female"){?> selected="selected" <?php } ?>>Female</option>
                    </select>
                </fieldset>
                <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
                    <label>Religion</label>
                    <select name="editReligion" style="width:35%;">
                        <option>Select</option>
                        <option <?php if($employeeInfoData[10]=="Islam"){?> selected="selected" <?php } ?>>Islam</option>
                        <option <?php if($employeeInfoData[10]=="Hindu"){?> selected="selected" <?php } ?>>Hindu</option>
                        <option <?php if($employeeInfoData[10]=="Others"){?> selected="selected" <?php } ?>>Others</option>
                    </select>
                </fieldset>
                <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
                    <label>Nationality</label>
                    <select name="editNationality" style="width:35%;">
                        <option <?php if($employeeInfoData[11]=="Bangladesh"){?> selected="selected" <?php } ?>>Bangladesh</option>
                        <option <?php if($employeeInfoData[11]=="India"){?> selected="selected" <?php } ?>>India</option>
                        <option <?php if($employeeInfoData[11]=="USA"){?> selected="selected" <?php } ?>>USA</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label>Image</label>
                    <input type="file" name="editEmployeeImage">
                    <img src="<?php echo $employeeInfoData[14]; ?>" width="120px" height="80px">
                </fieldset>
                <div class="clear"></div>
            </div>
            <header><h3 class="tabs_involved">Institute Information</h3></header>
            <div class="module_content">
                <fieldset>
                    <label>Employee Type</label>
                    <select name="editEmployeeType" style="width: 35%">
                        <option value="">Select</option>
                        <?php foreach ($allEmployeeType as $aet): ?>
                            <option <?php if($employeeInfoData[12]==$aet[0]){?> selected="selected" <?php } ?> value="<?php echo $aet[0]; ?>"><?php echo $aet[1]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset>
                    <label>Employee Designation</label>
                    <select name="editDesignationName" style="width: 35%;">
                        <option value="">Select</option>
                        <?php
                        foreach ($allDesignation as $ad):
                            ?>
                            <option <?php if($employeeInfoData[13]==$ad[0]){?> selected="selected" <?php } ?> value="<?php echo $ad[0]; ?>"><?php echo $ad[1]; ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </fieldset>
            </div>
            <footer>
                <div class="submit_link">
                    <input type="submit" value="Edit" name="btnEdit" class="alt_btn">
                    <input type="reset" value="Reset">
                </div>
            </footer>
        </article>
    </form>
<?php
}
elseif(isset($_GET['act']) && $_GET['act']=="view")
{
?>
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Employee Information</h3>
        </header>
        <div class="module_content">
            <label style="float: right;">
                <?php if($employeeInfoData[14]!=""){ ?> <img src="<?php echo $employeeInfoData[14];  ?>" width="180px" height="160px"> <?php } ?>
            </label>
            <fieldset>
                <label>Teacher Name: <?php echo $employeeInfoData[2]; ?> </label>
            </fieldset>
            <fieldset>
                <label>Address: <?php echo $employeeInfoData[6]; ?></label>
            </fieldset>
            <fieldset>
                <label>Mobile No: <?php echo $employeeInfoData[7]; ?>
            </fieldset>
            <fieldset>
                <label>Email: <?php echo $employeeInfoData[8]; ?>
            </fieldset>
            <fieldset>
                <label>Gender: <?php echo $employeeInfoData[9]; ?></label>
            </fieldset>
            <fieldset>
                <label>Religion: <?php echo $employeeInfoData[10]; ?></label>
            </fieldset>
            <fieldset>
                <label>Nationality: <?php echo $employeeInfoData[11]; ?>
            </fieldset>
            <div class="clear"></div>
        </div>
        <header><h3 class="tabs_involved">Institute Information</h3></header>
        <div class="module_content">
            <fieldset>
                <label>Employee ID: <?php echo $employeeInfoData[1]; ?>
            </fieldset>
            <fieldset>
                <label>Employee Type: <?php $employeeType=$control->selectedEmployeeType($employeeInfoData[12]); echo $employeeType[1]; ?>
            </fieldset>
            <fieldset>
                <label>Employee Designation: <?php $employeeDesignationFind=$control->selectEmployeeDesignation($employeeInfoData[13]); echo $employeeDesignationFind[1]; ?> </label>
            </fieldset>
        </div>
    </article>
<?php
}
?>
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