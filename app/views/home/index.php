<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>



<div class="row container">
    <div class="col-md-5">
    <h3>Add project</h3><br>

    <form action="<?php echo PROOT ?>home/addproject" method="post">
  <div class="form-group">
    <label for="projectname">Project Name</label>
    <input type="text" class="form-control" id="projectname" name="projectname">
  </div>
  
  
  <div class="form-group">
    <label for="description">Project Description</label>
    <textarea class="form-control" id="description" rows="8" name="description"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" <?php if (!Users::currentLoggedInUser()){echo "disabled";
  } elseif (Users::currentLoggedInUser()->type != "Customer") {
    echo "disabled";
  }
  
  
  ?> >Submit</button>

</form>

    </div>

    <div class='col-md-7'>
      <h3>unassgined projects</h3><br>
<?php
$p = new Projects();
$projects = $p->viewUnassginedprojects();
foreach ($projects as $project) {
?>

        <div class='card' style='width: 50rem;'>
          <div class='card-body'>

            <h5 class='card-title'><?php echo $project->project_name;?></h5>
            <p class='card-text'><?php echo $project->project_description;?></p>
  
   </div>
      </div>
        
<?php
}
?>
      
      </div>
</div>



<?php $this->end(); ?>



