<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['jobTitle']!="")
{
    if($_FILES['upFile']['size']>0) {
        $fileName = "Job". "." . time() . "." .$control->getExtension($_FILES['upFile']['name']);
        $fileUploadPath = "files/" . $fileName;
        $filePath="files/" . $fileName;
        $thumbnail = move_uploaded_file($_FILES['upFile']['tmp_name'], $fileUploadPath);
    }
    else
    {
        $filePath="";
    }

    $imageData=array($_POST['jobTitle'],$_POST['jobDescription'],$filePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveJobData=$control->saveVacancyData($imageData);

    if($saveJobData)
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
            <h3 class="tabs_involved">New Job Advertisement</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Job Title</label>
                <input type="text" name="jobTitle">
            </fieldset>
            <fieldset>
                <label>Job Description</label>
                <textarea name="jobDescription" cols="22" rows="6"></textarea>
            </fieldset>
            <fieldset>
                <label>Upload</label>
                <input type="file" name="upFile">
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