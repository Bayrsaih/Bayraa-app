<?php
error_reporting(1);
$numrows=5;
if((!$_GET['month'])&&(!$_GET['year']))
{
    $month = date("n");
    $year = date("Y");
}else{
    $month =$_GET['month'];
    $year = $_GET['year'];
}
$timestamp = mktime(0,0,0,$month,1,$year);
$monthname = date("F",$timestamp);
?>
<table style="width:105px;border-collapse:collapse;" border="1" cellpadding="3" cellspacing="0" bordercolor="#000000">
<tr style="background:#FFBC37;">
<td colspan = "8" style="text-align:center;" onmouseover="this.style.background='#FFCE6E'" onmouseout="this.style.background='#FFBC37'"><span style="font-weigth:bold;"><?php echo $monthname."".$year;?></span></td>
</tr>
<tr style="background:#FFBC37;">
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">Su</span></td>
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">M</span></td>
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">Tu</span></td>
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">W</span></td>
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">Th</span></td>
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">F</span></td>
<td style="text-align:center;width:15px;" onmouseover="this.style.background='#FFCE6E^'"
onmouseout="this.style.background='#FFBC37'"><span style="font-wight:bold;">Sa</span></td>
</tr>
<?php

$monthstart = date("w",$timestamp);
$lastday = date("d",mktime(0,0,0,$month+1,0,$year));
$startdate = $monthstart;
$numrows = ceil(((date("t",mktime(0,0,0,$month+1,0,$year))+$monthstart)/7));
for($k=1;$k<=$numrows;$k++){
    echo'</tr>';
    for($i=0;$i<7;$i++){
        $startdate++;
        if(($startdate <=0) || ($startdate > $lastday)){
            echo '<td style="background:#FFFFFF;">&nbsp;</td>';
        }
        else{
            if($startdate == date("j") && $month == date("n") && $year == date("Y"))
            {
                ?>
                <td style = "text-align:center; background:#FFBC37;"
                onmouseover="this.style.background = '#FFCE6E'"
                onmouseout ="this.style.background = '#FFBC37'">
                <?php echo date("j");?></td>
                <?php
            }
            else{
                ?>
                <td style="text-align:center;background:#A2BAFA;"
                onmouseover="this.style.background='#CAD7F9'"
                onmouseout ="this.style.background = '#A2BAFA'">
                <?php echo $startdate;?></td>
                <?php

            }
        }

    }
    echo'</tr>';
}
?>
</table>