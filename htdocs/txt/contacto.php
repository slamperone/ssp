 <?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){
echo 'To establish direct contact with our local sales representatives and get a budget please call:
  </p>
  <p>United States: <strong>(619) 671-0720 </strong></p>
  <p>Mexico: +52 (664) 637-6704  </p>
    <p>&nbsp; </p>
    <div class="contacto">';
 }else{
echo 'Para establecer contacto directos con nuestros representantes de ventas locales y obtener un presupuesto puede comunicarse vía telefónica.
  </p>
  <p>Tel. en Estados Unidos<strong>(619) 671-0720 </strong> </p>
  <p>Tel. en México<strong>+52 (664) 637-6704 </strong> </p>
    <p>&nbsp; </p>
    <div class="contacto">';
 }
 ?>
 <p>
<ul>
  <li>info@ssp-inc.net</li>
 
</ul>
<p>&nbsp;</p>
<table width="500px">
  <tr>
    <td width="35%"> <?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Name:';}else{echo 'Nombre:';} ?></td>
    <td width="65%"><input type="text" name="nom"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Company name:';}else{echo 'Empresa:';} ?> </td>
    <td width="65%"><input type="text" name="emp"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Email:';}else{echo 'Correo electrónico:';} ?></td>
    <td width="65%"><input type="text" name="mail"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Phone number:';}else{echo 'Teléfono:';} ?> </td>
    <td width="65%"><input type="text" name="tel"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Address:';}else{echo 'Dirección:';} ?></td>
    <td width="65%"><textarea cols="15" rows="3" name="d1"></textarea></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'City:';}else{echo 'Ciudad:';} ?></td>
    <td width="65%"><input type="text" name="ciu"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'State:';}else{echo 'Estado:';} ?></td>
    <td width="65%"><input type="text" name="edo"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Zip code:';}else{echo 'Codigo postal:';} ?></td>
    <td width="65%"><input type="text" name="cp"></td>
  </tr>
    <tr>
    <td width="35%"><?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Message:';}else{echo 'Comentarios:';} ?></td>
    <td width="65%"><textarea cols="15" rows="3" name="msj"></textarea></td>
  </tr>
    <tr>
    <td width="35%">&nbsp;</td>
    <td width="65%"><input type="submit" value="<?php if (isset($_GET['lang']) && $_GET['lang']=='eng'){ echo 'Send:';}else{echo 'Enviar';} ?>"></td>
  </tr>
</table>
</div>