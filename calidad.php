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

			case 'almacenamiento-y-outsourcing':
		$fotoTop = 'almacenamiento';
		break;

			case 'laboratorio-de-calidad-y-sistemas-de-control':
		$fotoTop = 'calidad';
		break;

			case 'ingenieria-y-diseno-de-herramienta-modular-tooling':
		$fotoTop = 'disenoDeHerramienta';
		break;

			case 'servicios-de-importacion-y-exportacion':
		$fotoTop = 'importacion';
		break;

			case 'medicion-y-puntos-de-control-en-procesos':
		$fotoTop = 'medicionypuntos';
		break;

			case 'sub-ensamble-y-empaquetamiento':
		$fotoTop = 'subensambleyempaquetamiento';
		break;

			case 'cortadora-laser':
		$fotoTop = 'cortadoraLaser';
		break;
}
if (isset($_GET['lang'])) {
	if ($_GET['lang']=='eng'&&$_GET['seccion']=='laboratorio-de-calidad-y-sistemas-de-control') {
		$cual = 'laboratory-for-quality-control-systems';
	}else if($_GET['lang']=='eng'&&$_GET['seccion']=='medicion-y-puntos-de-control-en-procesos'){
		$cual = 'measurement-and-checkpoints-in-the-process';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='servicios-de-importacion-y-exportacion'){
		$cual = 'import-and-export-services';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='ingenieria-y-diseno-de-herramienta-modular-tooling'){
		$cual = 'engineering-and-tool-design-modular-tooling';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='almacenamiento-y-outsourcing'){
		$cual = 'storage-and-outsourcing';


	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='sub-ensamble-y-empaquetamiento'){
		$cual = 'secondary-operations-and-assembly';

}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='almacen-e-inventarios'){
		$cual = 'warehouse-and-inventory';

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

echo '<strong>You are in:</strong> <a href="index.php?lang=eng">Home</a> &gt; <a href="calidad.php?seccion=laboratorio-de-calidad-y-sistemas-de-control&lang=eng">Additional services</a> ';
}else{
echo '<strong>Tu estás en:</strong> <a href="index.php">Inicio</a> &gt; <a href="calidad.php?seccion=laboratorio-de-calidad-y-sistemas-de-control">Servicios adicionales</a> ';
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

echo "d.add(1,0,'<b>Laboratory for Quality Control Systems</b>','?seccion=laboratorio-de-calidad-y-sistemas-de-control&lang=eng');
d.add(2,0,'<b>Measurement and Checkpoints</b>','?seccion=medicion-y-puntos-de-control-en-procesos&lang=eng');
d.add(4,0,'<b>Engineering and Tool Design </b>','?seccion=ingenieria-y-diseno-de-herramienta-modular-tooling&lang=eng');
d.add(6,0,'<b>Sub-assembly and Packaging.</b>','?seccion=sub-ensamble-y-empaquetamiento&lang=eng');
d.add(5,0,'<b>Warehouse and Inventory</b>','?seccion=almacen-e-inventarios&lang=eng');

";
/*
d.add(5,0,'<b>Storage and Outsourcing</b>','?seccion=almacenamiento-y-outsourcing&lang=eng');
d.add(6,0,'<b>Secondary Operations and Assembly</b>','?seccion=sub-ensamble-y-empaquetamiento&lang=eng');
 */

		}else{
echo "d.add(1,0,'<b>Laboratorio de Calidad y Sistemas de Control</b>','?seccion=laboratorio-de-calidad-y-sistemas-de-control');
d.add(2,0,'<b>Medición y Puntos de Control en Procesos</b>','?seccion=medicion-y-puntos-de-control-en-procesos');

d.add(4,0,'<b>Ingeniería y Diseño de Herramienta / Modular tooling</b>','?seccion=ingenieria-y-diseno-de-herramienta-modular-tooling');
d.add(6,0,'<b>Sub-ensamble y empaquetamiento.</b>','?seccion=sub-ensamble-y-empaquetamiento');
d.add(5,0,'<b>Almacen e Inventarios</b>','?seccion=almacen-e-inventarios');
";

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
		  <h2><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
		  	echo 'Additional services';
		  }else{
		  	echo 'Servicios adicionales';
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