<?php
$control=new Controller();
$allEventsList=$control->allEventsInfo();
if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=event_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Events List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Events Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allEventsList as $ael): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $ael[1]; ?></td>
                        <td><a href="?l=sch&p=editEvent&act=edit&cid=<?php echo $ael[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=event_list&act=delete&tbl=events&id=<?php echo $ael[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>