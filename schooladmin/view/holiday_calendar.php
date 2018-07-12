<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['routineName']!="")
{
    if($_FILES['routineFile']['size']>0)
    {
        $fileName = "Holiday_Calendar" . "." . time() . "." .$control->getExtension($_FILES['routineFile']['name']);
        $fileUploadPath = "files/" . $fileName;
        $filePath="files/" . $fileName;
        $path = move_uploaded_file($_FILES['routineFile']['tmp_name'], $fileUploadPath);
    }
    else
    {
        $filePath="";
    }
    $routineData=array($_POST['routineName'],$_POST['routineDetails'],$filePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveHolidayCalendarData=$control->saveHolidayCalendarData($routineData);

    if($saveHolidayCalendarData)
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
            <h3 class="tabs_involved">New Holiday Calendar</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Name</label>
                <input type="text" name="routineName">
            </fieldset>
            <fieldset>
                <label>Details</label>
                <textarea cols="18" rows="4" name="routineDetails"></textarea>
            </fieldset>
            <fieldset>
                <label>Upload Calendar</label>
                <input type="file" name="routineFile">
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