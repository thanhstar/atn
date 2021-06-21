<?php  
session_start();//lưu lại 1 phiên làm việc của 1 địa chỉ
include('db_conn.php');
include('inc/header.php');
include('inc/navbar.php');
include('inc/scripts.php');
?>
<link rel="stylesheet" type="text/css" href="css.style.css">
<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM song WHERE song_id = {$id}";
	$rs = mysqli_query($conn,$sql);
	while ($row= mysqli_fetch_assoc($rs))
	{
	?>	
	<div class="container">
	<br>
	 <hr>
         <div class="card">
         	<div class="row">
         		<aside class="col-sm-4 border-right">
         			<article class="gallery-wrap"> 
         				<div class="img-big-wrap">
         					<div>
         						<a href="#">
         							<img src="img/<?php echo $row["song_img"]; ?>"
         							 style= "max-width: 380px;height: 460px;" >
         						</a>
         					</div>
         				</div><!-- slider-nav.// -->
         			</article>
         			<!-- gallery-wrap .end// -->
         		</aside>
         		<aside class="col-sm-5">
         			<article class="card-body p-5">
         				<h3 class="title mb-3"><a href="#">
         					<?php echo $row["song_name"]; ?>
         				</h3>
         				<br>
         				
         				<!-- price-detail-wrap .// -->
		<dl class="item-property">
            <h4>Singer : Sơn Tùng MTP</h4>
            <br>
             <h4>Genre : Pop</h4>
             <br>
			<dt>Play music</dt>
			<br>
			<audio id="audio_1" style="width: 330px"controls controlsList="nodownload" ontimeupdate="myAudio(this)"><source src="song/<?php echo $row['song_mp3']?>" type="audio/mp3" >
			</audio>
            <script type="text/javascript">
            function myAudio(event){
              if(event.currentTime >60){
                event.currentTime=0;
                event.pause();
                alert ("Payment to listen to the full song!")
              }
            }
          </script>
        <!-- item-property-hor .// -->
        <hr>
        <div class="row">
            <p class="price-detail-wrap">
                <span class="price h5 text-warning">
                    <span class="currency">Price $:</span>
                    <span class="num"><?php echo $row["song_price"]; ?></span>
                </span>
            </p>
        </div><hr>
        <form method="POST" action="cart.php">
            <input type="number" name="sl" value="1"><br>
                <input type="hidden" name="id" value="<?=$id ?>">
                <input type="submit" class="btn rounded-pill btn-outline-primary text-uppercase" value="Add Cart"></button>
        <!-- <a href="" class="btn rounded-pill btn-primary text-uppercase"> Buy now </a>
        <a href="#" class="btn rounded-pill btn-outline-primary text-uppercase "> <i class="fas fa-shopping-cart"></i> Add to cart </a> -->
        	<!-- col.// -->
            </form>
        </div>
        <!-- row.// -->
        
    </article>

    <!-- card-body.// -->
</aside>
<article class="bg-secondary mb-3">  
    <div class="card-body text-center">
        <h4 class="text-white">Song list
            <br>
        </h4><p>
            <a class="btn btn-warning" target="_blank">
                <?php echo $row["song_name"]; ?>
                <i class="fa fa-window-restore ">
                </i>
            </a>
        </p>
        <p class="h5 text-white">
            <?php echo $row["song_lyric"]; ?>
        </p>
        <br>
        
    </div>
    <br>
    <br>
    <br>
</article>
<!-- col.// -->
</div>
<!-- row.// -->
</div>
<!-- card.// -->
</div>
<!--container.//-->
<!-- <br>
<br>
<br>
<article class="bg-secondary mb-3">  
	<div class="card-body text-center">
		<h4 class="text-white">Song list
			<br>
		</h4><p>
			<a class="btn btn-warning" target="_blank">
				<?php echo $row["song_name"]; ?>
				<i class="fa fa-window-restore ">
				</i>
			</a>
		</p>
		<p class="h5 text-white">
			<?php echo $row["song_lyric"]; ?>
		</p>
		<br>
		
	</div>
	<br>
	<br>
	<br>
</article> -->
<!-- end product conten -->
		<?php
		} //done the while
		?>
		 </div>
		</div>
		</div>
	<!-- end left column -->
	<?php
	include('inc/footer.php');
	?>