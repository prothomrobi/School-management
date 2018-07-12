<?php
$control=new Controller();
$classStudent=$control->findClassStudents($_POST['className']);
$allClass=$control->allClassList();

if(isset($_POST['btnPromo']) && $_POST['promoTo']!="")
{
   $savePromotionData=$control->studentPromotion(array($_POST['promote'],$_POST['promoTo']));
    if($savePromotionData)
    {
        $msg="<p style='color: #008000; font-weight: bold;'>Promote Successfully.</p>";
    }
    else
    {
        $msg="<p style='color: red; font-weight: bold;'>Please try again.</p>";
    }
}
?>
<script>
    function checkAll(ele) {
        var checkboxes = document.getElementsByTagName('input');
        if (ele.checked) {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = true;
                }
            }
        } else {
            for (var i = 0; i < checkboxes.length; i++) {
                console.log(i)
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = false;
                }
            }
        }
    }
</script>
<article class="module width_full">
  <form method="post" autocomplete="off" action="" accept-charset="utf-8" enctype="multipart/form-data">
    <header><h3 class="tabs_involved">Student List</h3> <label style="text-align: right;">Promoted To: <select name="promoTo"><option>Select</option><?php foreach($allClass as $cl): ?> <option value="<?php echo $cl[0]; ?>"><?php echo $cl[1]; ?></option> <?php endforeach; ?></select><input type="submit" name="btnPromo" value="Submit"></label></header>
     <?php if($msg!="") { echo $msg;} ?>
    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th><input type="checkbox" id="selectAll" onchange="checkAll(this)"></th>
                    <th>Sl</th>
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Class Name</th>
                    <th>PIC</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($classStudent as $asl): ?>
                <tr align="center">
                    <td><input type="checkbox" name="promote[]" value="<?php echo $asl[0]; ?>"></td>
                    <td><?php static $i=1; echo $i++; ?></td>
                    <td><?php echo $asl[1]; ?></td>
                    <td><?php echo $asl[2]; ?></td>
                    <td><?php $className=$control->selectClassName($asl[6]); echo $className[1]; ?></td>
                    <td><img src="<?php echo $asl[14]; ?>" width="80px" height="60px"></td>
                </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
  </form>
</article>