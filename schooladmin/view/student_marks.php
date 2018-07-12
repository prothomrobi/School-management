<?php 
$control=new Controller();
$allClassData=$control->allClassList();
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Student Marks Entry</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Class Name</label>
                <select name="className" style="width: 35%;" id="classID" onChange="classStudent()">
                   <option>Select</option>
                  <?php foreach($allClassData as $cd): ?>
                     <option value="<?php echo $cd[0]; ?>"><?php echo $cd[1]; ?></option>
                  <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Student Name</label>
                <select name="studentName" id="stdID" style="width:35%">
                  <option value="">Select</option>
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
<script>
 function classStudent()
 {
	  var classID = document.getElementById('classID').value;
        var subC = document.getElementById('stdID');
        var xmlHttp;
        try
        {
            // Firefox, Opera 8.0+, Safari
            xmlHttp=new XMLHttpRequest();
        }
        catch (e)
        {
            // Internet Explorer
            try
            {
                xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                try
                {
                    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e)
                {
                    alert("Your browser does not support AJAX!");
                    return false;
                }
            }
        }

        subC.innerHTML="";
        xmlHttp.onreadystatechange=function()
        {
            if(xmlHttp.readyState==4)
            {
                subC.innerHTML=xmlHttp.responseText;
            }
        }
        xmlHttp.open("GET","view/class-student-find.php?id="+classID,true);
        xmlHttp.send(null);
 }
</script>