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

    <div class="col-md-7">
    <h3>unassgined projects</h3><br>

    <div class="card" style="width: 50rem;">
  <div class="card-body">
    <h5 class="card-title">project title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

    
    </div>
</div>



<?php $this->end(); ?>



