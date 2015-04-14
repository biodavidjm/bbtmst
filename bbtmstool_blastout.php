<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link REL="SHORTCUT ICON" HREF="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/stylebbtmst.css">
<meta name="description" content="Beta Barrel TransMembrane (BBTM) Search Tool (BBTM-ST)">
<meta name="keywords" content="beta,barrel,transmembrane,membrane,search,tool,bioinformatics,PLoS,one">
<meta name="author" content="David Jimenez-Morales">
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

<!--STATS-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26635029-1', 'auto');
  ga('send', 'pageview');
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
        <td width="45%"><div align="center"><a href="http://gila.bioe.uic.edu/lab/" target="_blank" class="style4">Jie Liang Lab</a></div></td>
        <td width="30%"><div align="right"><a href="http://www.bioe.uic.edu/BIOE/WebHome" target="_blank" class="style4">Department of Bioengineering</a></div></td>
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
        <!-- <td width="58%"><p class="style8">bbTM-ST<br /> -->
        <td width="58%"><p class="h1title">bbTM-ST</p>
          <span class="style7">&beta;-Barrel TransMembrane Search Tool</span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td >
      <div class="submenu">
        <span class="style22">
          <a href="index.html">Main</a> &middot; &middot; &middot; 
          <a href="supmat.html">Supporting Material</a> &middot; &middot; &middot; 
          <a href="bbtmstool.php">BBTM-SearchTool</a>
        </span>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <p class="descriptor"><span ><strong>BLAST</strong> searches  using the  <strong>bbTM</strong> scoring matrices<br/> against the <strong>NR-NCBI database</strong>.</span></p>
    </td>
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
    <td>
      <div class="warning">
        <p>This option is currently unavailable due to hardware upgrade.</p>
        <p>Expected to be back on May 2015.</p>
        <p>We apologize for the inconvenience.</p>
      </div>
      
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <p>&nbsp;</p>
      <p><strong>
        <a href="http://biodavidjm.github.io/" target="_blank">David Jimenez-Morales</a> and Jie Liang
      </strong></p>
    </div></td>
  </tr>
  <tr>
    <td><p align="center" class="style4">Dept of Bioengineering/ Bioinformatics Program<br />
          <span class="style3">University of Illinois at Chicago</span><br />
          <span class="style6">Chicago, Illinois, United States of America</span></p>    </td>
  </tr>
</table>
</body>
</html>
