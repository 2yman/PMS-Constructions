<?php  $this->start('head');  ?>
<?php  $this->end();  ?>

<?php $this->start('body');  ?>
<div class="login col-md-6 container">
<form action="<?php echo PROOT ?>register/login" method="post">
<div class="custom-has-error"><?php echo $this->displayErrors ?></div>
<h3 class="text-center">Log In</h3>
  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me" value="on" name="check">
    <label class="form-check-label" for="remember_me">remember me</label>
  </div>
  <button type="submit" class="btn btn-primary" value="login">Login</button>

    <div class="text-right">
    
    <a href="<?php echo PROOT ?>register/register" class="text-primary">Register</a>
    
    </div>

</form>



</div>


</form>
</div>
<?php  $this->end();  ?>
