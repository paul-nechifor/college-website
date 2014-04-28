<?php
require '../../include/antet.php';
afiseazaAntet('Se termina &icirc;n... (Paul Nechifor)', 'Script Python pentru afisarea denumirilor cu-n anumit sufix creat de Paul Nechifor', 'Paul Nechifor, sufix, telefoane, baza de date, nume, prenume');
?>

<h3>Se termina &icirc;n...</h3>

<p>Afi&#351;eaz&#259; denumirile care se termin&#259; &icirc;ntr-un sufix dat. Am f&#259;cut <em>micro-scriptul</em> &#259;sta pentru a fi folosit cu lista de nume &#351;i prenume extras&#259; de mine dintr-o baz&#259; de date a unui program de numere de telefoane rom&acirc;ne&#351;ti.</p>
<p><a href="nume.txt">nume.txt</a> (145142 de denumiri - 1314 KiB)<br /><a href="prenume.txt">prenume.txt</a> (41630 de denumiri - 352 KiB)</p>
<p> Baza de date respectiv&#259; con&#355;inea la nume &#351;i prenume denumirea unor firme. De&#351;i am scos cele mai multe astfel de firme este posibil s&#259; mai fie nume de firme &icirc;n aceste liste. Listele con&#355;in &#351;i foarte multe denumiri str&#259;ine pentru c&#259; nu am cum s&#259; le elimin. Po&#355;i vedea numele de familie care se termin&#259; &icirc;n &quot;<a href="escu.html">escu</a>&quot; extrase cu scriptul &#259;sta. </p>

<div class="highlight"><pre><span class="n">lista</span> <span class="o">=</span> <span class="nb">raw_input</span><span class="p">(</span><span class="s">&quot;Cum se numeste fisierul cu lista: &quot;</span><span class="p">)</span>
<span class="n">sufix</span> <span class="o">=</span> <span class="nb">raw_input</span><span class="p">(</span><span class="s">&quot;Ce sufix vrei: &quot;</span><span class="p">)</span><span class="o">.</span><span class="n">upper</span><span class="p">();</span>
<span class="n">fisier</span> <span class="o">=</span> <span class="nb">raw_input</span><span class="p">(</span><span class="s">&quot;In ce fisier sa fie salvata lista: &quot;</span><span class="p">)</span>

<span class="n">f</span> <span class="o">=</span> <span class="nb">open</span><span class="p">(</span><span class="n">lista</span><span class="p">,</span><span class="s">&quot;r&quot;</span><span class="p">)</span>
<span class="n">g</span> <span class="o">=</span> <span class="nb">open</span><span class="p">(</span><span class="n">fisier</span><span class="p">,</span><span class="s">&quot;w&quot;</span><span class="p">)</span>

<span class="n">linie</span> <span class="o">=</span> <span class="n">f</span><span class="o">.</span><span class="n">readline</span><span class="p">()</span>
<span class="k">while</span> <span class="n">linie</span><span class="p">:</span>
    <span class="k">if</span> <span class="n">linie</span><span class="p">[</span><span class="o">-</span><span class="nb">len</span><span class="p">(</span><span class="n">sufix</span><span class="p">)</span><span class="o">-</span><span class="mi">1</span><span class="p">:</span><span class="o">-</span><span class="mi">1</span><span class="p">]</span> <span class="o">==</span> <span class="n">sufix</span><span class="p">:</span>
        <span class="n">g</span><span class="o">.</span><span class="n">write</span><span class="p">(</span><span class="n">linie</span><span class="p">)</span>
    <span class="n">linie</span><span class="o">=</span><span class="n">f</span><span class="o">.</span><span class="n">readline</span><span class="p">()</span>

<span class="n">f</span><span class="o">.</span><span class="n">close</span><span class="p">();</span> <span class="n">g</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
<span class="k">print</span> <span class="s">&quot;Am terminat!&quot;</span>
</pre></div>

<?php
require '../../include/subsol.php';
afiseazaSubsol();
?>
