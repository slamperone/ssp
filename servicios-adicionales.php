<?php
include 'head.php';
include 'menu.php';
$color = array('006eab','556148','635c45','002358','403d3c');
$cual = rand(0,4);
?>

<style type="text/css"><!--
#color-patch {
	display: inline;
	width: 262px;
	height:41px;
	float: left;
	position: relative;
	background-color: <?php echo '#'.$color[$cual].';\n\r' ?>
	text-align: left;
	vertical-align: bottom;
	padding-top: 130px;
	padding-left:22px;
}

#header-image {
	float: right;
	width: 405px;
	height: 171px;
	display: inline;
	position: relative;
	background-color: #006DB9;
	background-image: url("images/tata-group-profile.jpg");
}
-->

div, p, form, ul, li, h1, h2, h3, h4, h5, h6, a, span, form, img, br, input, textarea, label { padding:0; margin:0; }
a, input { text-decoration:none; outline:none;}
img {border:0; outline:none;}
ul{list-style-type:none;}
</style>

<div id="main-inside">
<div id="path">
  <!--strong>Tu estás en:</strong> <a href="index.html">Inicio</a> &gt; <a href="index.asp.html">Corporate</a> &gt; Ethics-->
</div>

<div id="leftcolumn">


<table width="147" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" valign="top"><div class="script/dtree">
      <script type="text/javascript">
		<!--
		d = new dTree('d');
d.add(0,-1,' ',' ');

d.add(1,0,'<b>Acerca de nosotros</b>','?seccion=acerca');
d.add(2,0,'<b>Misión</b>','?seccion=mision');
d.add(3,0,'<b>Vision</b>','?seccion=vision');
d.add(4,0,'<b>Clientes</b>','?seccion=clientes');
d.add(5,0,'<b>Proyectos</b>','?seccion=proyectos');
		//document.write(d);

		//-->
	      </script>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>

  </div>
<div id="rightcolumn">
<div id="color-patch">
  <h2>Servicios Adicionales</h2>
  	</div>
<div id="header-image"></div>
<div id="content">
<h1></h1>
  <p><img src="images/one-vision.jpg" alt="Bombay House " class="rightimage" width="200" height="150">
          La renovación constante, nos mantiene a la vanguardia, cubriendo las necesidades de los  clientes, con permanente innovación interna para convertirnos en  un  proveedor que reduzca costos, tiempo y ofrezca soluciones eficientes.
        </p>
    <p>&nbsp; </p>
</div>
</div>
<div id="bot-padding"></div>
</div>


<?php
include 'footer.php';
?>