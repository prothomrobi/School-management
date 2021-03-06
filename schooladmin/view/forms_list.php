<?php
$control=new Controller();
$allFormsList=$control->allFormsData();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
   $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
   $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=forms_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Forms List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Form Name</th>
                    <th>Files</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allFormsList as $afl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $afl[1]; ?></td>
                        <td><a href="<?php echo $afl[2]; ?>" target="_blank">Uploaded Form</a> </td>
                        <td><a href="?l=sch&p=forms_list&act=delete&tbl=forms&id=<?php echo $afl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>