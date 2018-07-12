<?php
$control=new Controller();
$allClassData=$control->allClassList();
$allCourseData=$control->allCourseData();

if(isset($_POST['btnSave']) && $_POST['className']!="")
{
  $assignCourse=array($_POST['className'],$_POST['courseName'],$_SESSION['asbUser'],date('Y-m-d'));
  $saveAssignCourseData=$control->saveAssignCourse($assignCourse);

    if($saveAssignCourseData)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold;'>Please try again.</p>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Assign Course To Class</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Class Name</label>
                <select name="className" style="width: 35%;">
                   <option>Select</option>
                  <?php foreach($allClassData as $cd): ?>
                     <option value="<?php echo $cd[0]; ?>"><?php echo $cd[1]; ?></option>
                  <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Course Name</label>
                <div class="course-show">
                <?php foreach($allCourseData as $cou): ?>
                
                  <input type="checkbox" name="courseName[]" value="<?php echo $cou[0]; ?>"><?php echo $cou[1]; ?><br/>
               
                <?php endforeach; ?>
                 </div>  
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