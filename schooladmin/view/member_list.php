<?php
$control=new Controller();
$allMemberList=$control->allMemberInfo();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=member_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Member List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Member Name</th>
                    <th>Member Designation</th>
                    <th>Member Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allMemberList as $aml): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $aml[1]; ?></td>
                        <td><?php echo $aml[2]; ?></td>
                        <td><img src="<?php echo $aml[3]; ?>" width="150px" height="120px"></td>
                        <td><a href="?l=sch&p=editmemberinfo&mid=<?php echo $aml[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=member_list&act=delete&tbl=member&id=<?php echo $aml[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>