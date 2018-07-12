<?php
$control=new Controller();
$classData=$control->allClassList();
if(isset($_POST['btnSave']) && $_POST['studentID']!="")
{
    if($_FILES['studentImage']['size']>0) {
        $thumbnailName = "Thumbnail" . "." . time() . "." .$control->getExtension($_FILES['studentImage']['name']);
        $thumbnailImageUploadPath = "studentimages/" . $thumbnailName;
        $imagePath="studentimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['studentImage']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $studentInformation=array($_POST['studentID'],$_POST['studentName'],$_POST['fatherName'],$_POST['motherName'],$_POST['guardianName'],$_POST['className'],$_POST['gender'],$_POST['nationality'],$_POST['religion'],$_POST['address'],$_POST['mobileNo'],$_POST['studentEmail'],date('Y-m-d',strtotime($_POST['dob'])),$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveStudentInformation=$control->saveStudentInformation($studentInformation);
    if($saveStudentInformation)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}

?>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<article class="module width_full">
    <header>
        <h3 class="tabs_involved">Archieve Student Information</h3>
        <?php if(isset($sMsg) && $sMsg!=""){ echo $sMsg;} elseif(isset($eMsg) && $eMsg!=""){ echo $eMsg;} ?>
    </header>
    <div class="module_content">
        
        
    <div class="module_content">
        <fieldset>
            <label>Student ID</label>
            <input type="text" name="studentID">
        </fieldset>
        <fieldset>
            <label>Select Class</label>
            <select name="className" style="width: 35%;">
                <option value="">Select</option>
                <?php
                 foreach($classData as $cd):
                ?>
                  <option value="<?php echo $cd[0]; ?>"><?php echo $cd[1]; ?></option>
                <?php
                 endforeach;
                ?>
            </select>
        </fieldset>
        <fieldset>
            <label>Passing Year</label>
            <select name=pass_year="">
               <option></option> 
               <option>2017</option>
               <option>2018</option>
               <option>2019</option>
               <option>2020</option>
               <option>2021</option>
               <option>2022</option>
                
                 
            </select>
        </fieldset>

    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Save" name="btnSave" class="alt_btn">
            <input type="reset" value="Reset">
        </div>
    </footer>
</article>
</form>
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
    $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
    $.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#datetimepicker2').datetimepicker({
    yearOffset:0,
    lang:'ch',
    timepicker:false,
    format:'d/m/Y',
    formatDate:'Y/m/d',
    minDate:'-1970/01/02', // yesterday is minimum date
    maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})


</script>