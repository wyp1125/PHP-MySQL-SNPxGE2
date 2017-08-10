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
  <?php
///////////////sql/////////////////////////////////////////////////////
//$model=$_GET[model];
$pop=$_GET[pop];
$probe1=$_GET[probe1];
$probe2=$_GET[probe2];
$sql1 = "select * from result where pop='".$pop."' and probe1 ='".$probe1."' and probe2='".$probe2."'";
$dbhost = 'tunisia.ads.uga.edu';
$dbuser = 'apache';
$dbpass = 'searchdatabase';
$dbname = 'snpxge';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn)
{
 echo "Can not connect to database!";
 exit;
}
if(!mysql_select_db($dbname,$conn))
{
 echo "Can not connect to database!";
 exit;
}
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$gene[0]=$row1['gene1'];
$gene[1]=$row1['gene2'];
$snp=$row1['snp'];
$snp_gene=$row1['asso_gene'];
$valuet=$row1['score'];
$pvalue=$row1['pvalue'];
$fdr=$row1['fdr'];
$go=$row1['go'];
}
////////////////////////////////////////////////////////////////////
$sql1 = "select * from snp_ann where snp ='".$snp."'";
$result1 = mysql_query($sql1, $conn);
$snp_chr="";
$snp_pos="";
$snp_strand="";
$snp_allele="";
$snp_type="";
while($row1 = mysql_fetch_assoc($result1))
{
$snp_chr=$row1['chr'];
$snp_pos=$row1['pos'];
$snp_strand=$row1['strand'];
$snp_allele=$row1['allele'];
$snp_type=$row1['type'];
}
///////////////////////////////////////////////////////////////
for($i=0;$i<2;$i++)
{
$gene_chr[$i]="";
$gene_start[$i]="";
$gene_end[$i]="";
$gene_strand[$i]="";
$gene_ensembl[$i]="";
$sql1 = "select * from ensembl where gene ='".$gene[$i]."'";
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$gene_chr[$i]=$row1['chr'];
$gene_start[$i]=$row1['start'];
$gene_end[$i]=$row1['end'];
$gene_strand[$i]=$row1['strand'];
$gene_ensembl[$i]=$row1['Id'];
}
}
////////////////////////////////////////////////////////////////////
$sql1 = "select * from ref_seq where probe ='".$probe1."'";
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$accession1=$row1['accession'];
}
$sql1 = "select * from ref_seq where probe ='".$probe2."'";
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$accession2=$row1['accession'];
}
////////////////////////////////////////////////////////////////////
$a=explode(",",$go);
$go_num=count($a);
for($i=1;$i<$go_num;$i++)
{
$go_id[$i]="GO:".$a[$i];
$go_name[$i]="";
$go_type[$i]="";
$sql1 = "select * from go_ann where Id ='".$a[$i]."'";
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$go_name[$i]=$row1['name'];
$go_type[$i]=$row1['namespace'];
}
}

////////////////////////////////////////////////////////////////
$sql1 = "select * from allele where snp ='".$snp."'";
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$allele=$row1['allele'];
}
//display
echo "<table cellpadding='10' cellspacing='10' border='0' width='800'><tr height='10'><td></td></tr>";
echo "<tr><td>";
//////////head table////////////////
echo "<table border='1' bordercolor='#a52b4d' cellpadding='5' cellspacing='0'><tr align='center' bgcolor='#d52b4d'><td width='60'>Population</td><td width='60'>Score</td><td width='60'>P-value</td><td width='60'>FDR</td><td width='450'>Associated GO terms</td></tr>";
$show_p=number_format($pvalue,8);
/*$show_p=substr($pvalue,1);
$first_c=substr($pvalue,0,1);
if($first_c=="<")
{
$show_p="&lt;".$show_p;
}
else
{
$show_p="&gt;".$show_p;
}*/
$show_fdr=number_format($fdr,6);
echo "<tr bgcolor='#ffffff' align='center'><td>$pop</td><td>$valuet</td><td>$show_p</td><td>$show_fdr</td><td align='left'>";
if($go_num>2)
{
for($i=1;$i<$go_num-1;$i++)
{
echo "$go_id[$i]: $go_name[$i] [$go_type[$i]]<br>";
}
}
$temp=$go_num-1;
echo "$go_id[$temp]: $go_name[$temp] [$go_type[$temp]]";
echo "</td></tr></table>";
echo "</td></tr><tr height='10'><td>";
//echo "<table><tr><td width='400'></td><td width='10'></td><td width='350'>";
echo "<table><tr><td width='400'><img src='image.php?pop=".$pop."&gene1=".$probe1."&gene2=".$probe2."&snp=".$snp."&allele=".$allele."' /></td><td width='10'></td><td width='350'>";
//////////expression #1///////////////////////////////////////////////////////
echo "<table border='0' valign='top'><tr><td>";
echo "<table border='1' bordercolor='#a52b4d' cellpadding='0' cellspacing='0'><tr><td>";
echo "<table border='0' cellspacing='0' cellpadding='5' width='100%'><tr><td bgcolor='#d52b4d'  width='90'>Expression #1</td><td bgcolor='#ffffff'>$gene[0]</td></tr>";
if($gene_chr[0]!="")
{
echo "<tr><td bgcolor='#d52b4d'>Location</td><td bgcolor='#ffffff'>chr$gene_chr[0]: $gene_start[0]: $gene_end[0]: $gene_strand[0]</td></tr>";
}
else
{
echo "<tr><td bgcolor='#d52b4d'>Location</td><td bgcolor='#ffffff'>N.A.</td></tr>";
}
echo "<tr><td bgcolor='#d52b4d'  width='90'>RefSeq</td><td bgcolor='#ffffff'><a href='http://www.ncbi.nlm.nih.gov/nuccore/".$accession1."' target='blank'>$accession1</a></td></tr>";
if($gene_ensembl[0]!="")
{
echo "<tr><td bgcolor='#d52b4d'>Ensembl ID</td><td bgcolor='#ffffff'><a href='http://www.ensembl.org/Homo_sapiens/Gene/Summary?g=".$gene_ensembl[0]."' target='blank'>$gene_ensembl[0]</a></td></tr></table>";
}
else
{
echo "<tr><td bgcolor='#d52b4d'>Ensembl ID</td><td bgcolor='#ffffff'>N.A.</td></tr></table>";
}
echo "</td></tr><tr><td>";
//////////expression #2///////////////
echo "<table border='0' cellspacing='0' cellpadding='5' width='100%'><tr><td bgcolor='#d52b4d'  width='90'>Expression #2</td><td bgcolor='#ffffff'>$gene[1]</td></tr>";
if($gene_chr[1]!="")
{
echo "<tr><td bgcolor='#d52b4d'>Location</td><td bgcolor='#ffffff'>chr$gene_chr[1]: $gene_start[1]: $gene_end[1]: $gene_strand[1]</td></tr>";
}
else
{
echo "<tr><td bgcolor='#d52b4d'>Location</td><td bgcolor='#ffffff'>N.A.</td></tr>";
}
echo "<tr><td bgcolor='#d52b4d'  width='90'>RefSeq</td><td bgcolor='#ffffff'><a href='http://www.ncbi.nlm.nih.gov/nuccore/".$accession2."' target='blank'>$accession2</a></td></tr>";
if($gene_ensembl[1]!="")
{
echo "<tr><td bgcolor='#d52b4d'>Ensembl ID</td><td bgcolor='#ffffff'><a href='http://www.ensembl.org/Homo_sapiens/Gene/Summary?g=".$gene_ensembl[1]."' target='blank'>$gene_ensembl[1]</a></td></tr></table>";
}
else
{
echo "<tr><td bgcolor='#d52b4d'>Ensembl ID</td><td bgcolor='#ffffff'>N.A.</td></tr></table>";
}
///////////control snp////////////////
echo "</td></tr><tr><td>";
echo "<table border='0' cellspacing='0' cellpadding='5' width='100%'><tr><td bgcolor='#d52b4d'  width='90'>SNP</td><td bgcolor='#ffffff'><a href='http://www.ncbi.nlm.nih.gov/projects/SNP/snp_ref.cgi?rs=".$snp."' target='blank'>$snp</a></td></tr>";
echo "<tr><td bgcolor='#d52b4d'>Location</td><td bgcolor='#ffffff'>chr$snp_chr: $snp_pos: $snp_strand</td></tr>";
echo "<tr><td bgcolor='#d52b4d'>Allele</td><td bgcolor='#ffffff'>$snp_allele</td></tr>";
echo "<tr><td bgcolor='#d52b4d'>Function</td><td bgcolor='#ffffff'>$snp_type</td></tr>";
if($snp_gene!="")
{
echo "<tr><td bgcolor='#d52b4d'>Related gene</td><td bgcolor='#ffffff'>$snp_gene</td></tr></table>";
}
else
{
echo "<tr><td bgcolor='#d52b4d'>Related gene</td><td bgcolor='#ffffff'>N.A.</td></tr></table>";
}
echo "</td></tr>";
//////////////////////////////////////////////
echo "</td></tr></table></td></tr><tr height='10'><td></td></tr></table>";
echo "</td></tr></table>";
echo "</td></tr><tr height='10'><td></td></tr></table>";
  ?>
  
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
