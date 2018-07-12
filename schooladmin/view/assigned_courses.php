<?php
$control=new Controller();
$assignedCourses=$control->assignedCourseList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $dData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($dData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=assigned_courses'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Assigned Courses List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Course Name</th>
                    <th>Class Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($assignedCourses as $ac): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php $courseName=$control->selectedCourseData($ac[2]); echo $courseName[1]; ?></td>
                        <td><?php $className=$control->selectClassName($ac[1]); echo $className[1]; ?></td>
                        <td><a href="?l=sch&p=editassignedcourse&eid=<?php echo $ac[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=assigned_courses&act=delete&tbl=class_course&id=<?php echo $ac[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>