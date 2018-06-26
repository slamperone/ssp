<?php
include 'head.php';
if (isset($_GET['lang'])&&$_GET['lang']=='eng'){
include 'menu2.php';
}else{
  include 'menu.php';
}

?>




<div class="bannerPAnel">
<?php if (isset($_GET['lang'])&&$_GET['lang']=='eng'){
include('txt/home.php');
}else{
  include('txt/inicio.php');
}
?>
 </div><!-- home cont panel -->

<?php
include 'footer.php';
?>