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
			case 'acerca-de-nosotros':
			case 'about-us':
		$fotoTop = 'nosotros';
		break;

			case 'mision-y-vision':
			case 'mission-and-vision-statements':
				if(isset($_GET['lang']) && $_GET['lang']=='eng'){
       $fotoTop = 'misionEn';
      }else{
          $fotoTop = 'misionEs';
      }

		break;

			case 'clientes-y-proyectos':
			case 'customers-and-proyects':
		$fotoTop = 'clientes';
		break;
}
if (isset($_GET['lang'])) {
	if ($_GET['lang']=='eng'&&$_GET['seccion']=='acerca-de-nosotros') {
		$cual = 'about-us';
	}else if($_GET['lang']=='eng'&&$_GET['seccion']=='mision-y-vision'){
		$cual = 'mission-and-vision-statements';
	}else if ($_GET['lang']=='eng'&&$_GET['seccion']=='clientes-y-proyectos'){
		$cual = 'customers-and-proyects';
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

echo '<strong>You are in:</strong> <a href="index.php?lang=eng">Home</a> &gt; <a href="corporativa.php?seccion=about-us?lang=eng">Who we are</a> ';
}else{
echo '<strong>Tu estás en:</strong> <a href="index.php">Inicio</a> &gt; <a href="corporativa.php?seccion=acerca-de-nosotros">Quienes Somos</a> ';
}
?>

&gt; <span style="text-transform:capitalize;"><?php echo str_replace('on', '&oacute;n',str_replace('-', ' ', $cual)) ; ?></span>
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
echo "d.add(1,0,'<b>About Us</b>','?seccion=acerca-de-nosotros&lang=eng');
d.add(2,0,'<b>Mission and Vision Statements</b>','?seccion=mision-y-vision&lang=eng');
d.add(4,0,'<b>Customers and Projects</b>','?seccion=clientes-y-proyectos&lang=eng');";
}else{
	echo "d.add(1,0,'<b>Acerca de nosotros</b>','?seccion=acerca-de-nosotros');
d.add(2,0,'<b>Misión y visión</b>','?seccion=mision-y-vision');
d.add(4,0,'<b>Clientes y proyectos</b>','?seccion=clientes-y-proyectos');";
}?>

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
		  	echo 'Corporate Information';
		  }else{
		  	echo 'Información Corporativa';
		  }
		  ?>

		  </h2>
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