<?php
$control=new Controller();
$allNoticeList=$control->allNoticeInfo();

if(isset($_GET['type']) && $_GET['type']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($deleteData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=notice_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Notice List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Notice Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allNoticeList as $anl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $anl[1]; ?></td>
                        <td><a href="?l=sch&p=editNotice&act=edit&cid=<?php echo $anl[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=notice_list&type=delete&tbl=notice&id=<?php echo $anl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>