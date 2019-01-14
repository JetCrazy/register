<?php include("include/header.php"); ?>

  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-4 offset-sm-4">
        <div class="card">
          <div class="card-header text-sm-center">
            Activate your account
          </div>
          <div class="card-body">
            <form>
            <fieldset class="form-group">
              <label for="active">Code</label>
              <input type="text" class="form-control" id="password" name="password" placeholder="Enter Activation Code">
            </fieldset>
            <input class="btn btn-primary float-sm-right" type="button" value="Login" name="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("include/footer.php"); ?>