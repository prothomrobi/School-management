<?php
$control=new Controller();
$allEmployeeInformation=$control->allEmployeeInformation();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $dData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($dData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=employee_list'>";
    }
}
?>
<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<article class="module width_full">
    <header><h3 class="tabs_involved">Employee List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Employee Name</th>
                    <th>Employee Type</th>
                    <th>Employee Designation</th>
                    <th>Employee Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allEmployeeInformation as $ael): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $ael[1]; ?></td>
                        <td><?php $employeeType=$control->selectedEmployeeType($ael[12]); echo $employeeType[1]; ?></td>
                        <td><?php $employeeDesignation=$control->selectEmployeeDesignation($ael[13]); echo $employeeDesignation[1]; ?></td>
                        <td><img src="<?php echo $ael[14]; ?>" width="60px" height="50px"></td>
                        <td><a href="?l=sch&p=editteacherinfo&act=edit&tid=<?php echo $ael[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=employee_list&act=delete&tbl=employee&id=<?php echo $ael[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a><a href="?l=sch&p=editteacherinfo&act=view&tid=<?php echo $ael[0]; ?>"><input type="image" src="images/icn_view_users.png" title="View"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>