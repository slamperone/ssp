<?php
include 'head.php';
if (isset($_GET['lang'])&&$_GET['lang']=='eng'){
include 'menu2.php';
}else{
  include 'menu.php';
}
$color = array('006eab','556148','635c45','002358','403d3c');
$cual = rand(0,4);
$fotoTop;
switch ($_GET['seccion']) {
			case 'sistema-de-pretratamiento-y-lavado-SandBlast':
		$fotoTop = 'lavado';
		break;

			case 'pintura-en-polvo-de-aplicacion-electrostatica':
		$fotoTop = 'pinturaEnPolvo';
		break;

			case 'sistema-de-aplicacion-manual':
		$fotoTop = 'sistemaManual';
		break;

}
if (isset($_GET['lang'])) {
		if ($_GET['lang']=='eng'&&$_GET['seccion']=='sistema-de-pretratamiento-y-lavado-SandBlast') {
		$cual = 'pretreatment-and-wash-system-sandblast';
	}else if($_GET['lang']=='eng'&&$_GET['seccion']=='pintura-en-polvo-de-aplicacion-electrostatica'){
		$cual = 'electrostatic-powder-paint-application';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='sistema-de-aplicacion-manual'){
		$cual = 'manual-application-system';
	}else{
		$cual = $_GET['seccion'];
	}
}else{
	$cual = $_GET['seccion'];
}
?>

<style type="text/css"><!--
#header-image {
	background-image: url("images/top/<?php echo $fotoTop; ?>.jpg");
}
-->

div, p, form, ul, li, h1, h2, h3, h4, h5, h6, a, span, form, img, br, input, textarea, label { padding:0; margin:0; }
a, input { text-decoration:none; outline:none;}
img {border:0; outline:none;}
ul{list-style-type:none;}
</style>

<div id="main-inside">
<div id="path">
<?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){

echo '<strong>You are in:</strong> <a href="index.php?lang=eng">Home</a> &gt; <a href="pintura.php?seccion=pretreatment-and-wash-system-sandblast&lang=eng">Powder Coating</a> ';
}else{
echo '<strong>Tu estás en:</strong> <a href="index.php">Inicio</a> &gt; <a href="pintura.php?seccion=pintura-en-polvo-de-aplicacion-electrostatica">Pintura electrostática</a> ';
}
?>
&gt; <span style="text-transform:capitalize;"><?php echo str_replace('-', ' ', $cual); ?></span>

</div>

<div id="leftcolumn">


<table width="147" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" valign="top"><div class="script/dtree">
      <script type="text/javascript">
		<!--
		d = new dTree('d');
d.add(0,-1,' ',' ');

<?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
	echo "d.add(1,0,'<b>Electrostatic Powder Coating Paint Application</b>','?seccion=pintura-en-polvo-de-aplicacion-electrostatica&lang=eng');
	d.add(2,0,'<b>Pre-treatment and Wash System/Sandblast</b>','?seccion=sistema-de-pretratamiento-y-lavado-SandBlast&lang=eng');
	d.add(3,0,'<b>Manual Application System (Batch Oven)</b>','?seccion=sistema-de-aplicacion-manual&lang=eng');";
}else{
	echo "d.add(1,0,'<b>Pintura en Polvo de Aplicación Electrostática</b>','?seccion=pintura-en-polvo-de-aplicacion-electrostatica');
		d.add(2,0,'<b>Sistema de Pre-tratamiento y Lavado / SandBlast</b>','?seccion=sistema-de-pretratamiento-y-lavado-SandBlast');
		d.add(3,0,'<b>Sistema de Aplicación Manual</b>','?seccion=sistema-de-aplicacion-manual');";
}
?>
		document.write(d);

		//-->
	      </script>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>

  </div>
<div id="rightcolumn">
<div id="plecaTop">
		<div id="color-patch">
  			<h2> <?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
		  	echo 'Powder Coating';
		  }else{
		  	echo 'Pintura Electrostática';
		  }
		  ?></h2>
  		</div>
<div id="header-image"></div>
</div>
<div id="content">
 <?php
include 'txt/'.$cual.'.php' ;
  ?>
</div>
</div>
<div id="bot-padding"></div>
</div>


<?php
include 'footer.php';
?>