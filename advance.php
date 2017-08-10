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
  <table border="0" cellpadding="10" cellspacing="5"><tr height="200"><td>
  <form name="input" action="advsearch.php" method="post" style="border:solid; border-color:#FF0000; background:#eeeeee; padding:20px">
   <p class="STYLE5">Enter a pair of gene symbols:</p>
  <p class="STYLE6">Expression #1:&nbsp;
    <input type="text" name="gene1" />
  &nbsp;Expression #2:&nbsp;
  <input type="text" name="gene2" /></p>
  <p class="STYLE6">FDR   cutoff:&nbsp;
    <select name='fdr'>
    <option value='0.1' selected='selected'>0.1 </option>
    <option value='0.01'>0.01 </option>
    <option value='0.001'>0.001 </option>
  </select>
  </p>
  <input TYPE="button" VALUE="Reset" style='font-size:18px' NAME="reset" onClick="javascript:window.location='http://tunisia.ads.uga.edu/SNPxGE2/advance.php'">
  <input type=submit value="Submit" name='submit' style='font-size:18px'>
  </form>
  </td></tr><tr height="200"><td>
  <form name="input" action="gosearch.php" method="post" style="border:solid; border-color:#FF0000; background:#eeeeee; padding:20px">
   <p class="STYLE5">Enter a GO term ID or name:</p>
   <p class="STYLE6">GO term:&nbsp;
     <input type="text" name="go" size="60">
  &nbsp;</p>
  <p class="STYLE6">FDR    cutoff:&nbsp;
     <select name='fdr'>
    <option value='0.1' selected='selected'>0.1 </option>
    <option value='0.01'>0.01 </option>
    <option value='0.001'>0.001 </option>
  </select></p>
  <input TYPE="button" VALUE="Reset" style='font-size:18px' NAME="reset" onClick="javascript:window.location='http://tunisia.ads.uga.edu/SNPxGE2/advance.php'">
  <input type=submit value="Submit" name='submit' style='font-size:18px'>
  </form>
  </td></tr>
  <tr><td>
  <form name="input" action="exactsearch.php" method="post" style="border:solid; border-color:#FF0000; background:#eeeeee; padding:20px">
   <p class="STYLE5">Exact search:</p>
   <p class="STYLE6">Enter a:&nbsp;
     <select name='type'>
<option value='1' selected='selected'>gene symbol
<option value='2'>ref snp ID
</select>
  &nbsp; &nbsp;
  <input type="text" name="gene" size="45" /></p>
  <p class="STYLE6">FDR    cutoff:&nbsp;
    <select name='fdr'>
    <option value='0.1' selected='selected'>0.1 </option>
    <option value='0.01'>0.01 </option>
    <option value='0.001'>0.001 </option>
  </select></p>
  <input TYPE="button" VALUE="Reset" style='font-size:18px' NAME="reset" onClick="javascript:window.location='http://tunisia.ads.uga.edu/SNPxGE2/advance.php'">
  <input type=submit value="Submit" name='submit' style='font-size:18px'>
  </form></td></tr></table>
  
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
