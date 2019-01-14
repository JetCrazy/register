<?php include("include/header.php"); 
  if (isset($_POST['submit'])) {
    $user->register();
  }
?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="card">
                <div class="card-header text-sm-center">
                    Register Here
                </div>
                <div class="card-body">
                    <?php
          if (isset($_SESSION['error'])) {
           echo '<div class="alert alert danger" role="alert">';
           echo $_SESSION['error'];
            echo '</div>';
          }
          ?>
                    <form method="post">
                        <fieldset class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo @$_POST['name'] ?>"
                                required>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo @$_POST['email'] ?>"
                                required>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                        </fieldset>
                        <input class="btn btn-primary float-sm-right" type="submit" value="Register" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>