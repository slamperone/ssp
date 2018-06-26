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
			case 'almacen-e-inventarios':
		$fotoTop = 'almacen';
		break;

			case 'soldadura-MIG-y-TIG-soldadura-automatizada-y-manual':
		$fotoTop = 'soldadura';
		break;

			case 'cortado-de-metal':
		$fotoTop = 'cortado';
		break;

			case 'doblez-de-metal':
		$fotoTop = 'doblez';
		break;

			case 'troquelado':
		$fotoTop = 'troquelado';
		break;

			case 'operaciones-secundarias-y-de-ensamble':
		$fotoTop = 'operaciones';
		break;

		case 'cortadora-laser':
		$fotoTop = 'cortadoraLaser';
		break;

}

if (isset($_GET['lang'])) {
	if ($_GET['lang']=='eng'&&$_GET['seccion']=='almacen-e-inventarios') {
		$cual = 'warehouse-and-inventory';
	}else if($_GET['lang']=='eng'&&$_GET['seccion']=='soldadura-MIG-y-TIG-soldadura-automatizada-y-manual'){
		$cual = 'MIG-TIG-welding';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='cortado-de-metal'){
		$cual = 'metal-cutting';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='doblez-de-metal'){
		$cual = 'metal-bending';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='troquelado'){
		$cual = 'punching-of-sheet-metal-and-tube';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='cortadora-laser'){
		$cual = 'laser-cutter';
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

echo '<strong>You are in:</strong> <a href="index.php?lang=eng">Home</a> &gt; <a href="manufactura.php?seccion=almacen-e-inventarios&lang=eng">Manufacturing Services</a> ';
}else{
echo '<strong>Tu estás en:</strong> <a href="index.php">Inicio</a> &gt; <a href="manufactura.php?seccion=almacen-e-inventarios">Manufactura</a> ';
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
echo "d.add(6,0,'<b>Laser cutter</b>','?seccion=cortadora-laser&lang=eng');
d.add(2,0,'<b>MIG – TIG Welding</b>','?seccion=soldadura-MIG-y-TIG-soldadura-automatizada-y-manual&lang=eng');
d.add(3,0,'<b>Metal cutting</b>','?seccion=cortado-de-metal&lang=eng');
d.add(4,0,'<b>Metal bending</b>','?seccion=doblez-de-metal&lang=eng');
d.add(5,0,'<b>Punching of sheet metal and tube</b>','?seccion=troquelado&lang=eng');
d.add(5,0,'<b>Mechining Center</b>','?seccion=maquinado&lang=eng');
d.add(1,0,'<b>Warehouse and inventory</b>','?seccion=almacen-e-inventarios&lang=eng');
";
}else{
	echo "d.add(6,0,'<b>Cortadora Laser</b>','?seccion=cortadora-laser');
	;
d.add(2,0,'<b>Soldadura MIG y TIG Soldadura automatizada</b>','?seccion=soldadura-MIG-y-TIG-soldadura-automatizada-y-manual');
d.add(3,0,'<b>Cortado de Metal</b>','?seccion=cortado-de-metal');
d.add(4,0,'<b>Doblez de Metal</b>','?seccion=doblez-de-metal');
d.add(5,0,'<b>Troquelado</b>','?seccion=troquelado');
d.add(6,0,'<b>Centro de Maquinado</b>','?seccion=maquinado');
 
d.add(1,0,'<b>Almacen e Inventarios</b>','?seccion=almacen-e-inventarios');";
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
		  <h2>
		  <?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
		  	echo 'Manufacturing Services';
		  }else{
		  	echo 'Manufactura';
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