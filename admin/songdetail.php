<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Song</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="songdetailcode.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Song Name </label>
                <input type="text" name="songname" class="form-control" placeholder="Enter Name Song">
            </div>
            <div class="form-group">
                <label>Song Images</label>
                <input type="file" class="form-control-file border" name="img">
            </div>
            <div class="form-group">
                <label>Song Mp3</label>
                <input type="file" class="form-control-file border" name="mp3">
            </div>
            <div class="form-group">
                <label>Song Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label>Song Lyric</label>
                <input type="text" name="lyric" class="form-control" placeholder="Enter Lyric">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Song Detail
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Song
            </button>
    </h6>
  </div>

  <div class="card-body">
  <div>

  <?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !='')
  {
    echo'<h2 class="bg-info"> '.$_SESSION['success'].'</2>';
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
    echo'<h2 class="bg-info"> '.$_SESSION['status'].'</2>';
    unset($_SESSION['status']);
  }
  ?>
</div>
    <div class="table-responsive">
    <?php
    include('conn.php');
    $query = "SELECT * FROM song ";
    $query_run = mysqli_query($conn,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th width= 15%> Name </th>
            <th>Images </th>
            <th>Mp3</th>
            <th width=15%>Lyric</th>
            <th>Price</th> 
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

        <?php

        if(mysqli_num_rows($query_run) >0)
        {
          while($row = mysqli_fetch_assoc($query_run) )
          {
            ?>
            <tr>
               <td> <?php echo $row['song_id'];?> </td>
               <td> <?php echo $row['song_name'];?></td>
               <td> <img src="../img/<?php echo $row["song_img"]; ?>" style= "max-width: 200px;" ></td>
               <td>
               <audio id="audio_1" style="width: 250px"controls controlsList="download" ><source src="../song/<?php echo $row['song_mp3']?>" type="audio/mp3" >
               </audio>
               </td>
               <td> <?php echo $row['song_lyric'];?></td>
               <td> <?php echo $row['song_price'];?></td>
               
               <td>
                   <form action="songdetailedit.php" method="post">
                     <input type="hidden" name="edit_id" value="<?php echo $row['song_id'];?>">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                   </form>
                </td>
            <td>
                <form action="songdetailcode.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['song_id'];?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
          }
        }
        else
        {
          echo "no Record Found";
        }
        ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>