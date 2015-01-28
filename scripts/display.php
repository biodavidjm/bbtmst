<?php
#********************************
#fproc.pl
#processes fasta input from bbtmstool.html and runs the file through
#the bbtms scripts
#returns true or false and a file name
#********************************
$fasta = $_POST['fasta'];
$file = "../tmp/file.txt";
$ofile = "tmp/file.txt";
$Saved_File = fopen($file, 'w');
fwrite($Saved_File, $fasta);
fclose($Saved_File);


##### Fasta Check ######

$cmd = "./fastatest.pl ../tmp/file.txt";
$output = "true";
header ( 'Location: ../bbtmstool.php?val=' . $output . '&file=' . $ofile);
?>
