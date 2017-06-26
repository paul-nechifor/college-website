<?php

function afiseazaAntet($titlu, $descriere, $cuvinteCheie)
{
	$root_f = '/college-website/'; //'http://students.info.uaic.ro/~paul.nechifor/';

	if ($titlu=='') $titlu = 'Paul R. Nechifor';
	if ($descriere=='') $descriere = 'Saitul personal al lui Paul Nechifor.';
	if ($cuvinteCheie=='') $cuvinteCheie = 'Paul Nechifor, sait personal';

	print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<title>'.$titlu.'</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Paul Nechifor" />
	<meta name="copyright" content="&copy; 2008 Paul Nechifor" />
	<meta name="description" content="'.$descriere.'" />
	<meta name="keywords" content="'.$cuvinteCheie.'" />
	<meta name="generator" content="Scris cu mâinile" />
	<meta name="editor" content="Dreamweaver CS3" />
	<meta name="robots" content="all" />
	<meta name="date" content="'  .date('Y-m-d') . 'T' . date('H:i:s').'+02:00'.  '" />
	<link href="'.$root_f.'stil.css" rel="stylesheet" type="text/css" />
	<!-- <link type="image/png" href="/favicon.png" rel="shortcut icon" /> -->
</head>

<body>
	<div id="margine_st"></div>
	<div id="centrat">
		<div id="antet"><h1 class="del">Paul R. Nechifor</h1></div>
        <div id="meniu">
        <h3 class="del">Meniu</h3>
        <ul>
        	<li><a href="'.$root_f.'index.php" id="prima_pagina"><span class="ascunde">Prima pagină</span></a></li>
            <li><a href="'.$root_f.'despre_mine.php" id="despre_mine">Despre mine</a></li>
            <li><a href="http://sudociteste.blogspot.com/" id="blog">Blog</a></li>
            <li><a href="'.$root_f.'galerie.php" id="galerie">Galerie</a></li>
            <li><a href="'.$root_f.'proiecte.php" id="proiecte">Proiecte</a></li>
            <li><a href="'.$root_f.'contact.php" id="contact">Contact</a></li>
        </ul>
        </div>
		<div id="continut">
			<div id="scris">';
}
?>
