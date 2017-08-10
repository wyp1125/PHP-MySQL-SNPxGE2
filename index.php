<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/snpxge.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SNPxGE2</title>
<style type="text/css">
<!--
.STYLE1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.STYLE2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-weight: bold;
}
.STYLE3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.STYLE4 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
}
.STYLE5 {
    font-family: Arial, Helvetica, sans-serif; 
	font-size: 18px; 
	color: #FF0000; 
	font-style: italic;
}
-->
</style>
</head>

<body bgcolor="#040f43">
<table bgcolor="#DCEBFE" width="800" height="600" cellspacing="0" cellpadding="0" align="center">
<tr><td width="800" height="150">
<img src="images/logo.gif" />
</td></tr>
<tr><td height="15">
<table height="15" width="800" bgcolor="#3399FF">
<tr align="center"><td width="100"><span class="STYLE1"><a href="http://lambchop.ads.uga.edu/snpxge2/index.php">Home</a></span></td>
<td width="150" class="STYLE1"><a href="http://lambchop.ads.uga.edu/snpxge2/advance.php">Advanced search</a></td>
<td width="100" class="STYLE1"><a href="http://lambchop.ads.uga.edu/snpxge2/download.php">Download</a></td>
<td width="100" class="STYLE1"><a href="http://lambchop.ads.uga.edu/snpxge2/about.php">Tutorial</a></td>
<td></td></tr>
</table>
</td></tr>
<tr>
  <td height="400"><!-- InstanceBeginEditable name="EditRegion1" -->
  <table cellpadding="15"><tr>
    <td><div align="justify">
      <p class="STYLE5">About</p>
      <p>The SNPxGE<sup>2</sup> database contains the computationally predicted human SNP-coexpression associations,  that is, the differential co-expression between  2 genes is associated with the genotype of an SNP. This data was generated  from a large scale association study that was based on the HapMap data, which  covered 269 individuals from 4 human populations, 556,873 SNPs and 15,000 gene  expression profiles. In order to reduce the computational cost, the SNP-coexpression associations were assessed using  gap/substitution scores instead of logistic regression models. The implementation was carried out using 128 Linux  cluster nodes in ~30 days and assessed a total of ~10<sup>13</sup> SNP-expression-expression combinations. The database can be queried via either gene symbols or reference SNP IDs. For each association, a detailed information page is provided.</p>
      <p><span style="color: #FF0000; font-weight: bold">Citation:</span> Wang Y et al. (2012) SNPxGE<sup>2</sup>: a database for human SNP-coexpression associations.

        <span style="font-style: italic">Bioinformatics</span>, 28 (3): 403-410..</p>
      <p class="STYLE5">Contact:</p>
      <p><a href="../wyp/index.html">Yupeng wang</a>. E-mail: wyp1125@gmail.com.</p>
      </div></td>
    <td width="400">
	<table><tr><td>
	<form id='form1' name='form1' method='post' action='http://lambchop.ads.uga.edu/snpxge2/search.php'>
<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #FF0000; font-style: italic">Search for SNP-coexpression associations  by gene symbol(s) or ref SNP ID(s):</span> <a href='sample.txt' target="_blank">example</a></p>
  <textarea name='genes' rows='5' cols='20' style='width:350px; height:120px' ></textarea><br />
  
  <input TYPE="button" VALUE="Reset" style='font-size:18px' NAME="btn0" onClick="javascript:window.location='http://lambchop.ads.uga.edu/dmotifminer/index.php#mod1'">
  <input type=submit value="Submit" name='submit1' style='font-size:18px'>
</form>
	</td></tr>
	<tr height="10"><td>&nbsp;</td></tr>
	<tr><td><p class="STYLE5" style="font-family: Arial, Helvetica, sans-serif">Statistics</p>
	  <table border="1" bordercolor="#000000" cellpadding="2" cellspacing="0" align="center"><tr>
	  <td align="center">Population</td>
	  <td align="center"># of SNPs </td>
	  <td align="center"># of expression profiles </td>
	  <td align="center"># of SNP-coexpression associations</td>
	</tr>
	  <tr>
	    <td align="center">CEU</td>
	    <td align="center">407,733</td>
	    <td align="center">15,000</td>
	    <td align="center">9,522</td>
	    </tr>
	  <tr>
	    <td align="center">CHB</td>
	    <td align="center">360,109</td>
	    <td align="center">15,000</td>
	    <td align="center">1,427</td>
	    </tr>
	  <tr>
	    <td align="center">JPT</td>
	    <td align="center">347,415</td>
	    <td align="center">15,000</td>
	    <td align="center">474</td>
	    </tr>
	  <tr>
	    <td align="center">YRI</td>
	    <td align="center">481,321 </td>
	    <td align="center">15,000</td>
	    <td align="center">33,346</td>
	    </tr>
	  <tr>
	  <td align="center">Pooled</td>
	  <td align="center">556,873 </td>
	  <td align="center">15,000</td>
	  <td align="center">50,792</td>
	</tr></table>
	</td>
	</tr>
	</table>
	</td>  </tr></table>
  
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
