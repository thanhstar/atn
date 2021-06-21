<?php 
   session_start();
      include('inc/headerlogin.php');
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="php/registation_check.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">Registation</h1>
      	     <!--  <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?> -->
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">User name</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  <div class="mb-3">
		    <label for="name" 
		           class="form-label">Name</label>
		    <input type="text" 
		           name="name" 
		           class="form-control" 
		           id="name">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <!-- <option selected value="admin">admin</option> -->
		  </select>
		  <span>
	     Have account <a href="login.php">Login Here</a><br /><br />
	   </span>
		 
		  <button type="submit" 
		          class="btn btn-primary">Submit</button>
		</form>
      </div>
</body>
<?php }else{
	header("Location:../register.php");
} ?>