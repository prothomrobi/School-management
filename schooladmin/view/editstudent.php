<?php
$control=new Controller();
$classData=$control->allClassList();
$studentInformation=$control->findStudentData($_GET['sid']);

if(isset($_POST['btnEdit']) && $_POST['editStudentID']!="")
{  if(!empty($_FILES['editStudentImage']['name'])){
    if($_FILES['editStudentImage']['size']>0) {
        $thumbnailName = "Thumbnail" . "." . time() . "." .$control->getExtension($_FILES['editStudentImage']['name']);
        $thumbnailImageUploadPath = "studentimages/" . $thumbnailName;
        $imagePath="studentimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['editStudentImage']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $studentInformation=array($studentInformation[0],$_POST['editStudentID'],$_POST['editStudentName'],$_POST['editFatherName'],$_POST['editMotherName'],$_POST['editGuardianName'],$_POST['editClassName'],$_POST['editGender'],$_POST['editNationality'],$_POST['editReligion'],$_POST['editAddress'],$_POST['editMobileNo'],$_POST['dob'],$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $editStudentInformation=$control->editStudentImageInformation($studentInformation);
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
else{
   $studentInformation=array($studentInformation[0],$_POST['editStudentID'],$_POST['editStudentName'],$_POST['editFatherName'],$_POST['editMotherName'],$_POST['editGuardianName'],$_POST['editClassName'],$_POST['editGender'],$_POST['editNationality'],$_POST['editReligion'],$_POST['editAddress'],$_POST['editMobileNo'],$_POST['dob'],$_SESSION['asbUser'],date('Y-m-d'));
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
}
if(isset($_GET['act']) && $_GET['act']=="edit") {
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Edit Student Information</h3>
                <?php if (isset($sMsg) && $sMsg != "") {
                    echo $sMsg;
                } elseif (isset($eMsg) && $eMsg != "") {
                    echo $eMsg;
                } ?>
            </header>
            <div class="module_content">
                <fieldset>
                    <label>Student Name</label>
                    <input type="text" name="editStudentName" value="<?php echo $studentInformation[2]; ?>">
                </fieldset>
                <fieldset>
                    <label>Address</label>
                    <textarea rows="12" name="editAddress"><?php echo $studentInformation[10]; ?></textarea>
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
                    <label>Date of Birth</label>
                    <input type="text" name="dob" id="datetimepicker2" value="<?php echo $studentInformation[13]; ?>">
                </fieldset>
                <fieldset>
                    <label>Mobile No</label>
                    <input type="text" name="editMobileNo" value="<?php echo $studentInformation[11]; ?>">
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
                   <img src="<?php echo $studentInformation[14]; ?>" width="120px" height="80px">
                </fieldset>
                <div class="clear"></div>
            </div>
            <header><h3 class="tabs_involved">Class Information</h3></header>
            <div class="module_content">
                <fieldset>
                    <label>Student ID</label>
                    <input type="text" name="editStudentID" value="<?php echo $studentInformation[1]; ?>">
                </fieldset>
                <fieldset>
                    <label>Select Class</label>
                    <select name="editClassName" style="width: 35%;" required="">
                      <option value = "<?php echo $studentInformation[6]; ?>" >
                       <?php echo $studentInformation[6]; ?>
                    </option> 
                        <?php
                        foreach ($classData as $cd):
                            ?>
                            <option
                                value="<?php echo $cd[0]; ?>" <?php if ($studentInformation[3] == $cd[0]) { ?> selected="selected" <?php } ?> ><?php echo $cd[1]; ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </fieldset>
            </div>
            <footer>
                <div class="submit_link">
                    <input type="submit" value="Update" name="btnEdit" class="alt_btn">
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
            <h3 class="tabs_involved">Student Information</h3>
        </header>
        <div class="module_content">
            <label style="float: right;">
               <?php if($studentInformation[10]!=""){ ?> <img src="<?php echo $studentInformation[10];  ?>" width="180px" height="160px"> <?php } ?>
            </label>
            <fieldset>
                <label>Student Name: <?php echo $studentInformation[2]; ?> </label>
            </fieldset>
            <fieldset>
                <label>Address: <?php echo $studentInformation[7]; ?></label>
            </fieldset>
            <fieldset>
                <label>Mobile No: <?php echo $studentInformation[8]; ?>
            </fieldset>
            <fieldset>
                <label>Email: <?php echo $studentInformation[9]; ?>
            </fieldset>
            <fieldset>
                <label>Gender: <?php echo $studentInformation[4]; ?></label>
            </fieldset>
            <fieldset>
                <label>Religion: <?php echo $studentInformation[6]; ?></label>
            </fieldset>
            <fieldset>
                <label>Nationality: <?php echo $studentInformation[5]; ?>
            </fieldset>
            <div class="clear"></div>
        </div>
        <header><h3 class="tabs_involved">Class Information</h3></header>
        <div class="module_content">
            <fieldset>
                <label>Student ID: <?php echo $studentInformation[1]; ?>
            </fieldset>
            <fieldset>
                <label>Select Class: <?php $className=$control->selectClassName($studentInformation[3]); echo $className[1]; ?> </label>
            </fieldset>
        </div>
    </article>
<?php
}
?>

