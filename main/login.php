<?php
include("includes/header.php");
?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Register Details Here</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </nav>

<div class="container-fluid">
  <div class="col-md-6 m-auto py-3">
    <div class="card-header bg-dark text-center text-light">
      <span><h3>Login Form</h3></span> 


      <div style="text-align: center;" class="text-danger">
      <?php
      echo $_GET['reason'];
      if(isset($_SESSION['status'])){
        echo $_SESSION['status'];
        unset($_SESSION['status']);
      }
      ?>
      </div>
           
    </div>
    <div class="card-body">
      <form method="POST" action="auth/action.php" enctype="multipart/form-data">
        <div class="form-group">
          <label>E-Mail</label>
          <input type="email" name="email" placeholder="e.g markwachira@gmail.com" class="form-control">
          
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          
        </div>        

        <button type="submit" class="btn btn-primary btn-block" name="loginBtn">Login</button>
        <div style="text-align: center;">
          <span><small><a href="register.php">Don't have an account...Register Here</a></small></span>
          
        </div>        
      </form>
    </div>
    
  </div>
  
</div>


<?php
include("includes/scripts.php");
include("includes/footer.php");
?>