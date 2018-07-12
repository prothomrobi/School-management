<?php
$control=new Controller();
$allBannerList=$control->allBannerData();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=banner_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Banner List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Image Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allBannerList as $ail): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $ail[1]; ?></td>
                        <td><img src="<?php echo $ail[2] ?>" width="80px" height="60px"></td>
                        <td><a href="?l=sch&p=banner_list&act=delete&tbl=slider&id=<?php echo $ail[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>