
<?php

include("./functions.php");
headHVE();
bodyTop();
beginMainContent();
menu("Teaching");

?>

<div id="pageContent">

    <h1>Introduction to algorithms and programming (aka. Informatique 1)</h1>

<ul>
    <li>September-December</li>
    <li>86H (Part 1: 50H - Instructor: Herv&eacute; Verjus / Part 2: 36H - Instructor: Luc Damas)</li>
    <li>Location: IAE (Annecy-le-Vieux Campus)</li>
</ul>

<h2>Course Description</h2>
    This course has two parts: one that deals with concepts, methodology and practice of algorithms design and programming and a second that focuses on Web technologies and programming. Both of them are introductory lectures and target beginners in software programming and software (or software sensitive systems) engineeering. This course is also available for non IT curriculum students who want to learn and would like some knowledge in software programming and/or problem-solving approach (i.e. I am convinced such knowledge is interesting and usefull for most of the students, whatever their specialities or business domains are). 
<p>
    The course combines both theorical and practical aspects. The part dealing with algorithms and programming introduces algorithm fundaments in a problem-solving perspective. Abstract data types, (tail) recursion, sequential data structures (lists, queues, stacks); data structures sort algorithms are studied during the course.
The course is based on a functional programming language named <i>Racket</i> a successor of Scheme, itself a LISP dialect. Students have to learn Racket during the semester. The part dealing with Web technologies is less theorical and focuses on the Web technologies fundaments (i.e. introduction to HTML, CSS, Static vs. Dynamic Web App., Javascript); it also covers Web apps good practice design.
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

This course has no specific prerequisite except from basic mathematical background and notations that are required.

<h2>Reading</h2>

I'll give to students a small document that briefly introduces Racket. This document also contains all the required references, links to the documentation the students have to read and deal with.
<p>Students are encouraged (sometimes obliged) but not limited to read parts of the following books:</p>
<ul>
    <li>H. Abelson, J. Sussman, Structure and Interpretation of Computer Programs, MIT Press.</li>
    <li>R. K. Dybvig, The Scheme Programming Language, MIT Press.</li>
    <li>T. Cormen, C. Leiserson, R. Rivest, Introduction &agrave; l'algorithmique, Dunod Ed.</li>
    <li>J. Charazin, Programmer avec Scheme, Thomson Publishing.</li>
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
