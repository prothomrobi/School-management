<?php
$control=new Controller();
$allResultList=$control->allResultData();
if(isset($_GET['type']) && $_GET['type']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($deleteData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=all_result_sheet_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Result List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Exam Name</th>
                    <th>Class Name</th>
                    <th>Files</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allResultList as $arl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php $examName=$control->selectedExamData($arl[1]); echo $examName[1]; ?></td>
                        <td><?php $className=$control->selectClassName($arl[2]); echo $className[1]; ?></td>
                        <td><a href="<?php echo $arl[2]; ?>" target="_blank">Upload Doc</a> </td>
                        <td><a href="?l=sch&p=all_result_sheet_list&type=delete&tbl=result_sheet&id=<?php echo $arl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>