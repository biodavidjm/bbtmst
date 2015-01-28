#!/usr/bin/perl

#fasta.pl 
#Bogus script for bbtms

$file = @ARGV[0];
$flag = 0;
open (FILE, $file) or die("cannot open file $file\n");

while (<FILE>) {
	$line = $_;
	if ($line =~ m/fasta/) {close FILE; $flag = 1}
}
close FILE;
if ($flag == 1) {print "true";}
else {print "ERROR: etc.";}
