<?php
$control=new Controller();
$employeeAttendanceTime=$control->employeeAttendanceTime();
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Employee Attendance List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Attend Time</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($employeeAttendanceTime as $eat): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $eat[1]; ?></td>
                        <td><?php $employeeName=$control->findByEmployeeID($eat[1]); ?></td>
                        <td><?php echo date('d-m-Y',strtotime($eat[2])); ?></td>
                        <td><a href="?l=sch&p=attendance_list&act=delete&tbl=employee_attendance&id=<?php echo $eat[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>