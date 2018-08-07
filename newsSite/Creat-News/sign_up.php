

<?php
require_once 'components/db_functions.php';

require_once 'layouts/header.php';
?>


<?php
require_once 'layouts/left-sidebar.php';
?>
<div class="col-md-8 right">

    <div class="container"><form method="post" action="valid/sign_up_validate.php">
        <!-- Form Name -->
        <h2 class="m_top">Registration Page</h2>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Name:</label>
            <div class="col-md-6">
                <input name="name" class="form-control input-md" id="textinput" type="text"
                       placeholder="Name">

            </div>
        </div>

        <!-- l_name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Last Name:</label>
            <div class="col-md-6">
                <input name="l_name" class="form-control input-md" id="passwordinput" type="text"
                       placeholder="Last Name">

            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="E-mail">E-mail:</label>
            <div class="col-md-6">
                <input name="e_mail" class="form-control input-md" id="E-mail" type="text" placeholder="E-mail">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password:</label>
            <div class="col-md-6">
                <input name="password" class="form-control input-md" id="passwordinput" type="password"
                       placeholder="Password">

            </div>
        </div>

        <!-- Confpassword input -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="confpassword">Confirm Password</label>
            <div class="col-md-6">
                <input name="conf_password" class="form-control input-md" id="confpassword" type="password"
                       placeholder="Confirm Password">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <div class="col-md-6">
                <button name="submit" class="btn btn-primary" id="singlebutton" type="submit">Registration</button>
            </div>
        </div>

    </form>
    </div>
</div>

</div>
</div>
<?php  require_once 'layouts/footer.php'; ?>
