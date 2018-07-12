<?php
$control=new Controller();
$classStudent=$control->findClassStudents($_POST['className']);
// $allStudentList=$control->allArchiveStudentList();
$allClass=$control->allClassList();

?>
<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script type="text/javascript">
    function classStudentList(sClass)
    {
        $.ajax({
            type:"post",
            url:"view/studentclassdata.php",
            data:"cl="+sClass,
            success:function(data){
                $("#tab1").html(data);
            }

        });

    }
</script>
<article class="module width_full">
    <header><h3 class="tabs_involved">Archive Student List</h3> <label style="text-align: right;">Class Wise: <select name="promoTo" id="classData" onchange="classStudentList(this.value)"><option>Select</option><?php foreach($allClass as $cl): ?> <option value="<?php echo $cl[0]; ?>"><?php echo $cl[1]; ?></option> <?php endforeach; ?></select></label></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Class Name</th>
                    <th>PIC</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <!-- <tfoot>
                <tr>
                    <th>Sl</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Class Name</th>
                    <th>PIC</th>
                    <th>Actions</th>
                </tr>
                </tfoot> -->
                <tbody>
                <?php foreach($classStudent as $asl): ?>

                <tr align="center">
                    <td><?php static $i=1; echo $i++; ?></td>
                    <td><?php echo $asl[1]; ?></td>
                    <td><?php echo $asl[2]; ?></td>
                    <td><?php $className=$control->selectClassName($asl[6]); echo $className[1]; ?></td>
                    <td><img src="<?php echo $asl[14]; ?>" width="80px" height="60px"></td>
                    <td><a href="?l=sch&p=editstudent&act=view&sid=<?php echo $asl[1]; ?>"><input type="image" src="images/icn_view_users.png" title="View"></a> <a href="?l=sch&p=studentpromotion&act=edit&sid=<?php echo $asl[1]; ?>"><input type="image" src="images/icn_jump_back.png" title="Promotion"></a></td>
                </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>