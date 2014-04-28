<?php
require '../../include/antet.php';
afiseazaAntet('SisyphuSudoku (Paul Nechifor)', '', '');
?>

<h3>SisyphuSudoku</h3>

<p><span class="G"><span>G</span></span>&#259;se&#351;ti solu&#355;ii pentru jocuri Sudoku. L-am &icirc;nceput dup&#259; prima or&#259; de logic&#259;.</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="600" height="305" title="SisyphuSudoku">
    <param name="movie" value="prototip.swf" />
    <param name="quality" value="high" />
    <embed src="prototip.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="600" height="305"></embed>
  </object>
</p>

<?php
require '../../include/subsol.php';
afiseazaSubsol();
?>
