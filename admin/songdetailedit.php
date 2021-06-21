<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Song </h6>
    </div>

    <div class="card-body">

    <?php
    include('conn.php');
    if (isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM song WHERE song_id ='$id' ";
        $query_run = mysqli_query($conn,$query);

        foreach($query_run as $row)
        {
            ?>     
            <from action = "songdetailcode.php" method = "POST">
            <input type ="text" name = "edit_id" value = "<?php echo $row['song_id']?>">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" values ="<?php echo $row['song_name'] ?>" class="form-control" placeholder="Enter Name song">
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" class="form-control-file border" values = "<?php echo $row['song_img'] ?>" name="img">
            </div>

            <div class="form-group">
                <label>Mp3</label>
                <input type="file" class="form-control-file border" values= "<?php echo $row['song_mp3'] ?>" name="mp3">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="edit_price"  values ="<?php echo $row['song_price'] ?>" class="form-control" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label>Liyric </label>
                <input type="text" name="edit_lyric"  values ="<?php echo $row['song_lyric'] ?>" class="form-control" placeholder="Enter lyric ">
            </div>
            <a href = "songdetail.php" class ="btn btn-danger"> Cancel</a>
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