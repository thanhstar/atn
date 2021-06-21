 <?php 
 session_start();
require_once("db_conn.php");
include("inc/header.php");

 ?>
 <h3 style="text-align: center;">Congratulations on your payment and you can now download it</h3>

 <?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
  $total=$_POST['total'];
  $date=$_POST['date'];
  $usn=$_POST['name'];
  $bank=$_POST['bank'];
  $sql="INSERT INTO order(bank,order_date,order_total,username) VALUES ('$bank','$date','$total','$usn')";
if(mysqli_query($conn,$sql)){
  echo "Pay sucessful";
}
else{
  echo "Error: ".mysqli_errno($conn);
}
}
 ?>
 <?php
 if ($_SERVER['REQUEST_METHOD']=='POST') {
  $id =$_POST['order_id'];
  if (empty($_SESSION['cart'][$id])) {
    $q=mysqli_query($conn,"SELECT * FROM song WHERE song_id = {$id}");
    $product = mysqli_fetch_assoc($q);
      header("location:pay.php");
  }
 }
 ?>
 <div class="container-fluid">
 <div class="row">
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  <?php 
  if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) :
    ?>
    <div class="products" style="border: 2px solid black">
    <a href="sing_song.php?id=<?php echo $item['song_id']?>" style="text-decoration: none;">
    <div><img src="img/<?php echo $item['song_img']?>" class="img-cart"></div>
    <h2><?php echo $item['song_name'] ?></h2>
        <audio controls controlsList="autodownload">
          <source src="song/<?php echo $item['song_mp3'] ?>" type="audio/mpeg">
          </audio>
         </a>
         <br>
         <h4>Click on icon <i class="fas fa-ellipsis-v"></i> to download</h4>
         </div>
           <?php
  endforeach;
  }
     ?>
  </div>  
    <span>
       Back to Home <a href="index.php">Click Here</a><br /><br />
     </span>

 <?php
 include("inc/footer.php"); 
  ?>