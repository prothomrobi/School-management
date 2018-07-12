<?php
$control=new Controller();
$allContentList=$control->allContentList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=content_list'>";
    }
}

?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Content List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Content Name</th>
                    <th>Content Files</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allContentList as $acl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $acl[1]; ?></td>
                        <td><a href="<?php echo $acl[2]; ?>">Download</a> </td>
                        <td><a href="?l=sch&p=content_list&act=delete&tbl=content&id=<?php echo $acl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>