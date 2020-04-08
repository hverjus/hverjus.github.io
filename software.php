
<?php

include("functions.php");
headHVE();
bodyTop();
beginMainContent();
menu("Software");

?>

<div id="pageContent">

<i>Still under construction</i>
	
<h2>Transreco</h2>
<p>
Olivier Hotel and I developped <b>Transreco</b>, a tourism services recommender system software application. This recommender system has been proposed in the context of the Transfrontour Interreg project. <a href="https://youtu.be/ko44MgiXqqg" target="_blank">A demonstration video illustrating the software application can be found here</a>.
</p>

<h2>SEMAT with Pharo and Seaside</h2>
<p>
A first implementation of the <a href="http://semat.org" target="_blank">SEMAT method</a> in Pharo and Seaside.
</p>

<h2>Nimrod</h2>
<p>
I developped a software architecture development environment called <b>Nimrod</b>. Nimrod proposes a meta-model for defining more specific software <i>architectural meta-models</i> from which <i>architectural models</i> can be expressed. <b>Nimrod ADL</b> is a language for expressing and representing architectures (and architectural artefacts). Nimrod is a novel environment allowing to express software architecture (component types and configurations, components and connections) and allows to <b>execute</b> and <b>dynamically evolve</b> architectures. Nimrod ADL combines strengths of ADLs and strengths of OOPLs. Nimrod ADL syntax is based on OOPL Smalltalk as it is simple, powerfull and dynamic.
Nimrod environment has been primarily developped using Cincon VisualWorks Smalltalk and works now with <a href="http://pharo-project.org" target="_blank">Pharo</a>.  
</p>
<p>Nimrod is now working with <a href="http://moose.unibe.ch/">Mondrian</a> that allows to visualize software architectures expressed using Nimrod ADL. Mondrian helps user in software architecture comprehension. I would like to thank Tudor Girba for his support.
</p>
<h2>ArchWare Animator</h2>
<p>
I contribute to the development of a software architecture animator for
which the main contributor is Fr&eacute;d&eacute;ric Pourraz.
The
animator provides a <b>graphical and animated rendering of a software architecture
description </b> expressed using a pi-calculus based ADL (<a
 href="./research.php#ArchWare-ADL">ArchWare ADL</a>). Our animator
is built on top of&nbsp;<a
 href="http://www.cs.sunysb.edu/%7Elmc/mmc/" target="_blank">MMC</a>
(MMC is an explicit-state, local model checker for pi-calculus). Our animator is a client-server application, developped using Java and
XSB Prolog. You may obtain a version of the animator (MS-Windows, Mac
OS X and Linux platforms supported), by sending us an <a
 href="mailto:herve.verjus@univ-savoie.fr">email</a>.
It is not entirely finalised and has some limitations but supports most
of the ArchWare ADL concepts.
<br />
<br />This prototype has been developped in the context of the <a href="./projects.php/">ArchWare and WebWare</a> projects.
</p>

<p>
<b>The last ArchWare-ADL Animator (R2)</b> for the 2.6 linux kernel has been released (<a href="http://univ.herveverjus.com/software/ArchWareAnimatorR2-final.tar.gz">upload the file</a>, uncompress it, read the INSTALL.txt file and follow the instructions).
</p>

<h2>PIE software</h2>
<p>
I was the main contributor in the development of a process software monitoring tool suite. There were three tools written in Java (no more maintained, no more available):
<lu>
<li>the monitoring support that monitored software processes during their execution, compute some performance indicators based on fuzzy logic;</li>
<li>the decision support that provided to the project manager decisions according to the monitoring performance indicators values;</li>
<li>the change support that implements (or not) changes to the executing processes (instances) and/or process models thanks to the decisions taken.</li>
<br />These prototypes have been developped (with Sorana C&icirc;mpan and Ilham Alloui) in the context of the <a href="./projects.php/">PIE</a> project.   

<p class="img">
<img style="width: 201px; height: 167px;" alt="" src="./img/first_four.gif">
<br />
Four first computer scientist women</img>
</p>

I developped or contributed to the development of several other software applications (mainly for SME or small organizations) outside the academia world...in another life.
</div>

<?php

endMainContent();
footer("./software.php");

?>