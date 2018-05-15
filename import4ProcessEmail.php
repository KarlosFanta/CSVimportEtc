<?php
	include('headerimport.php');	
require_once("inc_OnlineStoreDB.php");

$EventNo = 0;
$EDate = '';
$txtArea ='';
$Priority = '_';
$Destination = '_';
//$EventNo = $_POST['EventNo'];
$txtArea = $_POST['txtArea'];
$CustNo = 0;
$EDate = '2000-01-01';

$EventNoInt = intval($EventNo);

/*
LF 	&#10; 	line feed
VT 	&#11; 	vertical tab
FF 	&#12; 	form feed
CR 	&#13; 	carriage return
*/

$TA = $_POST['txtArea'];
//\x0D carriage return (CR) &#13;
$string = $txtArea;
$string = $TA;
$array = preg_split ('/$\R?^/m', $string);

echo "<br>A0: ".$array[0]; //blank
echo "<br>A1: ".$array[1]; //1
echo "<br>A2: ".$array[2]; //1 months...
echo "<br>A3: ".$array[3]; //124.00
echo "<br>A4: ".$array[4]; //124.00
//new batch:
echo "<br>A5: ".@$array[5]; //1
echo "<br>A6: ".@$array[6];
echo "<br>A7: ".@$array[7];
echo "<br>A8: ".@$array[8];
echo "<br>A9: ".@$array[9];
echo "<br>A10: ".@$array[10];
echo "<br>A11: ".@$array[11];

$thisyear = (Date("Y"));
$lastyear = (Date("Y"))-1;
$nextyear = (Date("Y"))+1;
echo "<br><br>";
  
  $cnt = count($array);
  echo "CNTARR:".$cnt."<BR>";
$nL = "%0D%0A"; //new line
$CustEmail = "me@me.com";
$bbbb = "Street lights not working";

?><font size = 4><b>
<a href="mailto:<?php echo $CustEmail ?>?subject=<?php echo $bbbb ?> &body=


<?php
for ($i = 0; $i <= 20; $i++) {
    //echo $i;
	echo @$array[$i];
	
	echo $nL;
	} ;
   ?>
   
   ">
Click to EMail Receipt to customer</a>

<br><br>

<br>
<br></font>


