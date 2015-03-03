#!/usr/bin/perl -w
use strict;

# David Jimenez Morales
# @ davidjm scripts
# Script birth date: 03/31/2011
#
# ------Description --------------------------------------------------#
#
# A very elegant script that checks the fasta format for a given file
#
# --------------------------------------------------------------------#

# Check arguments
my $command = "checkFastabbtm.pl";
if (@ARGV !=1) 
{
	print "ERROR:  NO INPUT FILE------\n";
	exit;
}

my $filename = $ARGV[0];
chomp($filename);

# Double Check the file is not empty (just in case)
my $size = -s $filename;
if ($size == 0) 
{
	print "ERROR: please, provide a FASTA sequence\n";
	exit;
}

my $file = open_file($filename);
my $record = '';
my $id = '';
my $protein = '';
my %entirefile = ();
my $cc = 0;

while ($record = get_next_record($file))
{
#	print "Here we are \n".$record."\nToma ya\n";
	if ($record !~ />/)
	{
		print "ERROR: Description Line missing\n";
		exit;
	}
	else
	{
		my @breaking = split (/\n/,$record);
		(%entirefile) = getFastaInLine(@breaking);
	}
}

print "GOOD: The file seems to be all right!\n";

exit;

# S U B F U N C T I O N S #-#-#-#-#-#-#-#-#-
# ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
sub get_next_record
{
	my($fh) = @_;
	my ($offset);
	my ($record) = '';
	my ($save_input_separator) = $/;
	
	$/ = "//\n";
	$record = <$fh>;
	
	$/ = $save_input_separator;

	return $record;
}

#OPEN FILE to a SCALAR
sub open_file
{
	my($filename) = @_;
	my $fh;

	unless (open ($fh, $filename))
	{
		print "ERROR: The file $filename Cannot be opened \n";
		exit;
	}
	
	#Check if empty
	my $size = -s $fh;
	if ($size == 0) 
	{
		print "ERROR: The file '$filename' is empty\n";
		exit;
	} 
	return $fh;
}

# GETFASTAINLINE
# Open the file, get the IDs and Sequences in a single line
# and return a hash with everything.
sub getFastaInLine
{
	my(@filename) = @_;
	my $fh;

	my %hash = ();
	my $key ='';
	my $seq ='';
	my $c = 0;
	my $flag = 0;
	foreach my $entry (@filename)
	{
		#print $entry."\n";
		if ($entry =~ />/)
		{
			if ($entry =~ /^>(.*)/)
			{
				$c++;
				my $seqname = $1;
				if ($seqname !~ /^\S+/)
				{
					print "ERROR: this description line is empty!\n";
					exit;
				}
				$key = $entry;
				$flag = 1;
			}
			else
			{
				print "ERROR: Problem with the 'Description' line!!!!\n";
				last;
			}
			next;
		}
		if($flag == 1 )
		{
			$seq = $entry;
			$hash{ $key } .= $seq;
		}
		else
		{
			print "ERROR: I'm not getting in the first line, the > symbol\n";
			exit;
		}
	}
	
	my $onlyonesequence = keys %hash;
	if ($onlyonesequence != 1)
	{
		print "ERROR: we accept only one sequence per BLAST search!\n";
		exit;
	}
	
	my $fcc = 0;
	my $oldlen = 0;
	my $newlen = 0;
	while (my ($key, $value) = each(%hash))
	{
		$fcc++;
#    	print $key."\n".$value."\n";
    	if ($fcc == 1)
    	{
    		my $size = length($value);

    		if($size < 20)
    		{
    			print "ERROR: We take only sequences larger than 20 amino acids. We apologize for this inconvenience\n";
    			exit;
    		}
    		
    		CheckProtein($value);
    		last;
    	}
	}
	
	return (%hash);
}

# CheckProtein
# Check that the characters are the ones allowed in a protein fasta file
sub CheckProtein   
{
     my($protein) = @_;
# For those programs that use amino acid query sequences 
# (BLASTP and TBLASTN), the accepted amino acid codes are:

#		A  alanine               P  proline       
#		B  aspartate/asparagine  Q  glutamine      
#		C  cystine               R  arginine      
#		D  aspartate             S  serine      
#		E  glutamate             T  threonine      
#		F  phenylalanine         U  selenocysteine      
#		G  glycine               V  valine        
#		H  histidine             W  tryptophan        
#		I  isoleucine            Y  tyrosine
#		K  lysine                Z  glutamate/glutamine
#		L  leucine               X  any
#		M  methionine            *  translation stop
#		N  asparagine            -  gap of indeterminate length


#		APBQCRDSETFUGVHWIYKZLXM\*N-
#		Old list: [ABCDEFGHIKLMNPQRSTUVWYXZ_]

     #Initialize variable
     my($aminoacid) = '';
     my(@protein) = split ('', $protein);
     foreach $aminoacid (@protein)     
     {
     	unless($aminoacid =~/[APBQCRDSETFUGVHWIYKZLXMN\-\_\s]/ig)     
		{
              print "ERROR: <$aminoacid> is not an actual amino acid!\n";
              exit;
		}
     }
}
