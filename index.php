<?php
session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
include('inc/header.php'); 
include('inc/navbar.php');}

?>
<?php
// include('inc/side.php');
include('inc/listsong.php');include('inc/scripts.php');
?>

<?php
include('inc/footer.php');
?>