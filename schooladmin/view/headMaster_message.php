<?php
$control=new Controller();
 if(isset($_POST['btnSave']) && $_POST['teacherName']!="")
 {
    if($_FILES['teacherImage']['size']>0) {
        $thumbnailName = "Head" . "." . time() . "." .$control->getExtension($_FILES['teacherImage']['name']);
        $thumbnailImageUploadPath = "employeeimages/head_master/" . $thumbnailName;
        $imagePath="employeeimages/head_master/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['teacherImage']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $imageData=array($_POST['teacherName'],$_POST['education'],$imagePath,$_POST['message'],$_SESSION['asbUser'],date('Y-m-d'));
    $saveHeadData=$control->saveHeadMasterData($imageData);
     
    if($saveHeadData)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p style='color: #F44336; font-weight: bold'>Please try again.</p>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Head Master Maxim</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Name</label>
                <input type="text" name="teacherName">
            </fieldset>
            <fieldset>
                <label>Education Qualification</label>
                <input type="text" name="education">
            </fieldset>
            <fieldset>
                <label>Message</label>
                <textarea name="message" cols="22" rows="12"></textarea>
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