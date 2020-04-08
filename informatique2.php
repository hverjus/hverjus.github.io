
<?php

include("./functions.php");
headHVE();
bodyTop();
beginMainContent();
menu("Teaching");

?>

<div id="pageContent">

    <h1>Informatique 2</h1>

<ul>
    <li>January-March</li>
    <li>90H (Part 1: 48H - Instructor: Herv&eacute; Verjus / Part 2: 26H - Instructor: Flavien Vernier / Part 3: 16H - Instructor: Marc-Philippe Huget)</li>
    <li>Location: IAE (Annecy-le-Vieux Campus)</li>
</ul>

<h2>Course Description</h2>
    This course has three parts: one that deals with concepts, methodology and practice of object-oriented design and programming, another part that extends the Informatique 1 course with tree and graph data structures and algorithms, and a third part that provides some other materials on Web technologies. This course is a continuation of the <a href="./informatique1.php">Informatique 1 course</a>.

The part focusing on object oriented design and programming is an introductory lecture and target beginners in software programming (or software sensitive systems) engineeering. Thus, this course is also available for non IT curriculum students (i.e. I am convinced such knowledge is interesting and usefull for most of the students, whatever their specialities or business domains are). 

<p>
    The course combines both theorical and practical aspects. 

  The oriented design and programming part uses the <i>Pharo</i> language as a Smalltalk 80 descendant language. Concepts such as class, objects, message, method invocation, instanciation mechanism, inheritance, association, polymorphism are introduced during the lectures. UML notation and specifically class diagram are basically used during the sessions. Students have to learn Pharo during the semester.
  <br />
The algorithm and programming part is based on a functional programming language named <i>Racket</i> a successor of Scheme, itself a LISP dialect. Students have to learn Racket during the semester. 
  <br />
The part dealing with Web technologies is less theorical and mainly addresses Javascript frameworks; it also covers Web apps good practice design.
</p>

<p>The course and all the sessions and talks are in french but assignments and homeworks can be made and are accepted in english (foreign students are welcome).
</p>

<h2>Evaluation and Graduation</h2>

    Evaluation combines final examination and continuous evaluation: continuous evaluation will be based on class participation, assignments, exercice and programming sessions, homeworks, sometimes oral presentations and open-ended final project(s). A final examination is organized in the end of the semester.
Final grades will computed as a weighted average: 
<ul>
  <li>50% final examination and</li>
  <li>50% continuous evaluation and assignments</li>.
</ul>

<h2>Prerequisites</h2>

The object oriented design and programming part has no specific prerequisite. At the opposite, the second and third parts required students already have some basic knowledge in programming (at least, they followed the <a href="./informatique1.php">Informatique 1 course</a>).

<h2>Reading</h2>

I'll give to students a small document that briefly introduces Racket. This document also contains all the required references, links to the documentation the students have to read and deal with.
<p>Students are encouraged (sometimes obliged) but not limited to read parts of the following books:</p>
<ul>
    <li>H. Abelson, J. Sussman, Structure and Interpretation of Computer Programs, MIT Press.</li>
    <li>R. K. Dybvig, The Scheme Programming Language, MIT Press.</li>
    <li>T. Cormen, C. Leiserson, R. Rivest, Introduction &agrave; l'algorithmique, Dunod Ed.</li>
    <li>J. Charazin, Programmer avec Scheme, Thomson Publishing.</li>
    <li>B. Meyer, Conception et programmation orient&eacute;es objet, Eyrolles.</li>
    <li>X. Briffault, G. Sabah, Smalltalk Programmation orient&eacute;e objet et d&eacute;veloppement d'applications, Eyrolles.</li>
    <li>A. P. Black, S. Ducasse, O. Nierstrasz, D. Pollet, D. Cassou, M. Denker, Pharo by Example, Square Bracket Associates.</li>
    <li>P. Wang, S. Katila, P.S. Wang, An introduction to Web design + programming, Courses Technology.</li>
</ul>

<h2>Lateness</h2>
    Late homework will be accepted with a penalty of 3 points (out of a total of 20) per day (or partial day). For example, homework may be submitted up to 5:00pm on Tuesday for a 3 points penalty, 5:00pm on Wednesday for a 6 points penalty, and so on.

<h2>Honesty, Ethics,...</h2>

    Collaboration on homework is encouraged. Students are also free to consult any outside sources such as tutorials, books, or wikis, and to seek help from sources (forums, irc channels, mailing lists,...).

However, the following restrictions apply: you <b>must</b> cite any people or resources you consulted in completing an assigment. For example, at the end of an assignment you might write something like:

<i>""I collaborated with Sophie Smith and Kevin Guy on this assignment, received help from aplisson on the #racket mailing lists and from  on the PLT-Racket forum, and consulted http://...""
</i>
<p>
Don't forget to cite and indicate the complete bibliography and references. <b>Don't copy and paste</b> any portion of text, image, without explicitly cite the source and without to have the required rights (author authorization for images, videos,...that are copyrighted).
</p>

<p>
  <i>Some of materials in this page are adapted from the Brent Yorgey course Web pages (School of Engineering and Applied Science, Univ. of Penn.).</i>
</p>

</div>


<?php

endMainContent();
footer("teaching.php");

?>
