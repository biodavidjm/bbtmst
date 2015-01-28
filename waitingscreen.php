<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link REL="SHORTCUT ICON" HREF="http://tanto.bioengr.uic.edu/bbtmst/favicon.ico">
<title>bbTM Blast Process</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style3 {color: #FF3300}
.style4 {font-size: 12px}
.style5 {font-size: 12px; font-weight: bold; color: #990000; }
.style6 {font-size: 10px}
.style7 {
	font-size: 14px;
	color: #999999;
}
.style8 {
	font-size: 18px;
	font-weight: bold;
	color: #993300;
}
.style10 {font-size: 18px; font-weight: bold; color: #006699; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>

<body>

Waiting For BLAST Results,
<br>
Please Be patient

<?php

	$file = $_GET['file'];
	$ifile = substr($file, 3);
	$retval = $_GET['val'];
	echo "$cmd\n";
	echo "$blastres\n"; 
	header ( 'Location: bbtmstool.php?val=' . $retval . '&file=' . $ifile);
?>

</body>
</html>

