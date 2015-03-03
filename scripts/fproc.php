<?php
#********************************
#fproc.php
#processes fasta input from bbtmstool.html and runs the file through
#the bbtms scripts
#returns true or false and a file name
#********************************

$fasta = $_POST['fasta'];
$file = "../blasts/file.txt";
$ifile = "../blasts/input001.txt";
$num = 001;

while (file_exists("../blasts/$ifile")) {
	$num = $num + 1;
	$ifile = "../blasts/input" . $num . ".txt";
} 

$ofile = $ifile . ".out";
$rfile = substr($ofile, 3, -4) . ".out";
$Saved_File = fopen($ifile, 'w');
fwrite($Saved_File, $fasta);
fclose($Saved_File);


##### Fasta Check ######

$cmd = "./checkFastaPlease.pl ../blasts/$ifile";
$output = `$cmd`;
if (preg_match("/ERROR/", $output, $matches)) {
	$retval = "fail";
	echo $output . "   on   " . $ifile;
	header ( 'Location: ../bbtmstool.php?val=' . $retval . '&error=' . $output);
}

elseif (preg_match("/Thank you/", $output, $matches)) {
	$retval = "true";
	$cmd = "rm -f $ofile";
	`$cmd`;
	// header ('Location: ../waitingscreen.php?val=' . $retval . '&file=' . $ifile);
	$cmd = "./runblastbbtm.pl $ifile";
	$blastres = `$cmd`;
	echo $output . "   Thank   " . $ifile;
	header ( 'Location: ../bbtmstool.php?val=' . $retval . '&file=' . $rfile);
}
?>
