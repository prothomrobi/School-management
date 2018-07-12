<?php
$control=new Controller();
 if(isset($_POST['btnSave']))
 {
     if($_FILES['teacherImage']['size']>0) {
         $teacherImageName = "Chairman_" . "." . time() . "." .$control->getExtension($_FILES['teacherImage']['name']);
         $teacherImageUploadPath = "employeeimages/chairman/" . $teacherImageName;
         move_uploaded_file($_FILES['teacherImage']['tmp_name'], $teacherImageUploadPath);
     }
     else
     {
         $teacherImageUploadPath="";
     }

     $teacherData=array($_POST['teacherName'],$teacherImageUploadPath,$_POST['teacherDetails'],$_SESSION['asbUser'],date('Y-m-d'));
     $saveTeacherImage=$control->saveChairmanMsg($teacherData);

     if($saveTeacherImage)
     {
         $sMsg="<p style='font-weight: bold;color: #008000;'>Save Successfully.</p>";
     }
     else
     {
         $eMsg="<p style='font-weight: bold;color: #F44336;'>Please try again.</p>";
     }
 }
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Chairman Maxim</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Name</label>
                <input type="text" name="teacherName">
            </fieldset>
        
            <fieldset>
                <label>Message</label>
                <textarea name="teacherDetails" cols="22" rows="12"></textarea>
            </fieldset>
            <fieldset>
                <label>Image</label>
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