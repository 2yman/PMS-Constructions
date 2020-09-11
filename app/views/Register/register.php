
<?php $this->start('body');  ?>

<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Registeration</div>
                        <div class="card-body">
                        <div class="custom-has-error"><?php echo $this->displayErrors ?></div>
                            <form name="my-form" onsubmit="return validform()" action="" method="post">
                                <div class="form-group row">
                                    <label for="fname" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="fname" class="form-control" name="fname" value="<?php echo $this->post['fname']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="lname" class="form-control" name="lname" value="<?php echo $this->post['lname']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $this->post['email']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $this->post['username']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $this->post['password']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="confirm" class="col-md-4 col-form-label text-md-right">confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirm" class="form-control" name="confirm" value="<?php echo $this->post['confirm']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="type" name="type">                                     
                                           <option <?php if($this->post['type'] == 'Customer' ) {echo 'selected';} ?>        value="Customer">Customer</option>
                                           <option <?php if($this->post['type'] == 'Project manager' ) {echo 'selected';} ?> value="Project manager">Project manager</option>
                                           <option <?php if($this->post['type'] == 'Team Leader' ) {echo 'selected';} ?>     value="Team Leader">Team Leader</option>
                                           <option <?php if($this->post['type'] == 'JE' ) {echo 'selected';} ?>              value="JE">JE</option>
                                        </select>
                                        </div>
                                </div>

                                

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" value="Register">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>



<?php  $this->end();  ?>
