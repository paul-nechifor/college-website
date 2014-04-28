<?php
require 'include/antet.php';
afiseazaAntet('Galerie', '', '');

$imagini = array(
array('a_forest.jpg', 'Ceva din piatr&#259; l&acirc;ng&#259; o p&#259;dure.'),
array('another_forest.jpg', 'Cum intr&#259; lumina &icirc;n p&#259;dure.'),
array('cer_murdar.jpg', 'O p&#259;dure v&#259;zut&#259; de sus.'),
array('cod_de_bare.jpg', 'Parc-ar fi un cod de bare!'),
array('copac_cazut.jpg', 'Un copac mare c&#259;zut.'),
array('dark_forest.jpg', 'Cum arat&#259; luna &icirc;n p&#259;dure noaptea.'),
array('deep_forest.jpg', 'Pod de lemn foarte lung.'),
array('ferigi_negre.jpg', 'O imagine foarte faina cu o p&#259;dure.'),
array('galben_copac.jpg', 'Un copac f&#259;r&#259; frunze.'),
array('padure_albastra.jpg', 'Ochi de lupi, sau ceva, &icirc;n p&#259;dure.'),
array('padure_verde.jpg', 'O imagine mai verzuie dintr-o p&#259;dure.'),
array('pene_copac.jpg', 'Un <em>troll</em> care e c&acirc;t p-aci s&#259; m&#259;n&acirc;nce o fat&#259; &icirc;n p&#259;dure.'),
array('tree_of_death.jpg', 'Alt copac uscat, dar mai mare.'),
array('umbrela_copac.jpg', 'Un copac l&#259;sat &icirc;n jos.')
);
?>

<h2 id="t_galerie">Galerie</h2>

<p><span class="P"><span>P</span></span>entru c&#259; trebuie s&#259; fac neaparat o galerie de imagini pentru 10 puncte &#351;i nu vreau s&#259; stric impresia saitului pun&acirc;nd fotografii cu mine am ales s&#259; pun fotografii cu... ce altceva dec&acirc;t <strong>copaci</strong>. Dar nu este doar o simpl&#259; galerie de imagini. Nu! Galeria asta de imagini are are un <em>quest</em> pentru navigatorul r&#259;tacit pe internet care a picat pe saitul meu personal.</p>
<p><strong><em>Quest</em></strong>: <em>Find the troll</em></p><p>&Icirc;ntr-una din imaginile de mai jos este un <em>troll</em>, trebuie s&#259;-l g&#259;se&#351;ti &#351;i s&#259;-l ucizi.</p><p><em><strong>Reward</strong></em>: Gold (2500 coins), 150 Experience</p>
<p>Chiar si codul CSS generat pentru galerie este f&#259;cut &icirc;n PHP. Ar fi o pierdere de timp s&#259; stau s&#259; aliniez toate cele 14 imagini. A&#351;a este &#351;i mai u&#351;or dac&#259; vreau s&#259; adaug sau s&#259; &#351;terg imagini. Dac&#259; dai ape&#351;i pe o imagine, imaginea mai mare r&#259;m&acirc;ne afi&#351;at&#259;. Pentru a ar&#259;ta mai bine c&acirc;nd selectezi o imagine am pus &quot;<code>outline:none;</code>&quot;. Sub imagine este &#351;i o mic&#259; descriere. Nu prea mare c&#259; stric&#259;.</p>
<style type="text/css">
.a, .a:visited {color:#1b1010;}
#container {position:relative; width:750px; height:800px; background:#120909;; border:1px solid #1b1010; margin:10px auto;}
#container b {font-weight:normal; width:750px; text-align:center; position:absolute; bottom:350px; left:0; z-index:1; line-height:2; text-align:center; font-family:Garamond, serif; font-size:19px; letter-spacing:3px; font-style:italic; color:#321F1d;}
a.gallery, a.gallery:visited {outline:none; display:inline; color:#000; text-decoration:none; border:1px solid #000; width:95px; height:75px; float:left; margin:9px 0 0 9px; position:relative; cursor:default;}
<?php
for ($i=0; $i<count($imagini); $i++)
	print "a.slide$i {background:url(galerie/mic_".$imagini[$i][0].")}\n";
print 'a.gallery span {visibility:hidden; display:block; border:1px solid #1b1010; position:absolute; width:730px; height:600px; top:189px; left:9px; color:#000; background:#160D0D; text-align:center; font-family:Garamond, serif; font-size:17px; color:#624F4d;letter-spacing:1px; cursor:default;}';
$top = 180;
$i = $left = 0;
while ($i<count($imagini))
{
	print "a.slide$i span {left:{$left}px; top:{$top}px;}\n";
	$left -= 106;
	if ((++$i % 7) == 0)
	{
		$left = 0;
		$top -= 86;
	}
}

?>
a.gallery:hover {white-space:normal; border:1px solid #712E17; z-index:100; text-decoration:none;}
a.gallery:hover span {visibility:visible; z-index:100;}
a.gallery:hover span img {margin:10px; border:1px solid #000; position:relative; z-index:100;}
a.gallery:active, a.gallery:focus {border:1px solid #513627; z-index:10;}
a.gallery:active span, a.gallery:focus span {visibility:visible; z-index:10;}
a.gallery:active span img, a.gallery:focus span img {border:1px solid #000; position:relative; margin:10px; z-index:10;}
</style>

<div id="container">
<b>O colec&#355;ie  interesan&#259; de imagini cu copaci<br />
pus&#259; laolalt&#259; de Paul Nechifor.</b>
<?php
for ($i=0; $i<count($imagini); $i++)
	print '<a class="gallery slide'.$i.'" href="#nogo"><span><img src="galerie/'.$imagini[$i][0].'" alt="'.
		$imagini[$i][1].'" title="'.$imagini[$i][1].'"><br />'.$imagini[$i][1].'</span></a>'."\n";

?>

</div>
<p>Ai g&#259;sit <em>troll</em>-ul?... Crezi c&#259; am jucat prea mult <em>King's Bonty: The Legend</em>? Oricum dup&#259; ce termin cu saitul am s&#259; am mai mult timp s&#259; fac a&#351;a ceva.</p>
<?php
require 'include/subsol.php';
afiseazaSubsol();
?>