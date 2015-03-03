#!/usr/bin/perl -w
use strict;

# David Jimenez Morales
# @ davidjm scripts
# Script birth date: 03/31/2011
#
# ------Description --------------------------------------#
#
# Run a BLAST search 
#
# --------------------------------------------------------#

# Check arguments
my $command = "runblastbbtm.pl";
if (@ARGV !=1) 
{
	print "ERROR:  where is the Input File???? ------\n";
	exit;
}

my $query = $ARGV[0];
chomp($query);

# Double Check the file is not empty (just in case)
my $size = -s $query;
if ($size == 0) 
{
	print "ERROR: please, provide a FASTA sequence\n";
}

my $output = $query.".out";

`blastall_old -p blastp -d /mnt/disk1/blastdb/nr -i $query -o $output -M BLOSUM50`;
`sed -i 's/BLOSUM50/bbTMout/g' $output`;

print "Done!\n";

exit;
