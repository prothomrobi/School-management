<?php
$control=new Controller();
$allEmployeeCategoryList=$control->employeeCategoryList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $dData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($dData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=employee_category_list'>";
    }
}

?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Course List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Course Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allEmployeeCategoryList as $aecl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $aecl[1]; ?></td>
                        <td><a href="?l=sch&p=editemployeecategory&eid=<?php echo $aecl[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=employee_category_list&act=delete&tbl=employee_category&id=<?php echo $aecl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>
