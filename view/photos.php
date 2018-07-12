<?php
$controller=new Controller();
$allGalleryPhoto=$controller->allGalleryPhoto();
?>

<h4> &nbsp; Photos</h4>
<div class="textbox">
  <?php
    foreach($allGalleryPhoto as $photo):
  ?>
        <a class="example-image-link" href="schooladmin/<?php if($photo[2]!=""){ echo $photo[2]; } else { echo "images/stock_people.png";} ?>" data-lightbox="example-set" data-title="Gallery Image"> <img src="schooladmin/<?php if($photo[2]!=""){ echo $photo[2]; } else { echo "images/stock_people.png";} ?>" style="width: 200px; height: 220px; margin: 7px;"></a>
  <?php
   endforeach;
  ?>
</div>
<script src="box_js/jquery-1.11.0.min.js"></script>
<script src="box_js/lightbox.js"></script>