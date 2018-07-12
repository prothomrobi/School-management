<?php
$control=new Controller();
$allEducationCalendarList=$control->allEducationCalendar();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=education_calendar_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">All Education Calendar List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Upload File</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allEducationCalendarList as $aec): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><a href="<?php echo $aec[3]; ?>" target="_blank">Uploaded Files</a></td>
                        <td><a href="?l=sch&p=editclass&cid=<?php echo $aec[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=education_calendar_list&act=delete&tbl=education_calendar&id=<?php echo $aec[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>