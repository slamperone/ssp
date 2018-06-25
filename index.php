<?php
$int = (60*60)*24;
//setcookie('first',true);
//echo $_COOKIE['first'].' before';
if (!isset($_COOKIE['first'])||$_COOKIE['first']=='1'){
	setcookie('first','0');
	header('location: ?lang=eng');
}
//print_r($_COOKIE);
//echo $_COOKIE['first'].' after';

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