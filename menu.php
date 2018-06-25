
<?php
        $relativa = $_SERVER[ 'PHP_SELF' ];
        $resultado = explode( '/', $relativa );
        $cuantas = count( $resultado );
        $cualEs = $resultado[$cuantas-1];
        ?>
<div class="topPanel">
  <div class="center relative"><a href="index.php"><img src="images/<?php if (isset($_GET['lang'])&&$_GET['lang']=='eng'){echo 'logo.png';}else{echo 'logoEs.png';} ?>" alt="" border="0" class="tslogo"/></a>

  <div class="topSearchSec">
    <div class="topSearch">
    <form id="frmSearch" name="frmSearch" method="post" action=""  style="display:inline;">
    <input type="hidden" name="Action" value="Go" class="search"/>
    <input type="text" id="busca" class="topSearchBox" value="Search" onFocus="if(this.value=='Search'){this.value=''}" onBlur="if(this.value==''){this.value='Search'}" />
    </form></div>
  </div>

    <div class="lang">
    <div ><!-- content -->
     <p><a href="?<?php if (isset($_GET['seccion']) && $_GET['seccion']!=''){echo "seccion=".$_GET['seccion']."&";} ?>lang=eng"><img src="images/usa.png" height="15" alt="english version" align="bottom" /> English </a></p>
    </div>
    <div><!-- content -->
     <p><a href="?<?php if (isset($_GET['seccion']) && $_GET['seccion']!=''){echo "seccion=".$_GET['seccion'];} ?>"><img src="images/mx.png" height="15" alt="version en español" align="bottom"/> Español </a></p>
    </div>
    </div>


  </div>
</div><!-- top panel -->

<div class="NavPanel">
  <div class="center relative" style="background:#0083cb; height:37px;-webkit-box-shadow: 0px 20px 38px -6px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 20px 38px -6px rgba(0,0,0,0.75);
box-shadow: 0px 20px 38px -6px rgba(0,0,0,0.75);">
  <ul id="nav">
<!-- Corporativa -->

  <li class="navli"><a href="corporativa.php?seccion=acerca-de-nosotros" class="navlink<?php if($cualEs=='corporativa.php'){echo ' activo';} ?>" >Quienes Somos</a>
    <div class="subnav" style="display: none;">
      <div class="subnavIn">
        <a href="corporativa.php?seccion=acerca-de-nosotros">
      <div class="mmSec width260"><img src="images/menu/acercaDeNosotros.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Acerca de nosotros</a></li>
      </a>
        </ul>
      </div>
      <a href="corporativa.php?seccion=mision-y-vision">
      <div class="mmSec width260"><img src="images/menu/mision.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
       <li><a>Misión y visión</li>
       </a>
        </ul>
      </div>
      <a href="corporativa.php?seccion=clientes-y-proyectos">
      <div class="mmSec width260" style="margin-right:0">
        <img src="images/menu/clientes.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Clientes y proyectos</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div>
</div>
    </div>
  </li>
  <!-- Manufactura -->

  <li class="navli"><a href="manufactura.php?seccion=cortadora-laser" class="navlink<?php if($cualEs=='manufactura.php'){echo ' activo';} ?>" >Manufactura</a>
    <div class="subnav" style="display: none;">
      <div class="subnavIn">
 <a href="manufactura.php?seccion=cortadora-laser">
      <div class="mmSec width260">
        <img src="images/menu/cortadoraLaser.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Cortadora Laser</a></li>
      </a>
        </ul>
      </div>

      <a href="manufactura.php?seccion=soldadura-MIG-y-TIG-soldadura-automatizada-y-manual">
      <div class="mmSec width260"><img src="images/menu/soldadura.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
       <li><a>Soldadura MIG y TIG automatizada</li>
       </a>
        </ul>
      </div>

      <a href="manufactura.php?seccion=cortado-de-metal">
      <div class="mmSec width260" style="margin-right:0">
        <img src="images/menu/cortado.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Cortado de Metal</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div>

    <a href="manufactura.php?seccion=doblez-de-metal">
      <div class="mmSec width260"><img src="images/menu/doblez.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Doblez de Metal</a></li>
      </a>
        </ul>
      </div>
      <a href="manufactura.php?seccion=troquelado">
      <div class="mmSec width260"><img src="images/menu/troquelado.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
       <li><a>Troquelado</li>
       </a>
        </ul>
      </div>
      <a href="manufactura.php?seccion=maquinado">
      <div class="mmSec width260" style="margin-right:0">
        <img src="images/menu/cortadoraLaser.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Centro de Maquinado</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div>

</div>
    </div>
  </li>

  <!-- Pintura -->

  <li class="navli"><a href="pintura.php?seccion=pintura-en-polvo-de-aplicacion-electrostatica" class="navlink <?php if($cualEs=='pintura.php'){echo ' activo';} ?>" >Pintura Electrostatica</a>
    <div class="subnav" style="display: none;">
      <div class="subnavIn">
<a href="pintura.php?seccion=pintura-en-polvo-de-aplicacion-electrostatica">
      <div class="mmSec width260"><img src="images/menu/pinturaEnPolvoElectroestatica.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Pintura en polvo de aplicación electrostática</a></li>
      </a>
        </ul>
      </div>
      <a href="pintura.php?seccion=sistema-de-pretratamiento-y-lavado-SandBlast">
      <div class="mmSec width260"><img src="images/menu/lavadoSandblast.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
       <li><a>Sistema de pre-tratamiento y lavado / SandBlast</a></li>
        </ul>
      </div>
      <a href="pintura.php?seccion=sistema-de-aplicacion-manual">
      <div class="mmSec width260" style="margin-right:0">
        <img src="images/menu/sistemaDeAplicacionManual.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Sistema de aplicación manual</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div>

        <!--a href="pintura.php?seccion=metalizado">
      <div class="mmSec width260"><img src="images/menu/metalizado.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Metalizado</a></li>
      </a>
        </ul>
      </div>
      <a href="pintura.php?seccion=horno">
      <div class="mmSec width260"><img src="images/magamenu-img/investor1.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
       <li><a>Horno</a></li>
        </ul>
      </div>
      <a href="pintura.php?seccion=incinerador">
      <div class="mmSec width260" style="margin-right:0">
        <img src="images/magamenu-img/investor4.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Incinerador</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div-->
</div>
    </div>
  </li>
  <!-- Herramientas -->

  <li class="navli"><a href="herramienta.php?producto=equipo" class="navlink<?php if($cualEs=='herramienta.php'){echo ' activo';} ?>" >Herramienta</a>
    <!--div class="subnav" style="display: none;">
      <div class="subnavIn">
      <div class="mmSec width260"><img src="images/magamenu-img/sustailability1.jpg" alt=""/>
      <ul class="mmlinks1">
      <li><a href="sustainability/the-tata-steel-approach.asp.html">The Tata Steel Approach</a></li>
      <li><a href="sustainability/csr-reports.asp.html">Sustainability Reports</a></li>
      <li><a href="sustainability/sustainability-awards.asp.html">Sustainability Awards</a></li>
      </ul>
      </div>
      <a href="sustainability/samvaad-a-tribal-conclave.asp.html"></a>
      <ul class="mmlinks1">
      <li><a href="sustainability/active-volunteering.asp.html">Active Volunteering</a></li>
      <li><a href="sustainability/sustainable-livelihoods.asp.html">Sustainable Livelihoods</a></li>
      <li><a href="sustainability/health.asp.html">Health</a></li>
      <li><a href="sustainability/samvaad-a-tribal-conclave.asp.html">Samvaad - A Tribal Conclave</a></li>
      </ul>
      </div>
      <div class="mmSec width260" style="margin-right:0">
<ul class="mmlinks1">
  <li></li>
      <li></li>
    </ul>
      </div>
<div class="clear"></div>
</div>
    </div-->
  </li>

    <!--li class="navli"><a href="servicios-adicionales.php" class="navlink" >Servicios adicionales</a></li> -->


  <!-- Calidad -->

  <li class="navli"><a href="calidad.php?seccion=laboratorio-de-calidad-y-sistemas-de-control" class="navlink<?php if($cualEs=='calidad.php'){echo ' activo';} ?>" >Servicios adicionales</a>
    <div class="subnav" style="display: none;">
       <div class="subnavIn">
<a href="calidad.php?seccion=laboratorio-de-calidad-y-sistemas-de-control">
      <div class="mmSec width260"><img src="images/menu/calidad.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Laboratorio de calidad y sistemas de control </a></li>
      </a>
        </ul>
      </div>
      <a href="calidad.php?seccion=medicion-y-puntos-de-control-en-procesos">
      <div class="mmSec width260"><img src="images/menu/medicion.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
       <li><a>Medición y puntos de control en procesos</a></li>
        </ul>
      </div>
      <a href="calidad.php?seccion=ingenieria-y-diseno-de-herramienta-modular-tooling">
      <div class="mmSec width260" style="margin-right:0">
        <img src="images/menu/diseno.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Ingeniería y Diseño de Herramienta / Modular tooling</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div>

      <a href="calidad.php?seccion=sub-ensamble-y-empaquetamiento">
      <div class="mmSec width260">
        <img src="images/menu/subEnsamble.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Sub ensamble y empaquetamiento</a></li>
      </a>
        </ul>
      </div>

      <a href="calidad.php?seccion=almacen-e-inventarios">
      <div class="mmSec width260"><img src="images/menu/almacen.jpg" alt="" width="260"/>
      <ul class="mmlinks1">
        <li><a>Almacen e Inventarios</a></li>
      </a>
        </ul>
      </div>
<div class="clear"></div>
</div>
    </div>
  </li>
  <!-- Media -->
  <li class="navli"><a href="contacto.php" class="navlink <?php if($cualEs=='contacto.php'){echo ' activo';} ?>" >Contacto</a></li><!-- Contact -->


</ul>
  </div>
  </div><!-- nav panel -->