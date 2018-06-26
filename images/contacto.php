<?php
include 'head.php';
if (isset($_GET['lang'])&&$_GET['lang']=='eng'){
include 'menu2.php';
}else{
  include 'menu.php';
}
?>

<style type="text/css"><!--
#header-image {
	background-image: url("images/top/contacto.jpg");
}
-->

div, p, form, ul, li, h1, h2, h3, h4, h5, h6, a, span, form, img, br, input, textarea, label { padding:0; margin:0; }
a, input { text-decoration:none; outline:none;}
img {border:0; outline:none;}
ul{list-style-type:none;}
</style>

<div id="main-inside">
<div id="path">
 <strong>Tu estás en:</strong> <a href="index.php">Inicio</a> &gt; Contacto 
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
<div id="plecaTop">
    <div id="color-patch">
      <h2><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
        echo 'Contact us';
      }else{
        echo 'Contacto';
      }
      ?></h2>
    </div>

    <div id="header-image"></div>
</div>
<div id="content">
  <?php
  include 'txt/contacto.php' ;
  ?>
</div>
</div>
<div id="bot-padding"></div>
</div>


<?php
include 'footer.php';
?>