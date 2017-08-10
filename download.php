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
  <table>
  <tr><td width="50"></td><td width="700">
  <table cellspacing="0" cellpadding="5" width="700"><tr height="20"><td></td></tr>
  <tr bgcolor="#66CCFF"><td class="STYLE1">Download all the results in SNPxGE<sup>2</sup></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><a href="result_download.txt">result_download.txt</a></td>
  </tr>
  <tr>
    <td bgcolor="#66CCFF"><p><span class="STYLE1">Download a stand-alone program for search for the top SNPs associated with 2 transcripts of interest.</span> <br />
    </p></td>
  </tr>
  <tr bgcolor="#FFFFFF"><td><p>The user should compile the files using &quot;g++ threeway.cpp -o snpxge2&quot; on a linux system and run the program using &quot;./snpxge2 -a probe_id1 -b probe_id2 -p [CEU/CHB/JPT/YRI/pooled] -t number_of_top_associations&quot;. The probe IDs can be found in the column &quot;Target&quot; of the file &quot;<a href="annotation.txt" target="_blank">annotation.txt</a>&quot;. <br />
    Download: <a href="snpxge2.zip">snpxge2.zip</a></p>
      </td>
  </tr>
  <tr>
    <td bgcolor="#66CCFF"><span class="STYLE1">The user may use the following form to plot a 3-way association</span></td>
  </tr>
  <tr bgcolor="#FFFFFF"><td><form name="input" action="image1.php" method="post" style="border:solid; border-color:#FF0000; background:#eeeeee; padding:20px">
   <p class="STYLE6">Probe ID   #1:&nbsp;
     <input type="text" name="gene1" />
  &nbsp;Probe ID  #2:&nbsp;
  <input type="text" name="gene2" /></p>
   <p class="STYLE6">Ref SNP ID :&nbsp;
     <input type="text" name="snp" /> &nbsp; Population:&nbsp;
    <select name='pop'>
    <option value='pooled' selected='selected'>pooled</option>
    <option value='CEU'>CEU</option>
    <option value='CHB'>CHB</option>
    <option value='JPT'>JPT</option>
    <option value='YRI'>YRI</option>
    </select>
   </p>
   <p class="STYLE6">
    <input TYPE="button" VALUE="Reset" style='font-size:18px' NAME="reset" onClick="javascript:window.location='http://tunisia.ads.uga.edu/SNPxGE2/advance.php'">
    <input type=submit value="Submit" name='submit' style='font-size:18px'>
  </p>
  </form></td></tr>
  <tr height="20"><td></td></tr>
  </table>
  </td><td width="50"></td></tr>
  </table>
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
