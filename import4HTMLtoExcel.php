<?php

	
	require_once("headerimport.php");//page567



?>
<html>
<head>
<title>import</title>
</head>
<body>


<?php

/*$daNextNo = 1; //default when table is empty.
//$query = "SELECT  MAX(CustNo)  AS MAXNUM FROM customer";

$query = "SELECT MAX(CustNo), CustFN FROM customer";
$result = $DBConnect->query($query);
$row = $result->fetch_array(MYSQLI_NUM);
//printf ("%s (%s)\n", $row[0], $row[1]);
//echo $row[0];
//echo $row[1];
//$CN = $row[1];

$daNextNo = 1; //forces a 1 if table is completely empty.
$daNextNo = intval($row[0])+1;
*/
?>

<form name="Addcust" action="import4ProcessEmail.php" method="post">
<div>
<b><font size = "4" type="arial">HTML-table Data for Excel</b></font>
<br/>import4.php loads import4process.php<br/>
<!--<IMG SRC="../ACS/FromFirefox.jpg" border = "1">-->
		<dl>
			<dt><label>Create streetlights fault report email<?php //echo $this->lang->line('cust_fn'); ?>: </label></dt>
			<!--<dd><input type="text" id="cust_name" id="cust_fn" value="<?php //echo $this->mdl_custs->form_value('cust_name'); ?>" /></dd>-->
	<!--	<dd><input type="text"  id="dadata" size = 50 name="dadata" /> no ', no: Umlaute(special vowels)  </dd>-->
		</dl>
		



<input type="hidden" id="CustNo"  name="CustNo" value="<?php //echo @$CustInt;?>";



	
	
<br><b>
<a href = "https://maps.google.com/maps?oe=&q=MyRoad,+mySuburb, myCountry" target=_blank></a></b><br><br>

<a href="https://maps.google.com/maps?oe=&q=MyRoad,+mySuburb, myCountry"  onclick="window.open('https://maps.google.com/maps?oe=&q=MyRoad,+mySuburb, myCountry', 'newwindow', 'width=900, height=650'); return false;"> Google MAP</a>



Is this an individual street light, or is it a section of street lights?<br> Please provide the nearest intersecting road name.
<br>
<textarea  id="txtArea" name="txtArea" rows="30" cols="80">
Hi&#13;
Please find below a list of street lights that are not working and which&#13;
need to be attended to in....&#13;
&#13;

&#13;&#13;
 Thank you&#13;




	
</textarea>

<br>
<!--<input type="submit" value="Create event" onclick="return confirm('Are you sure about the date?');" /> -->
<input type="submit" value="Create event" /> 
<!--<input type="button" value="Submit" onclick="formValidator()" />--> 
<br><br><br>
?> 



</body>
</html>
