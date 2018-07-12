<?php
$controller=new Controller();
// $studentList=$controller->allClassStudent($_GET['cls']);

$classList=$controller->allClassList();

$totalStudent=$controller->totalStudent();

   $banglaDate = $classList;

   $replace_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
   $search_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0"); 
// convert all bangle char to English char 
    $en_number = str_replace($search_array, $replace_array, $banglaDate); 


  // $allClassWiseStudent=$controller->allClassWiseStudent();
  ?>

<h4> &nbsp; ছাত্র-ছাত্রীর সংখ্যা (শ্রেণীভিত্তিক)</h4>
<div class="textbox_5">
    <div class="pic-show"><img src="img/history.jpg"></div>
    
    <div class="textbox_3">

<table id="t01">
  <tr>
    <th>শ্রেণি	</th>
    <th>ছাত্র	</th>
    <th>ছাত্রী</th>
    <th>মোট</th>		
    
  </tr>
  <tr>

               <?php
                  foreach($classList as $cl):
                   
                $male = $controller->maleStudent($cl[0]);     
                  // foreach($studentList as $sl): 


                    ?>

                  
                  <tr>
                          <td><?php echo $cl[1]; ?></td>
                           <td><?php echo $male[0][1]; ?></td>
                           <td><?php echo $male[0][2]; ?></td>
                           <td><?php echo $male[0][0]; ?></td> 
                  </tr>
                  <?php 
                  endforeach;?>
    	
  </tr>
    <th>Total	</th>
    <td><?php echo number_format($totalStudent['male']); ?></td>	
    <td><?php echo number_format($totalStudent['female']); ?></td>
    <td><?php echo number_format($totalStudent[0]); ?></td>	
   </tr>
   




</table>

    </div>
    
</div>