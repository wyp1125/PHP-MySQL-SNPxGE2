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
  <table><tr><td width="20"></td><td width="760"><table><tr height="10"><td></td><tr><td valign="top">
  <table width="760" height="380" cellspacing="0" cellpadding="5" border="1" bordercolor="#0000FF">
  <tr bgcolor="#3399FF" height="30">
    <td colspan="2" class="STYLE1"><a href="#quick">Quick search</a>&nbsp;&nbsp;<a href="#advanced">Advanced search</a>&nbsp;&nbsp;<a href="#stand">Standalone program</a>&nbsp;&nbsp;<a href="#result">Result interpretation</a></tr>
  <tr bgcolor="#eeeeee"><td width="50%" valign="top"><p class="STYLE5"><a name="quick" id="quick"></a>Quick search</p>
      <p><span class="STYLE3">Step 1</span>: Enter gene symbol(s) and/or ref SNP ID(s)</p>
      </td><td width="50%"><img src="images/1-1.jpg" width="370" height="200" /></td>
  </tr>
        <tr  valign="top" bgcolor="#eeeeee">
    <td width="50%"><p><span class="STYLE3">Step 2</span>: A brief information page is shown. Select an SNP-coexpression association to proceed to detailed information.</p>
      </td><td width="50%"><img src="images/1-2.jpg" width="370" height="235" /></td>
        </tr>
        <tr valign="top" bgcolor="#FFFFFF"><td width="50%"><p class="STYLE5"><a name="advanced" id="advanced"></a>Advanced search</p>
            <p class="STYLE5" style="font-size: 14px; font-weight: bold">Module 1</p>
            <p><span class="STYLE3">Step 1</span>: Enter a pair of gene symbols and select the FDR cut-off</p>
            </td><td width="50%"><img src="images/2-1.jpg" width="370" height="118" /></td>
        </tr>
        <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p><span class="STYLE3">Step 2</span>: A brief information page is shown. Select an SNP-coexpression association to proceed to detailed information.</p>
      </td><td width="50%"><img src="images/2-2.jpg" width="370" height="235" /></td>
        </tr>
      <tr valign="top" bgcolor="#FFFFFF"><td width="50%"><p class="STYLE5" style="font-size: 14px; font-weight: bold">Module 2</p>
            <p><span class="STYLE3">Step 1</span>: Enter the key word for a GO term and select the FDR cut-off </p>
            </td>
      <td width="50%"><img src="images/2-3.jpg" width="370" height="117" /></td>
      </tr>
        <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p><span class="STYLE3">Step 2</span>: The GO terms containing the key word are shown. Select an exact GO term to proceed to brief information.</p>
      </td><td width="50%"><img src="images/2-4.jpg" width="370" height="200" /></td>
        </tr>
	  <tr valign="top" bgcolor="#FFFFFF">
      <td width="50%"><p><span class="STYLE3">Step 3</span>:A brief information page is shown. Select an SNP-coexpression to proceed to detailed information.</p>
      </td><td width="50%"><img src="images/2-5.jpg" width="370" height="235" /></td>
	  </tr>
      <tr valign="top" bgcolor="#FFFFFF"><td width="50%"><p class="STYLE5" style="font-size: 14px; font-weight: bold">Module 3</p>
            <p><span class="STYLE3">Step 1</span>: Enter the exact symbol of a gene or an exact ref SNP ID, and select the FDR cut-off </p>
            </td>
      <td width="50%"><img src="images/2-6.jpg" width="370" height="116" /></td>
      </tr>
        <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p><span class="STYLE3">Step 2</span>:A brief information page is shown. Select an SNP-coexpression association to proceed to detailed information</p>
      </td><td width="50%"><img src="images/2-7.jpg" width="370" height="235" /></td>
        </tr>
      <tr valign="top" bgcolor="#eeeeee"><td width="50%"><p class="STYLE5"><a name="stand" id="stand"></a>Standalone program</p>
          <p><span class="STYLE3">Step 1</span>: Unzip the software package on a Linux system and compile</p>
      </td>
      <td width="50%"><p>$ unzip snpxge2.zip</p>
        <p>$ cd snpxge2</p>
        <p>$ g++ threeway.cpp -o snpxge2</p>
        </td>
      </tr>
        <tr valign="top" bgcolor="#eeeeee">
    <td width="50%"><p><span class="STYLE3">Step 2</span>: Prepare the probe IDs of two genes of interest. Run the program using the  command &quot;./snpxge2 -a probe_id1 -b probe_id2 -p [CEU/CHB/JPT/YRI/pooled] -t number_of_top_associations&quot;</p>
      </td>
    <td width="50%">$ ./snpxge2 -a GI_27436965-A -b GI_37577147-A -p pooled -t 50</td>
        </tr>
      <tr valign="top" bgcolor="#FFFFFF"><td width="50%"><p class="STYLE5"><a name="result" id="result"></a>Result interpretation</p>
          <p>In SNPxGE<sup>2</sup>, SNP-coexpression associations are assessed using Gap/substitution scores, computed as</p>
          <p><img src="images/figure2.gif" width="300" height="26" /> </p>
          <p class="STYLE5" style="font-size: 14px; font-weight: bold">The brief information page</p>
          <p>All SNP-coexpression associations that meet the query criteria (key words, population, GO term, and/or FDR cutoff) set by the user are shown in this page. The brief information includes population, gene symbols of the coexpressed transcripts, associated SNP, SNP-related gene (i.e. the assoicated SNP is located between 1kb upstream and downstream of the gene), gap/substitution score and FDR.</p>
          <p class="STYLE5" style="font-size: 14px; font-weight: bold">&nbsp;</p>
          </td><td width="50%" valign="middle"><img src="images/1-2.jpg" width="370" height="260" /></td>
      </tr>
      <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p class="STYLE5" style="font-size: 14px; font-weight: bold">The detail information page</p>
      <p>Only one SNP-coexpression association is shown. There are 3 main components in this page:</p>
      <p>1) Top panel: Parameters for the SNP-coexpression association,  including the gap/substitution score, p-value, FDR and associated GO terms.</p>
      <p>2) Right panel: Genomic information for the 3 units of the  SNP-coexpression association, including positions, RefSeq IDs and Ensembl IDs  for the 2 transcripts, and position, function and related gene (if the SNP is  located between 1 kb upstream and downstream of a gene) for the SNP.</p>
      <p> 3) Left panel: Plot of the SNP-coexpression association, described as follows:</p>      
      <p>&nbsp;</p>
      </td><td width="50%" valign="middle"><img src="images/3-1.jpg" width="370" height="260" /></td>
          </tr>
          <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p>The plot can show the manner how 2 genes are differentailly co-expressed under different genotypes. In most cases there are 3 different genotypes at an SNP locus.</p>
      <p> The points in the plot represent HapMap individuals, which can be marked in red, blue or green, corresponding to different genotypes.</p>
      <p> The Gap/substitution score is computed based on the best 2 genotype combination, out of 3 possible combinations. The expression correlations and regression lines under the 2 genotypes that comprises the Gap/substituion model are shown in the plot.</p></td><td width="50%"><img src="images/3-2.jpg" width="370" height="370" /></td>
          </tr>
        <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p><span class="STYLE5" style="font-size: 14px; font-weight: bold">The output of the standalone program</span></p>
      <p>Top SNP-coexpression associations for a pre-defined transcript combination are shown in descending order of scores. Gap/substitution models are shown in the right column. On/off models, though may not be meaningful based on the dataset of this study, are shown in the left column.</p></td><td width="50%"><img src="images/3-3.jpg" width="370" height="200" /></td>
        </tr>
	  <tr valign="top" bgcolor="#FFFFFF">
    <td width="50%"><p>Users may use the form on the download page to plot a SNP-coexpression association of interest. </p>
      </td><td width="50%"><img src="images/3-4.jpg" width="370" height="110" /></td>
	  </tr>
  </table></td></tr><tr height="10"><td></td></tr></table>
  </td><td width="20"></td></tr></table>
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
