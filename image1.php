<?php
header("Content-type: image/png"); 
$gene1=$_POST["gene1"];
$gene2=$_POST["gene2"];
$snp=$_POST["snp"];
$pop=$_POST["pop"];
$dbhost = 'tunisia.ads.uga.edu';
$dbuser = 'apache';
$dbpass = 'searchdatabase';
$dbname = 'snpxge';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn)
{
 exit;
}
if(!mysql_select_db($dbname,$conn))
{
 exit;
}
$sql1 = "select * from ge_".$pop." where Id ='".$gene1."'"; 
$result1 = mysql_query($sql1, $conn);
if(!$result1)
{
exit;
}
while($row1 = mysql_fetch_assoc($result1))
{
$temp1=$row1['levels'];
//$line1=$row1['line'];
}
$sql1 = "select * from allele where snp ='".$snp."'";
$result1 = mysql_query($sql1, $conn);
while($row1 = mysql_fetch_assoc($result1))
{
$allele=$row1['allele'];
}
$a1=explode(",",$temp1);
$min1=min($a1);
$max1=max($a1);
$axis1=$max1-$min1;
$sql2 = "select * from ge_".$pop." where Id ='".$gene2."'"; 
$result2 = mysql_query($sql2, $conn);
if(!$result2)
{
exit;
}
while($row2 = mysql_fetch_assoc($result2))
{
$temp2=$row2['levels'];
//$line2=$row2['line'];
}
$a2=explode(",",$temp2);
$min2=min($a2);
$max2=max($a2);
$axis2=$max2-$min2;
$sql3 = "select * from gt_".$pop." where Id ='".$snp."'"; 
$result3 = mysql_query($sql3, $conn);
if(!$result3)
{
exit;
}
while($row3 = mysql_fetch_assoc($result3))
{
$temp3=$row3['genotypes'];
}
mysql_close($conn);
$a3=explode(",",$temp3);
$num=count($a3);
$width = 400;
$height = 400;
$margin = 60;
$space =10;
$axis_len=$width-2*$margin-2*$space;
$im = imagecreatetruecolor($width, $height);
$red = imagecolorallocate($im, 255, 0, 0);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
imagefill($im,0,0,$white);
//imagestring($im,5,30,30,$pop,$black);
imageline($im,$margin,$margin,$margin,$height-$margin,$black);
imageline($im,$margin,$margin,$width-$margin,$margin,$black);
imageline($im,$width-$margin,$margin,$width-$margin,$height-$margin,$black);
imageline($im,$margin,$height-$margin,$width-$margin,$height-$margin,$black);
imagestring($im,5,$margin+80,$height-$margin+40,"Expression #1",$black);
imagestringup($im,5,$margin-55,$height-$margin-80,"Expression #2",$black);
imagefilledrectangle($im,$margin-50-1.5,0.25*$margin-1.5,$margin-50+1.5,0.25*$margin+1.5,$red);
imagefilledrectangle($im,$margin-1.5,0.25*$margin-1.5,$margin+1.5,0.25*$margin+1.5,$blue);
imagefilledrectangle($im,$margin+50-1.5,0.25*$margin-1.5,$margin+50+1.5,0.25*$margin+1.5,$green);
$a4=explode(",",$allele);
imagestring($im,5,$margin-40,0.25*$margin-7.5,$a4[1].$a4[1],$black);
imagestring($im,5,$margin+10,0.25*$margin-7.5,$a4[0].$a4[1],$black);
imagestring($im,5,$margin+60,0.25*$margin-7.5,$a4[0].$a4[0],$black);
///////////////make scales///////////////
imageline($im,$margin+$space,$margin,$margin+$space,$margin-4,$black);
imagestring($im,4,$margin+$space-10,$margin-20,number_format($min1,2),$black);
imageline($im,$width/2,$margin,$width/2,$margin-4,$black);
imagestring($im,4,$width/2-10,$margin-20,number_format(($min1+$max1)/2,2),$black);
imageline($im,$width-$margin-$space,$margin,$width-$margin-$space,$margin-4,$black);
imagestring($im,4,$width-$margin-$space-10,$margin-20,number_format($max1,2),$black);
imageline($im,$width-$margin,$margin+$space,$width-$margin+4,$margin+$space,$black);
imagestring($im,4,$width-$margin+10,$margin+$space-8,number_format($max2,2),$black);
imageline($im,$width-$margin,$width/2,$width-$margin+4,$width/2,$black);
imagestring($im,4,$width-$margin+10,$width/2-8,number_format(($max2+$min2)/2,2),$black);
imageline($im,$width-$margin,$width-$margin-$space,$width-$margin+4,$width-$margin-$space,$black);
imagestring($im,4,$width-$margin+10,$width-$margin-$space-8,number_format($min2,2),$black);
/////////////////////////////////////////
$x0=0;
$y0=0;
$xy0=0;
$num0=0;
$xx0=0;
$yy0=0;
$x1=0;
$y1=0;
$xy1=0;
$num1=0;
$xx1=0;
$yy1=0;
$x2=0;
$y2=0;
$xy2=0;
$num2=0;
$xx2=0;
$yy2=0;
srand(time());
for($i=0;$i<$num;$i++)
{
$pos1=$axis_len*($a1[$i]-$min1)/($max1-$min1);
$pos2=$axis_len*($a2[$i]-$min2)/($max2-$min2);
$random = (rand()%5);
//imagestring($im,5,5,5,$random,$black);
if($a3[$i]==0)
{
imagefilledrectangle($im,$margin+$space+$pos1-1.5,$margin+$space+$axis_len-$pos2-1.5,$margin+$space+$pos1+1.5,$margin+$space+$axis_len-$pos2+1.5,$red);
imagefilledrectangle($im,$margin-30+$random-1.5,$margin+$space+$axis_len-$pos2-1.5,$margin-30+$random+1.5,$margin+$space+$axis_len-$pos2+1.5,$red);
imagefilledrectangle($im,$margin+$space+$pos1-1.5,$margin+2*$space+$axis_len+30-$random-1.5,$margin+$space+$pos1+1.5,$margin+2*$space+$axis_len+30-$random+1.5,$red);
$x0+=$a1[$i];
$y0+=$a2[$i];
$xy0+=$a1[$i]*$a2[$i];
$xx0+=$a1[$i]*$a1[$i];
$yy0+=$a2[$i]*$a2[$i];
$num0++;
}
else if($a3[$i]==1)
{
imagefilledrectangle($im,$margin+$space+$pos1-1.5,$margin+$space+$axis_len-$pos2-1.5,$margin+$space+$pos1+1.5,$margin+$space+$axis_len-$pos2+1.5,$blue);
imagefilledrectangle($im,$margin-20+$random-1.5,$margin+$space+$axis_len-$pos2-1.5,$margin-20+$random+1.5,$margin+$space+$axis_len-$pos2+1.5,$blue);
imagefilledrectangle($im,$margin+$space+$pos1-1.5,$margin+2*$space+$axis_len+20-$random-1.5,$margin+$space+$pos1+1.5,$margin+2*$space+$axis_len+20-$random+1.5,$blue);
$x1+=$a1[$i];
$y1+=$a2[$i];
$xy1+=$a1[$i]*$a2[$i];
$xx1+=$a1[$i]*$a1[$i];
$yy1+=$a2[$i]*$a2[$i];
$num1++;
}
else
{
imagefilledrectangle($im,$margin+$space+$pos1-1.5,$margin+$space+$axis_len-$pos2-1.5,$margin+$space+$pos1+1.5,$margin+$space+$axis_len-$pos2+1.5,$green);
imagefilledrectangle($im,$margin-10+$random-1.5,$margin+$space+$axis_len-$pos2-1.5,$margin-10+$random+1.5,$margin+$space+$axis_len-$pos2+1.5,$green);
imagefilledrectangle($im,$margin+$space+$pos1-1.5,$margin+2*$space+$axis_len+10-$random-1.5,$margin+$space+$pos1+1.5,$margin+2*$space+$axis_len+10-$random+1.5,$green);
$x2+=$a1[$i];
$y2+=$a2[$i];
$xy2+=$a1[$i]*$a2[$i];
$xx2+=$a1[$i]*$a1[$i];
$yy2+=$a2[$i]*$a2[$i];
$num2++;
}
}
$cut_n=0.1*$num;
$code[0]=$a4[1].$a4[1];
$code[1]=$a4[0].$a4[1];
$code[2]=$a4[0].$a4[0];
$maxv=0;

if($num0>$cut_n && $num1>$cut_n)
{
$r[0]=($num0*$xy0-$x0*$y0)/sqrt(($num0*$xx0-$x0*$x0)*($num0*$yy0-$y0*$y0));
$r[1]=($num1*$xy1-$x1*$y1)/sqrt(($num1*$xx1-$x1*$x1)*($num1*$yy1-$y1*$y1));
$ra[2]=(($num0+$num1)*($xy0+$xy1)-($x0+$x1)*($y0+$y1))/sqrt((($num0+$num1)*($xx0+$xx1)-($x0+$x1)*($x0+$x1))*(($num0+$num1)*($yy0+$yy1)-($y0+$y1)*($y0+$y1)));
$temp_t=abs($r[0]+$r[1]-1.5*$ra[2]);
if($temp_t>$maxv)
{
$maxv=$temp_t;
$show_c1=$code[0];
$show_r1=number_format($r[0],2);
$show_c2=$code[1];
$show_r2=number_format($r[1],2);
$show_r3=number_format($ra[2],2);
$ifshow[0]=1;
$ifshow[1]=1;
$ifshow[2]=0;
}
}
if($num0>$cut_n && $num2>$cut_n)
{
$r[0]=($num0*$xy0-$x0*$y0)/sqrt(($num0*$xx0-$x0*$x0)*($num0*$yy0-$y0*$y0));
$r[2]=($num2*$xy2-$x2*$y2)/sqrt(($num2*$xx2-$x2*$x2)*($num2*$yy2-$y2*$y2));
$ra[1]=(($num0+$num2)*($xy0+$xy2)-($x0+$x2)*($y0+$y2))/sqrt((($num0+$num2)*($xx0+$xx2)-($x0+$x2)*($x0+$x2))*(($num0+$num2)*($yy0+$yy2)-($y0+$y2)*($y0+$y2)));
$temp_t=abs($r[0]+$r[2]-1.5*$ra[1]);
if($temp_t>$maxv)
{
$maxv=$temp_t;
$show_c1=$code[0];
$show_r1=number_format($r[0],2);
$show_c2=$code[2];
$show_r2=number_format($r[2],2);
$show_r3=number_format($ra[1],2);
$ifshow[0]=1;
$ifshow[1]=0;
$ifshow[2]=1;
}
}
if($num1>$cut_n && $num2>$cut_n)
{
$r[1]=($num1*$xy1-$x1*$y1)/sqrt(($num1*$xx1-$x1*$x1)*($num1*$yy1-$y1*$y1));
$r[2]=($num2*$xy2-$x2*$y2)/sqrt(($num2*$xx2-$x2*$x2)*($num2*$yy2-$y2*$y2));
$ra[0]=(($num1+$num2)*($xy1+$xy2)-($x1+$x2)*($y1+$y2))/sqrt((($num1+$num2)*($xx1+$xx2)-($x1+$x2)*($x1+$x2))*(($num1+$num2)*($yy1+$yy2)-($y1+$y2)*($y1+$y2)));
$temp_t=abs($r[1]+$r[2]-1.5*$ra[0]);
if($temp_t>$maxv)
{
$maxv=$temp_t;
$show_c1=$code[1];
$show_r1=number_format($r[1],2);
$show_c2=$code[2];
$show_r2=number_format($r[2],2);
$show_r3=number_format($ra[0],2);
$ifshow[0]=0;
$ifshow[1]=1;
$ifshow[2]=1;
}
}
imagestring($im,3,$margin+90,0.25*$margin-7.5,"r".$show_c1.":".$show_r1,$black);
imagestring($im,3,$margin+165,0.25*$margin-7.5,"r".$show_c2.":".$show_r2,$black);
imagestring($im,3,$margin+240,0.25*$margin-7.5,"r".$show_c1."+".$show_c2.":".$show_r3,$black);
if($ifshow[0]==1)
{
$beta0=($xy0-$x0*$y0/$num0)/($xx0-$x0*$x0/$num0);
$alpha0=$y0/$num0-$beta0*$x0/$num0;
$num_p=0;
$tempy=$beta0*$min1+$alpha0;
if($tempy>=$min2 && $tempy<$max2)
{
$px[$num_p]=$margin+$space;
$py[$num_p]=$margin+$space+$axis_len-$axis_len*($tempy-$min2)/($max2-$min2);
$num_p++;
}
$tempx=($max2-$alpha0)/$beta0;
if($tempx>=$min1 && $tempx<$max1)
{
$px[$num_p]=$margin+$space+$axis_len*($tempx-$min1)/($max1-$min1);
$py[$num_p]=$margin+$space;
$num_p++;
}
$tempy=$beta0*$max1+$alpha0;
if($tempy>$min2 && $tempy<=$max2)
{
$px[$num_p]=$margin+$space+$axis_len;
$py[$num_p]=$margin+$space+$axis_len-$axis_len*($tempy-$min2)/($max2-$min2);
$num_p++;
}
$tempx=($min2-$alpha0)/$beta0;
if($tempx>$min1 && $tempx<=$max1)
{
$px[$num_p]=$margin+$space+$axis_len*($tempx-$min1)/($max1-$min1);
$py[$num_p]=$margin+$space+$axis_len;
}
//imagestring($im,5,0,0,$px[1],$red);
imageline($im,$px[0],$py[0],$px[1],$py[1],$red);
}
if($ifshow[1]==1)
{
$beta1=($xy1-$x1*$y1/$num1)/($xx1-$x1*$x1/$num1);
$alpha1=$y1/$num1-$beta1*$x1/$num1;
$num_p=0;
$tempy=$beta1*$min1+$alpha1;
if($tempy>=$min2 && $tempy<$max2)
{
$px[$num_p]=$margin+$space;
$py[$num_p]=$margin+$space+$axis_len-$axis_len*($tempy-$min2)/($max2-$min2);
$num_p++;
}
//imagestring($im,5,200,0,$px[1],$red);
$tempx=($max2-$alpha1)/$beta1;
if($tempx>=$min1 && $tempx<$max1)
{
$px[$num_p]=$margin+$space+$axis_len*($tempx-$min1)/($max1-$min1);
$py[$num_p]=$margin+$space;
$num_p++;
}

$tempy=$beta1*$max1+$alpha1;
if($tempy>$min2 && $tempy<=$max2)
{
$px[$num_p]=$margin+$space+$axis_len;
$py[$num_p]=$margin+$space+$axis_len-$axis_len*($tempy-$min2)/($max2-$min2);
$num_p++;
}

$tempx=($min2-$alpha1)/$beta1;
if($tempx>$min1 && $tempx<=$max1)
{
$px[$num_p]=$margin+$space+$axis_len*($tempx-$min1)/($max1-$min1);
$py[$num_p]=$margin+$space+$axis_len;
}
imageline($im,$px[0],$py[0],$px[1],$py[1],$blue);

}
if($ifshow[2]==1)
{
$beta2=($xy2-$x2*$y2/$num2)/($xx2-$x2*$x2/$num2);
$alpha2=$y2/$num2-$beta2*$x2/$num2;
$num_p=0;
$tempy=$beta2*$min1+$alpha2;
if($tempy>=$min2 && $tempy<$max2)
{
$px[$num_p]=$margin+$space;
$py[$num_p]=$margin+$space+$axis_len-$axis_len*($tempy-$min2)/($max2-$min2);
$num_p++;
}
//imagestring($im,5,200,0,$px[1],$red);
$tempx=($max2-$alpha2)/$beta2;
if($tempx>=$min1 && $tempx<$max1)
{
$px[$num_p]=$margin+$space+$axis_len*($tempx-$min1)/($max1-$min1);
$py[$num_p]=$margin+$space;
$num_p++;
}

$tempy=$beta2*$max1+$alpha2;
if($tempy>$min2 && $tempy<=$max2)
{
$px[$num_p]=$margin+$space+$axis_len;
$py[$num_p]=$margin+$space+$axis_len-$axis_len*($tempy-$min2)/($max2-$min2);
$num_p++;
}

$tempx=($min2-$alpha2)/$beta2;
if($tempx>$min1 && $tempx<=$max1)
{
$px[$num_p]=$margin+$space+$axis_len*($tempx-$min1)/($max1-$min1);
$py[$num_p]=$margin+$space+$axis_len;
}
imageline($im,$px[0],$py[0],$px[1],$py[1],$green);
}
imagegif($im);
imagedestroy($im);
?>
