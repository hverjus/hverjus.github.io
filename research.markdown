---
layout: page
title: research
permalink: /research/
---
I am a [LISTIC-Polytech Annecy-Chambéry Lab.](http://www.listic.univ-savoie.fr/) permanent staff member. Our works' topics include software architectures, architecture extraction and refactoring, distributed systems and SOA, multi-agent systems under angle of their **evolution**. The LISTIC lab. widely addresses information processing, fusion and engineering with special emphasis intelligent instrumentation, image processing, software engineering and software-based systems, industrial performance evaluation and industrial components. We are now promoting **_Services Sciences_** and are interested in _Cloud Computing_.  

My research interests:<lu class="bold">*   Information fusion software systems for (human) decision-making under uncertainty*   Business Process Management and Business Process Management Systems*   SOA and Web services-based systems*   Software Architecture*   Evolvable Information System architectures*   Model Driven Engineering*   Software Process Engineering*   COTS-based systems and EAI architectures</lu>  

### Information fusion software systems for (human) decision-making under uncertainty

Recently, we are targeting software-intensive information fusion systems that assist human in the decision-making. We design software information fusion applications that deal with uncertain contexts such as environmental and outdoor situations.

### Services Oriented Architectures (SOA)

How can we design, enact and monitor evolvable SOAs? Our work aims at providing an engineering environment for designing and enacting SOAs. Our approach is an architecture-centric formal approach. We provide a layered language formally based on pi-calculus and a SOA dedicated language (our first layered and SOA-domain specific language was called pi-Diapason - the new one is called PXL and introduced the timed pi-calculus) that allows an SOA expert to formalize Web Services orchestrations using a high level and powerful services orchestration specific language (the pi-calculus layer is hidden to the end user). An SOA designed using our language can be then deployed as a new Web service that also can be re-used "as is" in another SOA. The PXL language focuses on Web services orchestration by supporting most of the well-known orchestration patterns. As SOAs are formally designed, they can be verified against structural, behavioural (i.e. composition/orchestration) specific properties. We are aiming at studying domain-specific properties and QoS that could be expressed in our properties definition language, Diapason*, and then verified. Once verified, orchestration is executed with a PXL interpreter (avoiding to transform the design to another language - i.e. BPEL4WS, etc.). The engineering environment (called Diapason) integrates some tools for designing, enacting and checking SOAs. As PXL is based on pi-calculus, it provides mechanisms in order to support orchestration dynamic evolution. An evolution expressed in PXL is made "on the fly" because PXL interpreter integrates mechanisms in order to support orchestration state consistency while dynamic evolution. PXL has a XML concrete notation and is defined with XML Schemas. Contact us for more information.

### Software Architecture

We focus on software system formalization basically using a software architecture-centric approach. We have defined an **ADL** (Architecture Description Language), called <a name="Archare-ADL">ArchWare-ADL</a>. This formal language based on pi-calculus is a layered language (with specific constructs according to first order layer, high order layer, etc.). It allows us to define architectural properties (with some specific constructs based on first order logic and mu-calculus) and architectural styles (it provides architect specific styles mechanisms). In our approach, processes are also taken into account as process models are considered as part of architectures models (processes being basically architectural behaviour). ArchWare-ADL offers several notations : a concrete textual notation, an XML-based one and a graphical UML-based one. We also contribute to architecture-centric development environment tools. I am currently developing a software architecture development environment called **[Nimrod](./software.php)**. We study **software intensive system architectures** (like information systems, manufacturing systems, BPMS, EAI solutions, Grid-based applications, etc.) with special emphasis on their formalization and evolution (i.e. evolution addressed at the architectural level). The ArchWare centric development process is a "kind of" **model driven development process** where architecture models are refined from abstract level to concrete level, using model transformations (i.e. refinement language, rewriting language,...).  

How can we improve languages to support evolution? We are working on the fundamental aspects of **Architecture Description Languages (ADLs)**:<lu>*   dynamic and formal ADLs. We investigate on dynamic ADLs that have formal foundations - we use pi-calculus as such fundations.*   architectural structure. We study architectural structure and composition mechanisms in order to improve evolution. Find the best architectural structure against the evolution support ? We provide architectural elements that manages evolution. We call them choreographer, evolver.</lu>

We are now applying our architecture-centric approach to sensors/actuators networks...it is a first attempt and hope we will able to tell you more in a next future ;-)

### Publications

Most of my publications are referenced:

*   [on the USMB HAL open archives](http://hal.univ-smb.fr/search/index/q/verjus/docType_s/ART+OR+COMM+OR+COUV+OR+OTHER+OR+OUV+OR+DOUV+OR+UNDEFINED+OR+REPORT+OR+THESE+OR+HDR+OR+LECTURE/submitType_s/file+OR+notice/sort/producedDate_tdate+desc/).
*   some of them are on [HAL French open archives](http://haltools.archives-ouvertes.fr/Public/afficheRequetePubli.php?auteur_exp=VERJUS&labos_exp=LISTIC&typdoc=%28%27ART_ACL%27,%27COMM_ACT%27,%27OUVS%27,%27COVS%27%29&CB_auteur=oui&CB_titre=oui&CB_article=oui&langue=Francais&tri_exp=annee_publi&tri_exp2=typdoc&tri_exp3=date_publi&ordre_aff=TA&Fen=Aff&css=../css/VisuRubriqueEncadre.css).

### Community

I am (or was) a member of:<lu>*   CNRS GDR GPL, Research Working Groups RIMEL and COSMAL.*   the board of the french Digital League (past name "Cluster Edit"):an Auvergne Rhône-Alpes french consortium grouping all the Auvergne Rhône-Alpes software companies, and I am also involved in the R&D and innovation board.*   the french GDR I3 (Information, Interaction, Intelligence), Working Group on Web Services - NRS STIC department. The working group topics covered web services modelling and web semantic, services discovery and services composition (this group is now closed).*   the ERCIM Workging Group on Software Evolution.*   the European ESPRIT Working Group 21185 - PROMOTER 2 (Process Modelling Techniques / 1998-2001).</lu>

I am (or was) in the following International Conference Program Committees: I3E, BIS, ICEBE, CBI, CEC, ICIM, ISWT.

I am (or was) a reviewer for _Journal Software: Practice and Experience (Wiley)_, _JSS (Journal of Systems and Software)_, ICSM 2006 and 2007, _MODELS/UML 2006 and 2007_, _CAL'06_, _ICSM'06_, _SPW/Prosim 2006_, _CMSR 2006_, _ICSM 2005_, _UML/MODELS 2005_, WRCE 2005\.

I was a program committee member of the IEEE Software (special issue entitled "Realizing Service Centric Software Systems"), _Journées Composants 2006_ in France and the _"Conception des systèmes d'information et services web" Workshop_ (co-located with _INFORSID 2006_ - Tunisia).

I co-organized [ESUG](http://www.esug.org) 2013 Conference in Annecy-le-Vieux.

I co-orgnized a research working day of the CNRS GDR GPL RIMEL Research Group in Annecy-le-Vieux.

I was an organizing committee member of the Eighth European Agent Systems Summer School (EASSS 2006), Annecy, France, July 2006.

I was an organizing committee member of the Journées Francophones sur les Systèmes Multi-Agents (JFSMA 2006), Annecy, France, October 2006.

I co-organized with Stéphane Ducasse a conference about "New features in Java 7 and C# 3.0". [Dr. Gilad Bracha](http://bracha.org/Site/Home.html), a computational theologist with Sun Java SE (Sun Microsystems) and Dr. Mads Togersen (Microsoft Corporation) were the two invited speakers, Annecy, France, February 2006.

I was in organizing comittee of the European Workshop on Software Process Technology (EWSPT 2003) helding in Helsinki, Finland, September 2003\. I was session chair during the workshop.
