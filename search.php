<?php  
session_start();//lưu lại 1 phiên làm việc của 1 địa chỉ
include('db_conn.php');
include('inc/header.php');
include('inc/navbar.php');
include('inc/scripts.php');

$search = "";
if( !empty($_GET['Search'])){
  $search = $_GET['Search'];
}
?>
 <h3 class="title">Search Results for: <?= $search ?></h3>
<div class="container" style="margin-top: 20px">
	 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/listsong.css">
<div class="row">
    <?php
    if( !empty($search)) {
      $rs = mysqli_query( $conn ,"SELECT * FROM song WHERE song_name LIKE '%{$search}%'");
      while($row = mysqli_fetch_assoc($rs)){
    ?>
    <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                    <a href=sing-song.php?id=<?php echo $row['song_id'] ?>>
                        <img class="pic-1" src="img/<?php echo $row["song_img"]; ?>" style= "max-width: 360px;height: 380px;" alt = "Nature">
                        <img class="pic-2" src="img/<?php echo $row["song_img"]; ?>" style= "max-width: 360px;height: 380px;">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li> 
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="sing-song.php?id=<?php echo $row['song_id'] ?>"  class="select-options"><i class="fa fa-arrow-right" ></i> Listening</a>
                     </div>
                <div class="product-content">
                    <h3 class="title"><a href="#"><?php echo $row["song_name"]; ?></a></h3>
                    <div class="price">Price: $ <?php echo $row["song_price"]; ?></div>
                </div>
            </div>
        </div>
         <?php
     }
    }
    ?>
  </div>
  </div>
  <?php 
  include('inc/footer.php');
   ?>