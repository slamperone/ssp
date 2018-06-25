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
	background-image: url("images/top/herramienta.jpg");
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

echo '<strong>You are in:</strong> <a href="index.php?lang=eng">Home</a> &gt; Tools</a> ';
}else{
echo '<strong>Tu estás en:</strong> <a href="index.php">Inicio</a> &gt; Herramienta ';
}
?>
</div>

<div id="leftcolumn">


<table width="147" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" valign="top"><div class="script/dtree">
    	<?php

      $productos = array(
        array('CNC Tube Bender  ','La dobladora CNC puede doblar tubos de hasta 2" de diámetro',array('tubeBender700x460.jpg','tubeBender700x4602.jpg','tubeBender700x4603.jpg'),'CNCTubeBenderHMT.mp4'),

        array('Iron Worker','',array('PiranhaIronWorke700x460.jpg','PiranhaIronWorke700x4602.jpg','PiranhaIronWorke700x4603.jpg' )),

        array('Robotic Welder','',array('roboticWelderFlexarc700x460.jpg','roboticWelderFlexarc700x4602.jpg','roboticWelderFlexarc700x4603.jpg')),

        array('RRET Punch Press ','',array('AmadaPega700x460.jpg','AmadaPega700x4602.jpg','AmadaPega700x4603.jpg')),

        array('Hydraulic Press Brake 6’','(ponchadora / brakepresss corta figuras) ',array('AmadaRG700x460.jpg','AmadaRG700x4602.jpg')),
        array('80 Ton Shear','',array('AmadaCNC700x460.jpg','AmadaCNC700x4601.jpg')),

        array('Hydraulic Press Brake 8’','Tube / angleCutter',array('AmadaHS700x460.jpg','AmadaHS700x4602.jpg','AmadaHS700x4603.jpg'),'AmadaHS8025.mp4'),

        array('Machine Center','(mostrar  piezas  que  fabrica)',array('TornoCNCHASS700x460.jpg','TornoCNCHASS700x4602.jpg','TornoCNCHASS700x4603.jpg' )),

        array('Angle Roller  ','',array('Roladoradeangulo700x460.jpg')),

        array('Manual Cutting','',array('DoringerD700x460.jpg','DoringerD700x4602.jpg'),'DoringerD-350.mp4'),
        array('3D Scan-to-CAD','centro de maquinado',array('FaroEage700x460.jpg','FaroEage700x4602.jpg'),'FaroEage.mp4'),
        array('Water Jet','Robotic Welder Flexarc',array('CortadoraWaterJet700x460.jpg')),
        array('Laser Cutter','descripcion here',array('cortadoralaser700x460.jpg','cortadoralaser700x4602.jpg','cortadoralaser700x4603.jpg')),
        array('Hydraulic Puncher ','descripcion here',array('italia700x460.jpg','italia700x4602.jpg','italia700x4603.jpg'),'maquinaITALIA.mp4'),

    );
$cuantosProds = count($productos)-1;
echo '<div class="dtree">';
//este es el menu lateral y muestra a partir de la primera foto
for ($i=0; $i <=$cuantosProds; $i++) {
  $cuantasFotos = count($productos[$i][2]);
  echo  "<a href='images/productos/";
  if ($cuantasFotos >= 2):echo $productos[$i][2][1]; else:echo $productos[$i][2][0];endif;
  echo "' class='gallery node' rel='gal".$i."' title='".$productos[$i][0]."'><b>".$productos[$i][0]."</b></a>";
}
echo '</div>';
?>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>

  </div>
<div id="rightcolumn">
<div id="plecaTop">
    <div id="color-patch">
      <h2> <?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
        echo 'Tools';
      }else{
        echo 'Equipo y herramienta';
      }
      ?></h2>
    </div>

    <div id="header-image"></div>
</div>
<div id="content">

  <?php
  //este en  el contenedor y muetra a partir de la segunda foto o desde la primera si nomas tiene uana
for ($i=0; $i <=$cuantosProds; $i++) {
    echo '
<div class="landing-hl herramienta">
        <table width="187" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2" valign="bottom" style="border-bottom:dotted 1px #000000;">
            <p>'.substr($productos[$i][0], 0, 23);
            if (isset($productos[$i][3])) {
              echo '<a href="video.php?video='.$productos[$i][3].'" id="vid" ><img src="images/video.png" style=" float: right; border:none;"/></a>';
            }

            echo '</p></td>
            </tr>
          <tr>
            <td width="46" valign="top" style="padding-top:12px; padding-right:6px">
            <a href="images/productos/';
            //if ($cuantasFotos >= 2):echo $productos[$i][2][1]; else:echo $productos[$i][2][0];endif;
            echo $productos[$i][2][0];
            echo '" class="gallery node" rel="gal'.$i.'" title="'.$productos[$i][0].'">
            <img src="thumb.php?x=198&y=115&file=images/productos/'.$productos[$i][2][0].'" alt="'.$productos[$i][0].'" style="border:0!important;" />
            </a>
            </td>
            </tr>
          </table>
      </div>';
}
  ?>

</div>
</div>
<div id="bot-padding"></div>
</div>

<div id="contFotos">
  <?php
  //este es el hidden cont y muestra a partir de la tercera

for ($i=0; $i <=$cuantosProds; $i++) {
  $cuantosB = count($productos[$i][2]);
  if ($cuantosB >= 3) {
    for ($e=2; $e <= $cuantosB-1 ; $e++){
    echo "<a href='images/productos/".$productos[$i][2][$e]."' class='gallery node' rel='gal".$i."' title='".$productos[$i][0]."'>".$productos[$i][0]."</a><br />\n\r";
  }
  }

}
?>
</div>

<?php
include 'footer.php';
?>