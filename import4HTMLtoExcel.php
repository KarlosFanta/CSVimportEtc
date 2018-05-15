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
		But first click here to select street names:
<a href= "addProofOnlyMysqlAjaxAutoSuggest.php">addProofOnlyMysqlAjaxAutoSuggest</a>

<?php
/*$daNextNo = 1; //default when table is empty.
$query = "SELECT  MAX(EventNo)  AS MAXNUM FROM H2E";


$result = mysqli_query($DBConnect, $query);// or die(mysql_error());
echo "<font size = 4 color = red>".mysqli_error($DBConnect)."</font>";
if (mysqli_affected_rows($DBConnect) == -1)
echo "<br><br><font size = 5 color = red><b><b>insert or update NOT successfull!!!</b></b></font><br><br>";
//else
//echo "select success! <br>";


$daNextNo = 1; //forces a 1 if table is completely empty.
while($row = mysqli_fetch_array($result)){
//	echo "The max no EventNo in customer table is:  ". $row[0] . "&nbsp;";
$daNextNo = intval($row[0])+1;
}
//	echo "Add 1 = ". $daNextNo;



//	require_once("../79/inc_OnlineStoreDB79.php");

	$querySon = "SELECT * FROM comment ORDER BY id DESC LIMIT 1";

	if ($result2on = mysqli_query($Rlink, $querySon)) {
	  while ($row2 = mysqli_fetch_assoc($result2on)) {
			$item1bon = $row2["message"];
			$row_cnt = mysqli_num_rows($result2on);
		}
	$result2on->free();
	}	

















*/


?>


<!--<table width='10' border='1'>-->
<?php
/*echo "<br>Add new events:<br>";

echo "<tr><th>event No</th>";
//echo "<th>CustNo</th>";
echo "<th>EDate DD/MM/YYYY</th>";
echo "<th>Priority</th>";
echo "<th>Destination</th>";
echo "<th>ENotes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>";
echo "</tr>\n";
?>
		<tr>
			<!--<th><label>* event AutoNumber: (!! Different for internet events!)</label>-->
			<th><input type="text" size="2"  id="EventNo" name="EventNo" value="<?php echo $daNextNo;?>" />
		</th>
		<!--<dt><label>* Customer:-->
<!--<select name="mydropdownDC" onclick="hi">-->
<?php
// Get records from database (table "name_list").
/*$list = mysql_query("SELECT * FROM customer where CustNo = $CustInt");

// Show records by while loop.
while($row_list=mysql_fetch_assoc($list)){
//$id =  $row_list['id'];
//$name = $row_list['name'];
//$email = $row_list['email'];
$CustNo =  $row_list['CustNo'];
$CustFN =  $row_list['CustFN'];
$CustLN =  $row_list['CustLN'];

echo "<input type = 'text' value='$CustInt' >";
// if($CustNo == $select){
//echo "selected";


//echo $CustNo;
//echo "_ ";
echo $CustFN;
echo " ";
echo $CustLN;

//echo "</option>";
} 
*/




?>

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
