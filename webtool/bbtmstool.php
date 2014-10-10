<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link REL="SHORTCUT ICON" HREF="favicon.ico">
<title>beta barrel TransMembrane Segment Search Tool</title>

<SCRIPT TYPE="text/javascript">
  <!--
  function dropdown(mySel)
  {
  var myWin, myVal;
  myVal = mySel.options[mySel.selectedIndex].value;
  if(myVal)
     {
     if(mySel.form.target)myWin = parent[mySel.form.target];
     else myWin = window;
     if (! myWin) return true;
     myWin.location = myVal;
     }
  return false;
  }

  function MM_jumpMenu(targ,selObj,restore){ //v3.0
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    if (restore) selObj.selectedIndex=0;
  }

  function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
      d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

  function MM_jumpMenuGo(selName,targ,restore){ //v3.0
    var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
  }
  //-->
</SCRIPT>

<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.style4 {
	color: #000066;
	font-weight: bold;
}
.style7 {font-size: 18px; font-weight: bold; font-style: italic; color: #000000; }
.style8 {color: #CC3300; font-size: 42px;}
.style9 {font-size: 14px}
.error {font-size:16px; color: #FF0000; font-weight: bold}
.fasta {font-size:16px; color: #339900; font-weight: bold}
.styleWaiting {
  font-size: 14px;
  color: #CC0033;
  font-style: italic;
  font-weight: bold;
}

div.showme {display:block}
div.hideme {display:none}

-->
</style>

<!--STATS-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26635029-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--STATS-->
</head>



<body>

<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a name="top" id="top"></a></td>
  </tr>
  <tr>
    <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="25%"><a href="http://www.uic.edu/uic/" target="_blank" class="style4">UIC</a></td>
        <td width="45%"><div align="center"><a href="http://gila.bioengr.uic.edu/lab/" target="_blank" class="style4">Jie Liang Lab</a></div></td>
        <td width="30%"><div align="right"><a href="http://gila.bioengr.uic.edu/lab/" target="_blank"></a><a href="http://www.bioe.uic.edu/BIOE/WebHome" target="_blank" class="style4">Department of Bioengineering</a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%"><div align="center"><img src="images/logowhite.jpg" width="158" height="100" /></div></td>
        <td width="58%"><p class="style8">bbTM-ST<br />
          <span class="style7">&beta;-Barrel TransMembrane Search Tool</span></p>          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><blockquote>
      <p><span class="style9"><strong>BLAST</strong> searches  using the  <strong>bbTM</strong> scoring matrices against the <strong>NR-NCBI database</strong>.</span></p>
    </blockquote></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26"><p><strong>&gt;<em>Transmembrane fragment search for structures of beta barrel membrane proteins with a solved structure using the bbTMout matrix: </em></strong></p>    </td>
  </tr>
  <tr>
    <td><form id="form1" name="form1">
      <label>List of PDBs</label>
      <select name="PDB-SELECT" onchange="MM_jumpMenu('parent',this,0)">
		<option>Select a beta barrel PDB:</option>
		<option value="supmat/blast2nr/in1A0S.blast2nr.bbTMout">1A0S</option>
		<option value="supmat/blast2nr/in1BXW.blast2nr.bbTMout">1BXW</option>
		<option value="supmat/blast2nr/in1E54.blast2nr.bbTMout">1E54</option>
		<option value="supmat/blast2nr/in1EK9.blast2nr.bbTMout">1EK9</option>
		<option value="supmat/blast2nr/in1FEP.blast2nr.bbTMout">1FEP</option>
		<option value="supmat/blast2nr/in1I78.blast2nr.bbTMout">1I78</option>
		<option value="supmat/blast2nr/in1K24.blast2nr.bbTMout">1K24</option>
		<option value="supmat/blast2nr/in1KMO.blast2nr.bbTMout">1KMO</option>
		<option value="supmat/blast2nr/in1NQE.blast2nr.bbTMout">1NQE</option>
		<option value="supmat/blast2nr/in1P4T.blast2nr.bbTMout">1P4T</option>
		<option value="supmat/blast2nr/in1PRN.blast2nr.bbTMout">1PRN</option>
		<option value="supmat/blast2nr/in1QD6.blast2nr.bbTMout">1QD6</option>
		<option value="supmat/blast2nr/in1QJ8.blast2nr.bbTMout">1QJ8</option>
		<option value="supmat/blast2nr/in1T16.blast2nr.bbTMout">1T16</option>
		<option value="supmat/blast2nr/in1THQ.blast2nr.bbTMout">1THQ</option>
		<option value="supmat/blast2nr/in1XKW.blast2nr.bbTMout">1XKW</option>
		<option value="supmat/blast2nr/in2F1C.blast2nr.bbTMout">2F1C</option>
		<option value="supmat/blast2nr/in2FCP.blast2nr.bbTMout">2FCP</option>
		<option value="supmat/blast2nr/in2MPR.blast2nr.bbTMout">2MPR</option>
		<option value="supmat/blast2nr/in2OMF.blast2nr.bbTMout">2OMF</option>
            </select>
		<input type="button" name="ButtonA" value="Go" onclick="MM_jumpMenuGo('PDB-SELECT','parent',0)" />
	</form></td>
  </tr>

  <tr>  </tr>

  <tr>
    <td>&nbsp;</td>
  </tr>


  <tr>
    <td height="26"><p><strong>&gt;<em>Transmembrane fragment search for human mitochondrial beta-barrel membrane proteins: </em></strong></p>    </td>
  </tr>
  <tr>
    <td><form id="form2" name="form2">
      <label>List of mitochondrial proteins / bbTM matrices:</label>
      <select name="MITO-SELECT" onchange="MM_jumpMenu('parent',this,0)">
		<option>Select a BLAST output</option>
		<option value="supmat/blast2nr/inVDAC1hum.blast2nr.bbTMout">VDAC1.bbTMout</option>
		<option value="supmat/blast2nr/inVDAC1hum.blast2nr.bbTMin">VDAC1.bbTMin</option>
		<option value="supmat/blast2nr/inVDAC1hum.blast2nr.bbTMall">VDAC1.bbTMall</option>
		<option value="supmat/blast2nr/inSAM50hum.blast2nr.bbTMout">SAM50.bbTMout</option>
		<option value="supmat/blast2nr/inSAM50hum.blast2nr.bbTMin">SAM50.bbTMin</option>
		<option value="supmat/blast2nr/inSAM50hum.blast2nr.bbTMall">SAM50.bbTMall</option>
		<option value="supmat/blast2nr/inTOM40hum.blast2nr.bbTMout">TOM40.bbTMout</option>
		<option value="supmat/blast2nr/inTOM40hum.blast2nr.bbTMin">TOM40.bbTMin</option>
		<option value="supmat/blast2nr/inTOM40hum.blast2nr.bbTMall">TOM40.bbTMall</option>
      </select>
		<input type="button" name="ButtonB" value="Go" onclick="MM_jumpMenuGo('MITO-SELECT','parent',0)" />
	</form></td>
  </tr>

  <tr>  </tr>

  <tr>
    <td></td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td><p><strong>&gt; Provide your own transmembrane segment. <br />
    </strong>      Minimal sequence length: 20 amino acids. FASTA format required. Example of FASTA format:</p>
      <blockquote>
        <p>&gt;name of the sequence<br />
        AMINQACIDSEQAENCETRANSMEMIRANESEGMENTS</p>
      </blockquote></td>
  </tr>
  <tr>
  </tr>
<?php if ($_GET["val"] == "fail") {?> 
  <tr>
      <td><span class="error"><?echo $_GET["error"]; ?> - Invalid Fasta Sequence
	</span><form action="scripts/fproc.php" method ="post">
    	<textarea rows="8" cols="50" wrap="physical" name="fasta" /></textarea>
    	<input type="submit" value="Submit again"></form>	</td>
    	
    </form> </td>
  </tr>

<?php } elseif ($_GET["val"] == "true") { ?>

  <tr>
      <td><span class="fasta">BLAST results are ready:</span>
	<br><a href="<?echo $_GET['file']?>" target="_blank">Download Results</a>
	<form name="ClearFile" action="bbtmstool.php">
    	<input type="submit" value="Clear File and refresh page"></form>	</td>
  </tr>

<?php } else { ?>

  <tr>
      <td>
	<div class="hideme" id="waiting"> 
    <p class="styleWaiting"> Job submitted: please be patient while BLAST runs</p>
    <p>(The <strong>NCBI non-redundant database</strong> is very large... and our computational power very limited)</p>
  </div>

	<form action="scripts/fproc.php" method ="post">
    	<textarea rows="8" cols="50" wrap="physical" name="fasta" /></textarea>
    	<input onclick="document.getElementById('waiting').className='showme';" type="submit" value="Submit">
    </form> </td>
  </tr>

<?php } ?>

  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
