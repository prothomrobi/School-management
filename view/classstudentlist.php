<?php
$controller=new Controller();
$studentList=$controller->allClassStudentList($_GET['cl']);

$classList=$controller->allClassList();
?>
<!--light box-->
<link href="box_css/lightbox.css" rel="stylesheet" type="text/css"/>
<script src="box_js/lightbox.js" type="text/jscript"></script>
<h4> <?php $classFind=$controller->selectedClassData($_GET['cl']); echo $classFind[1];  ?> Student List</h4>
<div class="textbox">
    <h4>All Class </h4>
    <div class="textbox_6">
        <?php foreach($classList as $cl):
            if($cl[0]==$_GET['cl']):
        ?>
           <label class="class_list"><a href="?l=sh&pages=classstudentlist&cl=<?php echo $cl[0]; ?>"><strong><?php echo $cl[1]; ?></strong></a> </label>
        <?php
           endif;
        ?>
        <label class="class_list"><a href="?l=sh&pages=classstudentlist&cl=<?php echo $cl[0]; ?>"><?php echo $cl[1]; ?></a> </label>
        <?php endforeach; ?>
    </div>
</div>
<div class="popup-gallery">
    <?php
    foreach($studentList as $std):
        $stData="Roll No: ".$std[1]."<br/> Name: ".$std[2]."<br/>"."Class: ".$classFind[1];
        ?>
        <div class="textbox_4">
            <label class="service"><a href="schooladmin/<?php echo $std[14]; ?>" data-lightbox="example-set" data-title="<?php echo $stData; ?>"><img src="schooladmin/<?php echo $std[14]; ?>" width="200px" height="220px"></a></label>
            <label class="label-box"><?php echo $std[2]; ?></label>
            <label class="label-box"><?php $classFind=$controller->selectedClassData($std[3]); echo $classFind[1]; ?></label>
        </div>
        <?php
    endforeach;
    ?>
</div>