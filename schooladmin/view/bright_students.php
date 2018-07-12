<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['studentName']!="")
{
    if($_FILES['studentImage']['size']>0) {
        $studentImageName = "student_" . "." . time() . "." .$control->getExtension($_FILES['studentImage']['name']);
        $studentImageUploadPath = "studentimages/Bright_students/" . $studentImageName;
        move_uploaded_file($_FILES['studentImage']['tmp_name'], $studentImageUploadPath);
    }
    else
    {
        $studentImageUploadPath="";
    }

    $studentData=array($_POST['studentName'],addslashes($_POST['studentDetails']),$studentImageUploadPath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveStudentImage=$control->saveBrightStudentInformation($studentData);

    if($saveStudentImage)
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
            <h3 class="tabs_involved">Bright Student Information</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Student Name</label>
                <input type="text" name="studentName">
            </fieldset>
            <fieldset>
                <label>Description</label>
                <textarea name="studentDetails" cols="22" rows="12"></textarea>
            </fieldset>
            <fieldset>
                <label>Student Image</label>
                <input type="file" name="studentImage">
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