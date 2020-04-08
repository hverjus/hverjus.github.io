
<?php

include("functions.php");
headHVE();
bodyTop();
beginMainContent();
menu("Research");

?>

<div id="pageContent">

  I am a <a target="_blank" href="http://www.listic.univ-savoie.fr/">LISTIC-Polytech Annecy-Chamb&eacute;ry Lab.</a> permanent staff member. Our works' topics include software architectures, architecture extraction and refactoring, distributed systems and SOA, multi-agent systems under angle of their <b>evolution</b>. The LISTIC lab. widely addresses information processing, fusion and engineering with special emphasis intelligent instrumentation, image processing, software engineering and software-based systems, industrial performance evaluation and industrial components. We are now promoting <b><i>Services Sciences</i></b> and are interested in <i>Cloud Computing</i>.
<br />
<br />
My research interests:
<lu class="bold">
  <li>Information fusion software systems for (human) decision-making under uncertainty</li>
  <li>Business Process Management and Business Process Management Systems</li>
  <li>SOA and Web services-based systems</li>
	<li>Software Architecture</li>
  <li>Evolvable Information System architectures</li>	
	<li>Model Driven Engineering</li>
	<li>Software Process Engineering</li>
	<li>COTS-based systems and EAI architectures</li>
</lu>
<br />
<h3>Information fusion software systems for (human) decision-making under uncertainty</h3>
  Recently, we are targeting software-intensive information fusion systems that assist human in the decision-making. We design software information fusion applications that deal with uncertain contexts such as environmental and outdoor situations.
  
<h3>Services Oriented Architectures (SOA)</h3>
  How can we design, enact and monitor evolvable SOAs? Our work aims at providing an engineering environment for designing and enacting SOAs. Our approach is an architecture-centric formal approach. We provide a layered language formally based on pi-calculus and a SOA dedicated language (our first layered and SOA-domain specific language was called pi-Diapason - the new one is called PXL and introduced the timed pi-calculus) that allows an SOA expert to formalize Web Services orchestrations using a high level and powerful services orchestration specific language (the pi-calculus layer is hidden to the end user). An SOA designed using our language can be then deployed as a new Web service that also can be re-used "as is" in another SOA. The PXL language focuses on Web services orchestration by supporting most of the well-known orchestration patterns. As SOAs are formally designed, they can be verified against structural, behavioural (i.e. composition/orchestration) specific properties. We are aiming at studying domain-specific properties and QoS that could be expressed in our properties definition language, Diapason*, and then verified. Once verified, orchestration is executed with a PXL interpreter (avoiding to transform the design to another language - i.e. BPEL4WS, etc.). The engineering environment (called Diapason) integrates some tools for designing, enacting and checking SOAs. As PXL is based on pi-calculus, it provides mechanisms in order to support orchestration dynamic evolution. An evolution expressed in PXL is made "on the fly" because PXL interpreter integrates mechanisms in order to support orchestration state consistency while dynamic evolution. PXL has a XML concrete notation and is defined with XML Schemas. Contact us for more information.

<h3>Software Architecture</h3>
  We focus on software system formalization basically using a software architecture-centric approach. We have defined an <b>ADL</b> (Architecture Description Language), called <a name="Archare-ADL">ArchWare-ADL</a>. This formal language based on pi-calculus is a layered language (with specific constructs according to first order layer, high order layer, etc.). It allows us to define architectural properties (with some specific constructs based on first order logic and mu-calculus) and architectural styles (it provides architect specific styles mechanisms). In our approach, processes are also taken into account as process models are considered as part of architectures models (processes being basically architectural behaviour). ArchWare-ADL offers several notations : a concrete textual notation, an XML-based one and a graphical UML-based one. We also contribute to architecture-centric development environment tools. I am currently developing a software architecture development environment called <b><a href="./software.php">Nimrod</a></b>. We study <b>software intensive system architectures</b> (like information systems, manufacturing systems, BPMS, EAI solutions, Grid-based applications, etc.) with special emphasis on their formalization and evolution (i.e. evolution addressed at the architectural level). The ArchWare centric development process is a "kind of" <b>model driven development process</b> where architecture models are refined from abstract level to concrete level, using model transformations (i.e. refinement language, rewriting language,...).
<br><br>
How can we improve languages to support evolution? We are working on the fundamental aspects of <b>Architecture Description Languages (ADLs)</b>:
<lu>
 <li>dynamic and formal ADLs. We investigate on dynamic ADLs that have formal foundations - we use pi-calculus as such fundations.</li>
 <li>architectural structure. We study architectural structure and composition mechanisms in order to improve evolution. Find the best architectural structure against the evolution support ? We provide architectural elements that manages evolution. We call them choreographer, evolver.</li>
</lu>
<p>
  We are now applying our architecture-centric approach to sensors/actuators networks...it is a first attempt and hope we will able to tell you more in a next future ;-)
</p>


<h3>Publications</h3>
Most of my publications are referenced:
  <ul>
   <li><a href="http://hal.univ-smb.fr/search/index/q/verjus/docType_s/ART+OR+COMM+OR+COUV+OR+OTHER+OR+OUV+OR+DOUV+OR+UNDEFINED+OR+REPORT+OR+THESE+OR+HDR+OR+LECTURE/submitType_s/file+OR+notice/sort/producedDate_tdate+desc/" target="_blank">on the USMB HAL open archives</a>.</li>
   <li>some of them are on <a href="http://haltools.archives-ouvertes.fr/Public/afficheRequetePubli.php?auteur_exp=VERJUS&labos_exp=LISTIC&typdoc=%28%27ART_ACL%27,%27COMM_ACT%27,%27OUVS%27,%27COVS%27%29&CB_auteur=oui&CB_titre=oui&CB_article=oui&langue=Francais&tri_exp=annee_publi&tri_exp2=typdoc&tri_exp3=date_publi&ordre_aff=TA&Fen=Aff&css=../css/VisuRubriqueEncadre.css" target="_blank">HAL French open archives</a>.</li>
  </ul>  

<h3>Community</h3>
I am (or was) a member of:
<lu>
  <li>CNRS GDR GPL, Research Working Groups RIMEL and COSMAL.</li>
  <li>the board of the french Digital League (past name "Cluster Edit"):an Auvergne Rh&ocirc;ne-Alpes french consortium grouping all the Auvergne Rh&ocirc;ne-Alpes software companies, and I am also involved in the R&D and innovation board.</li>
  <li>the french GDR I3 (Information, Interaction, Intelligence), Working Group on Web Services - NRS STIC department. The working group topics covered web services modelling and web semantic, services discovery and services composition (this group is now closed).</li>
  <li>the ERCIM Workging Group on Software Evolution.</li>
  <li>the European ESPRIT Working Group 21185 - PROMOTER 2 (Process Modelling Techniques / 1998-2001).</li>
</lu>
<p>
I am (or was) in the following International Conference Program Committees: I3E, BIS, ICEBE, CBI, CEC, ICIM, ISWT.
</p>
<p>
  I am (or was) a reviewer for <i>Journal Software: Practice and Experience (Wiley)</i>, <i>JSS (Journal of Systems and Software)</i>, ICSM 2006 and 2007, <i>MODELS/UML 2006 and 2007</i>, <i>CAL'06</i>, <i>ICSM'06</i>,&nbsp;<i>SPW/Prosim 2006</i>, <i>CMSR 2006</i>, <i>ICSM 2005</i>, <i>UML/MODELS 2005</i>, WRCE 2005. 
</p>
<p>
  I was a program committee member of the IEEE Software (special issue entitled "Realizing Service Centric Software Systems"), <i>Journ&eacute;es Composants 2006</i> in France and the <i>"Conception des syst&egrave;mes d'information et services web" Workshop</i> (co-located with <i>INFORSID 2006</i> - Tunisia).
</p>
<p>
I co-organized <a href="http://www.esug.org" target="_blank">ESUG</a> 2013 Conference in Annecy-le-Vieux.
</p>
<p>
I co-orgnized a research working day of the CNRS GDR GPL RIMEL Research Group in Annecy-le-Vieux.
</p>
I was an organizing committee member of the Eighth European Agent Systems Summer School (EASSS 2006), Annecy, France, July 2006.
<p>
I was an organizing committee member of the Journ&eacute;es Francophones sur les Syst&egrave;mes Multi-Agents (JFSMA 2006), Annecy,&nbsp;France, October 2006.
</p>
<p>
I co-organized with St&eacute;phane Ducasse a conference about "New features in Java 7 and C# 3.0". <a href="http://bracha.org/Site/Home.html" target="_blank">Dr. Gilad Bracha</a>, a computational theologist with Sun Java SE (Sun Microsystems) and Dr. Mads Togersen (Microsoft Corporation) were the two invited speakers, Annecy, France, February 2006.
</p>
<p>
I was in organizing comittee of the European Workshop on Software Process Technology (EWSPT 2003) helding in Helsinki, Finland, September 2003. I was session chair during the workshop.
</p>

</div>



<?php

endMainContent();
footer("research.php");

?>