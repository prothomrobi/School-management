<?php
$control=new Controller();
 if(isset($_POST['btnSave']) && $_POST['teacherName']!="")
 {
     if($_FILES['teacherImage']['size']>0) {
         $teacherImageName = "teacher_" . "." . time() . "." .$control->getExtension($_FILES['teacherImage']['name']);
         $teacherImageUploadPath = "employeeimages/Chairman&Head/" . $teacherImageName;
         move_uploaded_file($_FILES['teacherImage']['tmp_name'], $teacherImageUploadPath);
     }
     else
     {
         $teacherImageUploadPath="";
     }

     $teacherData=array($_POST['teacherName'],$_POST['period'],$_POST['teacherDetails'],$_POST['designaton'],$teacherImageUploadPath,$_SESSION['asbUser'],date('Y-m-d'));
     $saveTeacherImage=$control->saveHeadTeacherInformation($teacherData);

     if($saveTeacherImage)
     {
         $sMsg="<p style='font-weight: bold;color: #008000;'>Save Successfully.</p>";
     }
     else
     {
         $eMsg="<p style='font-weight: bold;color: #008000;'>Please try again.</p>";
     }
 }
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Head Teacher Information</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Teacher Name</label>
                <input type="text" name="teacherName">
            </fieldset>
            <fieldset>
                <label>Designation</label>
                <select name="designaton">
                    <option value="">------Enter Designation------</option>
                    <option value="Chairman">Chairman</option>
                    <option value="Head Master">Head Master</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Time Period</label>
                <input type="text" name="period" placeholder="dd/mm/yyyy - dd/mm/yyyy">
            </fieldset>
            <fieldset>
                <label>Description</label>
                <textarea name="teacherDetails" cols="22" rows="12"></textarea>
            </fieldset>
            <fieldset>
                <label>Teacher Image</label>
                <input type="file" name="teacherImage">
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