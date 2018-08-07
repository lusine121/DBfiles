<?php
include_once "components/db_functions.php";

?>

<form action="RegisterValidation.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="email" class="col-md-3 control-label">Email</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>" required />
        </div>
</div> 
<div class="form-group">
    <label for="firstname" class="col-md-3 control-label">First Name</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo isset($_POST['firstname'])?$_POST['firstname']:''?>" required />
        </div>
</div>
<div class="form-group">
    <label for="lastname" class="col-md-3 control-label">Last Name</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo isset($_POST['lastname'])?$_POST['lastname']:''?>" required />
        </div>
</div>
<div class="form-group">
    <label for="login" class="col-md-3 control-label">Login</label>
        <div class="col-md-9">
            <input type="login" class="form-control" name="login" placeholder="Login" value="<?php echo isset($_POST['login'])?$_POST['login']:''?>" required />
        </div>
</div>
<div class="form-group">
    <label for="password" class="col-md-3 control-label">Password</label>
        <div class="col-md-9">
            <input type="password" class="form-control" name="passwd" placeholder="Password" value="<?php echo isset($_POST['password'])?$_POST['password']:''?>" required />
        </div>
</div>
<div class="form-group">
<!-- Button -->                                        
    <div class="col-md-offset-3 col-md-9">
        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>Register</button>  
    </div>
</div>                          
</form>
</div>
