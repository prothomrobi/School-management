     <?php
       $controller=new controller();
       if(isset($_POST['btnNews']) && $_POST['newsTitle']!="")
       {
         $newsData=array($_POST['newsTitle'],$_POST['details'],date('Y-m-d'));
         $saveNews=$controller->saveNews($newsData);

           if($saveNews)
           {
               $msg="<p>Save News Successfully.</p>";
           }
       }
     ?>

        <div class="widget-header">
          <h3>Add News</h3> <a href="?l=arh&page=news" style="float:right; padding:12px;"><h5>BACK</h5></a>
            <?php if(isset($msg) && $msg!="") {echo $msg;} ?>
        </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
	
           <div class="row">
        <div class="col-md-12">
        
<form method="post" class="form-horizontal">
                <fieldset>
                 
                  
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Title</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" placeholder="News Title" name="newsTitle" class="form-control" id="normal-field">
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="normal-field" class="control-label">Content</label>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                      <textarea id="text" rows="10" name="details" placeholder="News Details" class="form-control"></textarea>
                    </div>
                    </div>
                  </div>
             </fieldset>
              <div class="form-actions">
                  <div>
                    <button class="btn btn-primary" name="btnNews" type="submit">Publish News</button>
                  </div>
          </div>
          </form>
</div>
</div>

  </div>
  <!-- /shortcuts --> 
</div>
