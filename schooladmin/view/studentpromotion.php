<?php
$control=new Controller();
$classData=$control->allClassList();
$studentInformation=$control->findStudentData($_GET['sid']);
if(isset($_POST['btnEdit']) && $_POST['editStudentID']!="")
{
    if($_FILES['editStudentImage']['size']>0) {
        $thumbnailName = "Thumbnail" . "." . time() . "." .$control->getExtension($_FILES['editStudentImage']['name']);
        $thumbnailImageUploadPath = "studentimages/" . $thumbnailName;
        $imagePath="studentimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['editStudentImage']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath=$studentInformation[14];
    }

    $studentInformation=array($studentInformation[0],$_POST['editStudentID'],$_POST['editStudentName'],$_POST['editFatherName'],$_POST['editMotherName'],$_POST['editGuardianName'],$_POST['editClassName'],$_POST['editGender'],$_POST['editNationality'],$_POST['editReligion'],$_POST['editAddress'],$_POST['editMobileNo'],$_POST['editStudentEmail'],date('Y-m-d',strtotime($_POST['editDOB'])),$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $editStudentInformation=$control->editStudentInformation($studentInformation);
    if($editStudentInformation)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=student_list'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Student Information</h3>
            <?php if(isset($sMsg) && $sMsg!=""){ echo $sMsg;} elseif(isset($eMsg) && $eMsg!=""){ echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <label style="float: right;">
                <?php if($studentInformation[14]!=""){ ?> <img src="<?php echo $studentInformation[14];  ?>" width="180px" height="160px"> <?php } ?>
            </label>
            <fieldset>
                <label>Student Name</label>
                <input type="text" name="editStudentName" value="<?php echo $studentInformation[2]; ?>">
            </fieldset>
            <fieldset>
                <label>Father Name</label>
                <input type="text" name="editFatherName" value="<?php echo $studentInformation[3]; ?>">
            </fieldset>
            <fieldset>
                <label>Mother Name</label>
                <input type="text" name="editMotherName" value="<?php echo $studentInformation[4]; ?>">
            </fieldset>
            <fieldset>
                <label>Guardian Name</label>
                <input type="text" name="editGuardianName" value="<?php echo $studentInformation[5]; ?>">
            </fieldset>
            <fieldset>
                <label>Address</label>
                <textarea rows="12" name="editAddress"><?php echo $studentInformation[10]; ?></textarea>
            </fieldset>
            <fieldset>
                <label>Mobile No</label>
                <input type="text" name="editMobileNo" value="<?php echo $studentInformation[11]; ?>">
            </fieldset>
            <fieldset>
                <label>Email</label>
                <input type="text" name="editStudentEmail" value="<?php echo $studentInformation[12]; ?>">
            </fieldset>
            <fieldset>
                <label>Date of Birth</label>
                <input type="text" name="editDOB" id="datetimepicker2" value="<?php echo $studentInformation[13]; ?>">
            </fieldset>
            <fieldset>
                <label>Gender</label>
                <select name="editGender" style="width:35%;">
                    <option>Select</option>
                    <option <?php if ($studentInformation[7] == "Male") { ?> selected="selected" <?php } ?>>Male
                    </option>
                    <option <?php if ($studentInformation[7] == "Female") { ?> selected="selected" <?php } ?>>
                        Female
                    </option>
                </select>
            </fieldset>
            <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
                <label>Religion</label>
                <select name="editReligion" style="width:35%;">
                    <option>Select</option>
                    <option <?php if ($studentInformation[9] == "Islam") { ?> selected="selected" <?php }?>>Islam
                    </option>
                    <option <?php if ($studentInformation[9] == "Hindu") { ?> selected="selected" <?php } ?>>Hindu
                    </option>
                    <option <?php if ($studentInformation[9] == "Others") { ?> selected="selected" <?php } ?>>
                        Others
                    </option>
                </select>
            </fieldset>
            <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
                <label>Nationality</label>
                <select name="editNationality" style="width:35%;">
                    <option <?php if ($studentInformation[8] == "Bangladesh") { ?> selected="selected" <?php } ?>>
                        Bangladesh
                    </option>
                    <option <?php if ($studentInformation[8] == "India") { ?> selected="selected" <?php } ?>>India
                    </option>
                    <option <?php if ($studentInformation[8] == "USA") { ?> selected="selected" <?php } ?>>USA
                    </option>
                </select>
            </fieldset>
            <fieldset>
                <label>Image</label>
                <input type="file" name="editStudentImage">
            </fieldset>
            <div class="clear"></div>
        </div>
        <header><h3 class="tabs_involved">Class Information</h3></header>
        <div class="module_content">
            <fieldset>
                <label>Roll No</label>
                <input type="text" name="editStudentID" value="<?php echo $studentInformation[1]; ?>">
            </fieldset>
            <fieldset>
                <label>Promotion Class</label>
                <select name="editClassName" style="width: 35%;">
                    <option value="">Select</option>
                    <?php
                    foreach ($classData as $cd):
                        ?>
                        <option
                                value="<?php echo $cd[0]; ?>" <?php if ($studentInformation[6] == $cd[0]) { ?> selected="selected" <?php } ?> ><?php echo $cd[1]; ?></option>
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