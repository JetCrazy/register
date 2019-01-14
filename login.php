<?php include("include/header.php"); ?>

  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-4 offset-sm-4">
        <div class="card">
          <div class="card-header text-sm-center">
            Login Here
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
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </fieldset>
            <fieldset class="form-group">
              <label for="Password">Password</label>
              <input type="text" class="form-control" id="password" name="password" placeholder="Password">
            </fieldset>
            <input class="btn btn-primary float-sm-right" type="submit" value="Login" name="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("include/footer.php"); ?>