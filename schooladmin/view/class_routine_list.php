<?php
$control=new Controller();
$allClassRoutineList=$control->allClassRoutineList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $dData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($dData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=class_routine_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Class Routine List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Routine Name</th>
                    <th>Upload File</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allClassRoutineList as $acr): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $acr[1]; ?></td>
                        <td><a href="<?php echo $acr[3]; ?>" target="_blank">Uploaded Files</a></td>
                        <td><a href="?l=sch&p=editclass&cid=<?php echo $acr[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=class_routine_list&act=delete&tbl=class_routine&id=<?php echo $acr[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>
