<?php
$control=new Controller();
$findClassData=$control->allClassList();
$finCourseData=$control->allCourseData();
?>
<form action="?l=sch&p=attendance" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Student Attendance</h3>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Class Select</label>
                <select name="classData" id="classID" style="width: 35%;" onchange="findClassCourse()">
                    <option>Select</option>
                    <?php foreach($findClassData as $fcd): ?>
                      <option value="<?php echo $fcd[0]; ?>"><?php echo $fcd[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Course Select</label>
                <select name="classSubject" id="courseID" style="width: 35%;">
                    <option>Select</option>
                    <?php foreach($finCourseData as $fcd): ?>
                        <option value="<?php echo $fcd[0]; ?>"><?php echo $fcd[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Search" name="btnSearch" class="alt_btn">
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