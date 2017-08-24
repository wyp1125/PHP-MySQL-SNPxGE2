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
//$model=$_GET[model];
$cutoff=$_GET[fdr];
$goid=$_GET[go];
$dbhost = 'xxx.xxx.xxx.xxx';
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
$index1=0;
$sql1 = "select * from result where go like'%".$goid."%'";
$index1=0;
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$temp_p=$row1['fdr'];
if($temp_p<$cutoff)
{
$o_pop[$index1]=$row1['pop'];
$o_gene1[$index1]=$row1['gene1'];
$o_gene2[$index1]=$row1['gene2'];
$o_probe1[$index1]=$row1['probe1'];
$o_probe2[$index1]=$row1['probe2'];
$o_snp[$index1]=$row1['snp'];
$o_gene[$index1]=$row1['asso_gene'];
$o_valuet[$index1]=$row1['score'];
$o_p[$index1]=$temp_p;
$index1++;
}
}
if($index1<1)
{
echo "No results found";
exit;
}
echo "<table width='800' height='10' valign='top'><tr height='10'><td colspan='3'>&nbsp;</td></tr><tr height='10'><td width='10'></td><td width='780'>";

echo "<table width='780' cellspacing='0' cellpadding='4'>";

echo "<tr bgcolor='#d52b4d' height='30' valign='top'><td><span class='STYLE2'>Index</td><td><span class='STYLE2'>Population</td><td><span class='STYLE2'>Expression #1</span></span></td><td><span class='STYLE2'>Expression #2</span></td><td><span class='STYLE2'>SNP</span></td><td><span class='STYLE2'>SNP-related gene</span></td><td><span class='STYLE2'>Score</span></td><td><span class='STYLE2'>FDR</span></td><td><span class='STYLE2'>Details</span></td></tr>";
for($i=0;$i<$index1;$i++)
{
$tag=$i+1;
if($tag%2==0)
{
echo "<tr bgcolor='#eeeeee'>";
}
else
{
echo "<tr bgcolor='#ffffff'>";
}
$show_g="";
$show_g=explode(",",$o_gene[$i]);
echo "<td>$tag</td><td>$o_pop[$i]</td><td>$o_gene1[$i]</td><td>$o_gene2[$i]</td><td>$o_snp[$i]</td><td>$show_g[0]</td><td>$o_valuet[$i]</td><td>";
$show_p=number_format($o_p[$i],6);
echo "$show_p</td><td><a href='detail.php?pop=".$o_pop[$i]."&probe1=".$o_probe1[$i]."&probe2=".$o_probe2[$i]."'><img src='images/detail.gif' /></a></td></tr>";
}
echo "<tr><td></td></tr></table>";
echo "</td><td width='10'>&nbsp;</td></tr><tr><td colspan='3'></td></tr></table>";
?>
  
  
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
