<?php
$control=new Controller();
$allClassData=$control->allClassList();
$teacherList=$control->allTeacherFind();
$allCourseData=$control->allCourseData();

if(isset($_POST['btnSave']) && $_POST['teacherName']!="")
{
	$teacherCourse=array($_POST['className'],$_POST['classSubject'],$_POST['teacherName'],$_SESSION['asbUser'],date('Y-m-d'));
	$saveTeacherCourseData=$control->saveTeacherCourseData($teacherCourse);
	
	if($saveTeacherCourseData)
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
            <h3 class="tabs_involved">Assign Course To Teacher</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
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
                <label>Course Name</label>
                <select name="classSubject" id="courseID" style="width: 35%;">
                    <option>Select</option>
                <?php foreach($allCourseData as $cou): ?>
                    <option><?php echo $cou[1]; ?></option>
                <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Teacher Name</label>
                <select name="teacherName" style="width: 35%;">
                    <option>Select</option>
                    <?php foreach($teacherList as $tl): ?>
                        <option value="<?php echo $tl[0]; ?>"><?php echo $tl[1]; ?></option>
                    <?php endforeach; ?>
                </select>
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
<script>
function findClassCourse()
    {
        var classID = document.getElementById('classID').value;
        var subC = document.getElementById('courseID');
        var xmlHttp;
        try
        {
            // Firefox, Opera 8.0+, Safari
            xmlHttp=new XMLHttpRequest();
        }
        catch (e)
        {
            // Internet Explorer
            try
            {
                xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                try
                {
                    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e)
                {
                    alert("Your browser does not support AJAX!");
                    return false;
                }
            }
        }

        subC.innerHTML="";
        xmlHttp.onreadystatechange=function()
        {
            if(xmlHttp.readyState==4)
            {
                subC.innerHTML=xmlHttp.responseText;
            }
        }
        xmlHttp.open("GET","view/class-course-find.php?id="+classID,true);
        xmlHttp.send(null);
    }
</script>