<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Users Profile </h6>
    </div>

    <div class="card-body">

    <?php
    include('conn.php');
    if (isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM users WHERE id ='$id' ";
        $query_run = mysqli_query($conn,$query);
        

        foreach($query_run as $row)
        {
            ?>     
            <from action = "registeradd.php" method = "POST">
            <input type ="text" name = "edit_id" value = "<?php echo $row['id']?>">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" values ="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" name="edit_fullname" values ="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Fullname">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password"  values ="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Roles</label>
                <input type="text" name="edit_roles"  values ="<?php echo $row['role'] ?>" class="form-control" placeholder="Enter Role">
            </div>


            <a href = "register.php" class ="btn btn-danger"> Cancel</a>
            <button type = "submit" name = "updatebtn" class = "btn btn-primary" > Update </button>
            </from>
            <?php

        }
    }
    ?>
        </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>