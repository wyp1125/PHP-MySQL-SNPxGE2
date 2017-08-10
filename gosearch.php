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
  ///////////////////
$input=$_POST["go"];
$cutoff=$_POST["fdr"];
$keys=trim($input);
if(strlen($keys)<3)
{
echo "Wrong GO name or ID!";
exit;
}
$is_goid=0;
if(is_numeric($keys) && strlen($keys)==7)
{
$is_goid=1;
}
if(preg_match('/^go\:/i',$keys)==1)
{
$a=explode(":",$keys);
//echo $keys;
if(is_numeric($a[1]) && strlen($a[1])==7)
{
$is_goid=1;
$keys=$a[1];
}
}
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
$view_name="gap_";
if($is_goid==1)
{
$sql1="select * from ".$view_name."go_list where go='".$keys."'"; 
}
else
{
$sql1="select * from ".$view_name."go_list where name like '%".$keys."%'";
}
$index1=0;
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$go_id[$index1]=$row1['go'];
$go_name[$index1]=$row1['name'];
$index1++;
}
if($index1==0)
{
echo "<br>&nbsp;&nbsp;No results found for $keys";
}
else
{
  //////////display///////////////
  echo "<table><tr><td width='50'></td><td width='700'>";
  echo "<table cellpadding='10' cellspacing='0'><tr><td colspan='2'>Please select a GO term to continue!</td></tr>";
  echo "<tr bgcolor='#d52b4d'><td>GO ID</td><td>Name</td></tr>";
  for($i=0;$i<$index1;$i++)
  {
  if($i%2==0)
  {
  echo "<tr bgcolor='#ffffff'>";
  }
  else
  {
  echo "<tr bgcolor='#eeeeee'>";
  }
  echo "<td><a href='goresults.php?fdr=".$cutoff."&go=".$go_id[$i]."'>GO:$go_id[$i]</td><td>$go_name[$i]</a></td></tr>";
  }
  echo "<tr><td></td></tr></table>";
  echo "</td><td width='50'></td></table>";
}

  ?>
  
  
  <!-- InstanceEndEditable --></td>
</tr>
<tr><td height="50" bgcolor="#3399FF"><div align="center" class="copyright STYLE2"> Copyright © 2010  Animal Breeding and Genetics Group at University of Georgia </div>
</div></td>
</tr>
</table>
</body>
<!-- InstanceEnd --></html>
