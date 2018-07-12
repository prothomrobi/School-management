<?php
$control=new Controller();
$allEventsData=$control->allEventsInfo();
?>
<h4> &nbsp; Latest Events</h4>
<div class="textbox">
    <?php
    foreach($allEventsData as $ed):
        ?>
          <h2><?php echo $ed[1]; ?></h2>
          <p><?php echo $ed[2]; ?></p>  <br/><br/>
          <p style=" float: right;">Date:<?php echo $ed[4]; ?></p>  <br/><br/>
    <?php
    endforeach;
    ?>
</div>