<?php
if($_POST['classData']!="" && $_POST['classSubject']!="")
{
 $control=new Controller();
 $classSelectedData=$control->selectClassName($_POST['classData']);
 $selectCourseData=$control->selectedCourseData($_POST['classSubject']);
 $classStudentsData=$control->findClassStudents($_POST['classData']);
 ?>
<article class="module width_full">
    <header>
       <h2 class="tabs_involved"><?php echo $classSelectedData[1];  ?></h2> 
    </header>
    
    <header>
       <h3 class="tabs_involved"><?php echo $selectCourseData[1];  ?> Student List</h3>
    </header>
<form action="" method="post">
    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Student Name</th>
                    <th>Attendace</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($classStudentsData as $csd): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?><input type="hidden" name="studentID" value="<?php echo $csd[0]; ?>" /></td>
                        <td><?php echo $csd[2]; ?></td>
                        <td><select name="studentAttendance"><option>Yes</option><option>No</option></select></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                  <td colspan="3" align="center"><input type="submit" name="btnSub" value="Submit" /></td>
                </tr>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</form>    
</article>
<?php 
}
else
{
	echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=student_attendance'>";
}
 ?>