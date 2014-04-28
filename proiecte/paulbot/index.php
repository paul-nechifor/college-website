<?php
require '../../include/antet.php';
afiseazaAntet('PaulBot', '', '');
?>

<h3>PaulBot</h3>

<p><span class="A"><span>A</span></span>cesta este un un chatterbot care învaţă din fişiere AIML (de tip XML) cum să răspundă la întrebari. Aceste fişiere au fost create pentru A.L.I.C.E. Eu am ales Chatterbean drept interpretor pentru că este scris în Java. Am început fără o bază de cunoştinţe de aceea deocamdată botul nu ştie să răspundă la prea multe întrebări. Am adaugat şi emoticon-urile buuf pentru a exprima sentimente.</p>

<applet id="ChatterApplet" name="ChatterApplet" code="bitoflife.chatterbean.ChatterBean" archive="chatterbean.jar" height="0" width="0" mayscript="true">
    <param name="context" value="context.xml" />
    <param name="splitters" value="splitters.xml" />
    <param name="substitutions" value="substitutions.xml" />
    <param name="aiml" value="brain.txt" />
</applet>
<div id="bot">
    <img id="face" name="face" src="emotions/normal.png" />
    <textarea id="response" name="response"></textarea>
    <input id="request" name="request" onKeyPress="checkEnter(event)" />
    <input id="say" value="Say!" type="button" onClick="respond()" />
    <script language="JavaScript" src="ChatterBot.js"></script>
</div>

<p>Am ales să fac botul în engleză pentru că Chatterbean se descurcă greu cu diacritice şi ar trebui să rescriu mai multe chestii pentru a merge pe română. Aşa mai am şi avantajul că pot să adaug cunoştinţe de la alţi boţi (se găsesc foarte mulţi în engleză). Acesta este un exemplu de conversaţie.</p>

<pre style="font-size:12px; margin-left:20px;">
Hello!
> tell me a joke
In C you can code your own bugs. In C++ you can inherit them.
> Tell me another joke!!!
A SQL query goes to a restaurant, walks up to 2 tables and says "Can I join you?"
> how do you do
I am not sure if I can quantify the answer.
> how do you sLeEp?
I am not sure if I can quantify the answer.
> What time is it, Paul?
It's 01:09:26.
> what is your name
My name is Paul.
> what does it mean
Paul comes from the Roman family name Paulus, which meant "small" or "humble" in Latin.
> what is your last name
My last name is Nechifor.
> do you know what it means?
Yes. Nechifor is the Romanian form of Nikephoros which means "carrying victory" in 
Greek. It comes from "nike" (victory) and "phoreo" (to carry, to bear).
> asdfasefewfasf
Uh... sorry, what?
> are you a good bot?
I don't understand!
> bad answer
Sorry. What would be a good answer?
> Yes, sir!
Alright! I got it.
> ...are you a good bot?
Yes, sir!
> bye
Bye for now! Come again soon!
</pre>

<?php
require '../../include/subsol.php';
afiseazaSubsol();
?>
