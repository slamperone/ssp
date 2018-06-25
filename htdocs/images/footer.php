
 <div class="footerPanel">
<div class="footer">
  <div>
  <table border="0">
  	<tr>
  		<td class="copy">
		&copy; Copyright Speciality Steel Products 2016. All rights reserved.
  		</td>
  		<td>
			&nbsp;
  		</td>
  		<td>
  		<?php if(isset($_GET['lang']) && $_GET['lang']=='eng'){
        $imagen =  'footer_eng';
      }else{
           $imagen =  'footer';
      } ?>
      <img src="images/<?php print $imagen; ?>.jpg" />
  		</td>
  	</tr>
  </table>
  </div>
  </div>
</body>
</html>