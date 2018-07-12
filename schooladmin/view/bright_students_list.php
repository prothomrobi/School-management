<?php
$control=new Controller();
$allBrightStudentList=$control->allBrightStudentList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($deleteData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=head_teacher_list'>";
    }
}

?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Bright Student List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Student Name</th>
                    <th>Student Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allBrightStudentList as $abs): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $abs[1]; ?></td>
                        <td><img src="<?php echo $abs[3]; ?>" width="100px" height="120px"></td>
                        <td><a href="?l=sch&p=bright_students_list&act=delete&tbl=bright_student&id=<?php echo $abs[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>