<?php
$control=new Controller();
$allClassData=$control->allClassList();
$allExamData=$control->allExamInformation();

if(isset($_POST['btnSave']) && $_POST['examName']!="")
{
    if($_FILES['resultFile']['size']>0) {
        $resultSheetName = "Result" . "." . time() . "." .$control->getExtension($_FILES['resultFile']['name']);
        $resultSheetUploadPath = "files/" . $resultSheetName;
        $resultPath="files/" . $resultSheetName;
        $result = move_uploaded_file($_FILES['resultFile']['tmp_name'], $resultSheetUploadPath);
    }
    else
    {
        $resultPath="";
    }

    $resultFile=array($_POST['examName'],$_POST['className'],$resultPath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveResultSheetData=$control->saveResultSheetData($resultFile);

    if($saveResultSheetData)
    {
        $sMsg="<p style='color:green; font-weight:bold;'>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p style='color:red; font-weight:bold;'>Please try again.</p>";
    }
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Result Sheet Upload</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Exam Name</label>
                <select name="examName" style="width: 35%;">
                    <option>Select</option>
                    <?php foreach($allExamData as $ed): ?>
                        <option value="<?php echo $ed[0]; ?>"><?php echo $ed[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Class Name</label>
                <select name="className" id="classID" style="width: 35%;" onchange="findClassCourse()">
                    <option>Select</option>
                    <?php foreach($allClassData as $cd): ?>
                        <option value="<?php echo $cd[0]; ?>"><?php echo $cd[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Result File</label>
                <input type="file" name="resultFile">
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