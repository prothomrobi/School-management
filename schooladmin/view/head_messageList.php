<?php
$control=new Controller();
$allHeadTeacherMsgList=$control->HeadTeacherMsgList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
   $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
   $deleteInformation=$control->deleteInformation($deleteData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=head_messageList'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Head Master Message List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Head Teacher Name</th>
                    <th>Maxim</th>
                    <th>Teacher Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allHeadTeacherMsgList as $aht): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $aht[1]; ?></td>
                        <td style="width:250px"><?php echo $aht[4]; ?></td>
                        <td><img src="<?php echo $aht[3]; ?>" width="100px" height="120px"></td>
                        <td><a href="?l=sch&p=editHeadMsg&act=edit&hid=<?php echo $aht[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=head_messageList&act=delete&tbl=head_master_msg&id=<?php echo $aht[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>