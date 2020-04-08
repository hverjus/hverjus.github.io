<?php


function headHVE() {
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
	echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";

	echo "<head>";
	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-1\" />";
	echo "<title>Dr. Herv&eacute; Verjus</title>";
	echo "<meta name=\"CREATED\" content=\"20041111;18313500\" />";
	echo "<meta name=\"Author\" content=\"Herve Verjus\" />";
	echo "<meta name=\"Robots\" content=\"all\" />";
	echo "<meta name=\"Publisher\" content=\"Herve Verjus\" />";
	echo "<meta name=\"description\" content=\"Herve Verjus Academia\" />";
	echo "<meta name=\"keywords\" content=\"herv&eacute; verjus,herve verjus,herv� verjus,herve,verjus,IAE,IMUS,LISTIC,Polytech Annecy-Chambery,Universite Savoie Mont-Blanc,Universite de Savoie,SOA,software architecture,software process,information systems,web services,evolution,software,software evolution,software scientist,computer science,informatique,progiciel,legacy system,MES,PLM\,Universit&eacute; Savoie Mont Blanc,Universite Savoie Mont Blanc\" />";
	setCSS("./css/hverj-darkblue.css");
	echo "</head>";
}

function setCSS($cssFile) {
	echo "<link title=\"Herve Verjus CSS\" rel=\"stylesheet\" href=\"$cssFile\" type=\"text/css\" />";
}

function bodyTop() {
	echo "<body>";
	echo "<div id=\"header\">";
	echo "<div id=\"headerSiteTitle\">";
	echo "<a href=\"http://www.univ-smb.fr\" target=\"_blank\"><img style=\"border: 0px solid ; width: 130px; \" alt=\"\" src=\"./img/Logo_USMB.png\">&nbsp;</img></a>Herv&eacute; Verjus</div>";
	echo "<div id=\"personalTitle\">Ma&icirc;tre de conf&eacute;rences - Associate Professor in Computer Science<br />Universit&eacute; Savoie Mont Blanc<br /><i> <b>LISTIC Lab.</b></i><br />herve.verjus@univ-smb.fr<br />http://herveverjus.c1.biz/<br />Twitter: @herveverjus</div>";
	echo "<div id=\"personalPhoto\"><img style=\"width: 165px; height: 110px;\" alt=\"\" src=\"./img/Photo4.jpg\"></img></div></div>"; //width: 110px; height: 110px
	echo "<div id=\"middleseparator\"></div>";
}

function beginMainContent() {
	echo "<div id=\"middle\">";
}

function menu($navigationTitle) {
	echo "<div id=\"menu\"><div id=\"navigationTitle\">$navigationTitle</div>";
	echo "<div id=\"menuItem\"><a href=\"./index.php\">Home</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./position.php\">Position details</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./research_.php\">Research</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./publications.php\">Publications</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./projects_.php\">Projects</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./transfer.php\">R&D - transfers</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./responsabilities.php\">Academic<br />responsabilities</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./phd-ms-students.php\">PostDoc, PhD and MS. Students</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./software.php\">Software</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./teaching.php\">Teaching</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./phd-ms-students.php\">Internship offers</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./\">Events/News</a></div>";
	echo "<div id=\"menuItem\"><a href=\"./miscellaneous.php\">Miscellaneous</a></div>";
	echo "<div id=\"menuItem\"><hr/></div>";
	echo "<div id=\"menuItem\"> <div class=\"creativeCommonsMenuItem\"><small><a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/3.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png\" /></a><br />This work is licensed under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/3.0/\">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a></small></div></div>";
	echo "<div id=\"navigationBottom\"></div></div>";


}

function endMainContent() {
	echo "</div>";
}

function footer($file) {
	echo "<div id=\"middleseparator\"></div>";
	echo "<div id=\"footer\">".lastModifiedFileDate($file)."</div>";
	echo "</body>";
	echo "</html>";
}

function lastModifiedFileDate($filename) {
	 if (file_exists($filename))
   	    return "Last modified: ".date ("F d Y", filemtime($filename));
	 else
	    return "Under construction";
}

function echoInfoCalendar() {
  echo "Feel free to contact me (email me !) for an appointment.";

}

?>
