<p class="pageHighlight">
	Utilizamos  tecnología  de  vanguardia  con  personal  altamente  calificado  y  con procesos de acuerdo a estándares ISO9000.
</p>

<?php
for ($i=1; $i <=16; $i++) {
echo '
<div class="landing-hl herramienta">
        <table width="187" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2" valign="bottom" style="border-bottom:dotted 1px #000000;"><p class="rightbullet">'.substr($nombreH[$i], 0, 19).'</p></td>
            </tr>
          <tr>
            <td width="46" valign="top" style="padding-top:12px; padding-right:6px"><a href="?producto='.$i.'"><img src="images/no-icon.jpg" alt="Press Releases" width="72" height="75" /></a></td>
            <td width="139" align="left" valign="top" style="padding-top:12px; padding-left:6px">'.$descH[$i].'<br />
              <a href="?producto='.$i.'">Detalle</a> </td>
            </tr>
          </table>
      </div>
';
}
?>
<p>&nbsp; </p>
<p>&nbsp; </p>


