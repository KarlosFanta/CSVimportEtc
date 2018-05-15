<?php

	
	//require_once("inc_OnlineStoreDB.php");//page567
	require_once("headerimport.php");//page567


	//$date = date("H:i dS F"); //Get the date and time.
	//echo $date;
	//$file = "logaddcust.php"; //Where the log will be saved.


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ACS KC Import3 data to event</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<!--<META HTTP-EQUIV="refresh" CONTENT="8"> automtic refresh do not use!)-->
<!-- refreshes page every 3 seconds-->
<script type="text/javascript">
//Javascript for Validation of user inputs
function formValidator(){
	// variable
	var dadata = document.getElementById('dadata');
	//var CustLName = document.getElementById('CustLName');
	var CustTN = document.getElementById('CustTN');
	var CustCN = document.getElementById('CustCN');
	var CustEm = document.getElementById('CustEm');
	var CustDI = document.getElementById('CustDi');
	var CustPW = document.getElementById('CustPW');
	
	// Checks inputs
	// WARNING isEmpty does not exist! it is notEmpty
		//KEEP THE SEQUENCE CORRECT     KEEP THE SEQUENCE CORRECT                 KEEP THE SEQUENCE CORRECT

	if(notEmpty(dadata, "Please enter only letters for your first name")){
	//if(isAlphabet(CustLName, "Please enter only letters for your surname")){
	//if(isAlphanumeric(CustLName, "Numbers and Letters Only for Address")){
	if(isNumeric(CustTN, "Please enter a valid numeric telephone number")){
	if(isNumeric(CustCN, "Please enter a valid numeric cellophone number")){
	if(emailValidator(CustEm, "Please enter a valid email address")){
	if(isNumeric(CustDi, "Please enter a valid numeric number for the kilometers")){
	if(notEmpty(CustPW, "Please enter a valid password")){
							return true;
						}
					}
				}
	//		}
		}
	}
	}//very important bracket!!!!!
	
	return false;
	
}


function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
</script>
</head>
<body>

<?php	$page_title = "Register";
//	require_once('header.php');	
?>
	<!--<h1><?php //echo htmlentities($storeInfo['name']); ?></h1>-->
	<!--<p><a href="HomePage.php">Home</a></p>-->
	<!--<p><h2>Register</h2></p>-->
		




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
<a href = "https://maps.google.com/maps?oe=&q=Buxton+Ave,+Cape+Town+8001,+South+Africa" target=_blank></a></b><br><br>

<a href="https://maps.google.com/maps?oe=&q=Buxton+Ave,+Cape+Town+8001,+South+Africa"  onclick="window.open('https://maps.google.com/maps?oe=&q=Buxton+Ave,+Cape+Town+8001,+South+Africa', 'newwindow', 'width=900, height=650'); return false;"> Google MAP</a>



Is this an individual street light, or is it a section of street lights?<br> Please provide the nearest intersecting road name.
<br>
<textarea  id="txtArea" name="txtArea" rows="30" cols="80">
Hi&#13;
Please find below a list of street lights that are not working and which&#13;
need to be attended to in Gardens Oranjezicht.&#13;
&#13;
<?php //echo mb_substr($item1bon, 0, 180);
//include "http://karlos.co.za/79/m1read.php";
//You cannot get the file to require it from internet (with http protocol) it's restricted. The files must be on the same server. With Possibility to see each others (rights)
?>

&#13;&#13;
 Thank you&#13;
 Karl






</textarea>

<br>
<!--<input type="submit" value="Create event" onclick="return confirm('Are you sure about the date?');" /> -->
<input type="submit" value="Create event" /> 
<!--<input type="button" value="Submit" onclick="formValidator()" />--> 
<br><br><br>
<!--
$ENotes = str_ireplace("10240 KB", "10mbps", $ENotes);<br />
$ENotes = str_ireplace("adsl", "dsl", $ENotes);<br />
$ENotes = str_ireplace("rental", "rntl", $ENotes);<br />
$ENotes = str_ireplace("installed", "instld", $ENotes);<br />
$ENotes = str_ireplace("advance", "advnc", $ENotes);<br />
$ENotes = str_ireplace("months", "month", $ENotes);<br />
$ENotes = str_ireplace("1 month invoicing for", "inv", $ENotes);<br />
$ENotes = str_ireplace("Gig cap account", "GB", $ENotes);<br />
$ENotes = str_ireplace("circuit", "cct", $ENotes);<br />
$ENotes = str_ireplace("till the end of the month for line at", "till end of month: line ", $ENotes);<br />
$ENotes = str_ireplace("2048 Kb", "2mbps", $ENotes);<br />
$ENotes = str_ireplace("1048 Kb", "1mbps", $ENotes);<br />
$ENotes = str_ireplace("1 gigs", "1 gig", $ENotes);<br />
$ENotes = str_ireplace("signed up on", "signed up", $ENotes);<br />
$ENotes = str_ireplace("Uncapped", "Uncappd", $ENotes);<br />
$ENotes = str_ireplace("account", "acc", $ENotes);<br />
<!--<b>Customer: </b>-->
<?php
/*$queryS = "select CustNo, CustFN, CustLN from customer where CustNo = 1";
//echo $queryS."<br>";
$query = "select CustNo, CustFN, CustLN from customer order by CustLN ";
//echo $query."<br>";


if ($result2 = mysqli_query($DBConnect, $queryS)) {
  while ($row2 = mysqli_fetch_assoc($result2)) {
 
$item1b = $row2["CustNo"];
$item2b =  $row2["CustLN"];
$item3b = $row2["CustFN"];
//print $item2b;
// echo "____".$CNN;
//print "<option value='$item2'>$item2";
//print "<option value='$item3'>$item3";




	}
$result2->free();
	}


*/
?>


<!--
<select name="mydropdownEC" >

<!--<option value="_no_selection_">Select Customer</option>";-->


<?php
/*if (@$_SESSION['CustNo'] == "")  //works if session was destroyed
$CNN = 1;
	
echo "<option value='_no_selection_'>1</option>";
echo "<option value='".$_SESSION['CustNo']."'>".$_SESSION['CustNo']."</option>";


if ($result2 = mysqli_query($DBConnect, $queryS)) {
  while ($row2 = mysqli_fetch_assoc($result2)) {
 
$item1b = $row2["CustNo"];
$item2b =  $row2["CustLN"];
$item3b = $row2["CustFN"];
//print "<option value='$item1b'>$item2b";

echo "<option value='";
echo $item1b;
echo "'>";
echo $item2b;

//KEEP THIS AS CNN becasue you can have this as a 2nd option.
echo "____".$CNN; //selected customer of current session
 print "_".$item1b;
//echo "kjbjkbkjb";
print "_".$item3b;

//print "<option value='$item2'>$item2";
//print "<option value='$item3'>$item3";




print " </option>"; 
	}
$result2->free();
}

//print "<option value='$item'>$item";
  //print " </option>"; 
//while ($row = mysql_fetch_assoc($result)) {
if ($result = mysqli_query($DBConnect, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
$item1 = $row["CustNo"];
$item2 =  $row["CustLN"];
$item3 = $row["CustFN"];
print "<option value='$item1'>$item2"; //all customers
print "_".$item1;
print "_".$item3;

//print "<option value='$item2'>$item2";
//print "<option value='$item3'>$item3";




print " </option>"; 

//    echo $row["CustNo"];//case sensitive!
//    echo $row["CustFN"];//case sensitive!
//    echo $row["CustLN"];//case sensitive!
	}
$result->free();
//mysql_free_result($result);

}
// close connection 
//$mysqli->close();

print " </option>"; 
echo $item3b;
*/
?>
<!--	
</select>  

		
<br><br>
	
</form>

<form action="somewhere.php" method="post">-->
<?php
//get class into the page
/*require_once('calendar/tc_calendar.php');

//instantiate class and set properties
$myCalendar = new tc_calendar("date1", true);
$myCalendar->setIcon("images/iconCalendar.gif");
$myCalendar->setDate(1, 1, 2000);

//output the calendar
$myCalendar->writeScript();	  
?>
</form>




<?php
$myCalendar = new tc_calendar("date2");
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1970, 2020);
	  $myCalendar->dateAllow('2008-05-13', '2015-03-01', false);
	  $myCalendar->startMonday(true);
	  $myCalendar->disabledDay("Sat");
	  $myCalendar->disabledDay("sun");
	  $myCalendar->writeScript();

?>

</form>






<?php
echo "All existing events :<br>";
$SQLstring = "SELECT * FROM events where Priority  != 'High' AND where CustNo = $CustInt ";
$SQLstring = "SELECT * FROM events where Priority  != 'High' AND CustNo = 1 ";
//$SQLstring = "SELECT * FROM events where CustNo = 1 ";
//$SQLstring = "SELECT * FROM events where Priority  = 'High'  ";
//echo $SQLstring."<br><br>"; //the whole content of the table is now require_onced in a PHP array with the name $QueryResult.

//$QueryResult = @mysql_query($SQLstring, $DBConnect);

if ($result = $DBConnect->query($SQLstring)) {//FROM events table
echo "<table width='10' border='0'>\n";
echo "<tr><th>event No</th>";
//echo "<th>CustNo</th>";
echo "<th>EDate date DD/MM/YYYY<br></th>";
echo "<th>AmtPaid</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EENotes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>";
echo "<th>Priority</th>";
echo "<th>Customer</th>";
echo "<th>Destination</th>";

echo "</tr>\n";


    while ($row = $result->fetch_row()) {  //FROM events table
      //  printf ("%s (%s)\n", $row[0], $row[1]);

echo "<tr><th>{$row[0]}</th>";  //EventNo FROM events table
//echo "<th>{$row[1]}</th>";       //CustNoFROM events table
$CN = $row[1];                  //CustNO FROM events table
//$SQLstringLN = "select Summary from invoice where CustNo = $CN";
//$SQLstringLN = "select Summary from invoice where InvNo = $InvN";
//echo $SQLstringLN.""; //the whole content of the table is now require_onced in a PHP array with the name $QueryResult.
//$result2 = $DBConnect->query($SQLstringLN);
//    while ($rowI = $result2->fetch_row()) {     //from invoice table- rowI

//echo "<th>{$rowI[0]}</th>";
//}
//echo "<th>CustNo{$row[1]}</th>";   //CustNO FROM events table






$D1 = explode("-", $row[2]);
//echo $D1[2]."____";

//echo $D1[0]."____";
//echo $D1[1]."____";
//$D2 = $_POST['Date1'];

//$D3 = $_POST['Date1'];

$EDate = $D1[2]."/".$D1[1]."/".$D1[0];

echo "<th>";

echo $EDate;	 



echo "</th>";  //EDate FROM events table





echo "<th>{$row[3]}</th>";  //AmtPaid FROM events table
echo "<th>{$row[4]}</th>\n";  //EENotes FROM events table
echo "<th>{$row[5]}</th>\n";  //FROM events table
echo "</tr>\n";  
		}
    $result->close();
	
}
echo "</table>";








echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>existing events :<br>";
$SQLstring = "SELECT * FROM events where CustNo != 1 order by priority";
//$SQLstring = "SELECT * FROM events where CustNo = 1 ";
//$SQLstring = "SELECT * FROM events where Priority  = 'High'  ";
//echo $SQLstring."<br><br>"; //the whole content of the table is now require_onced in a PHP array with the name $QueryResult.

//$QueryResult = @mysql_query($SQLstring, $DBConnect);

if ($result = $DBConnect->query($SQLstring)) {//FROM events table
echo "<table width='10' border='0'>\n";
echo "<tr><th>event No</th>";
//echo "<th>CustNo</th>";
echo "<th>EDate date DD/MM/YYYY<br></th>";
echo "<th>AmtPaid</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EENotes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>";
echo "<th>Priority</th>";
echo "<th>Customer</th>";
echo "</tr>\n";


    while ($row = $result->fetch_row()) {  //FROM events table
      //  printf ("%s (%s)\n", $row[0], $row[1]);

echo "<tr><th>{$row[0]}</th>";  //EventNo FROM events table
//echo "<th>{$row[1]}</th>";       //CustNoFROM events table
$CN = $row[1];                  //CustNO FROM events table
//$SQLstringLN = "select Summary from invoice where CustNo = $CN";
//$SQLstringLN = "select Summary from invoice where InvNo = $InvN";
//echo $SQLstringLN.""; //the whole content of the table is now require_onced in a PHP array with the name $QueryResult.
//$result2 = $DBConnect->query($SQLstringLN);
//    while ($rowI = $result2->fetch_row()) {     //from invoice table- rowI

//echo "<th>{$rowI[0]}</th>";
//}
//echo "<th>CustNo{$row[1]}</th>";   //CustNO FROM events table






$D1 = explode("-", $row[2]);
//echo $D1[2]."____";

//echo $D1[0]."____";
//echo $D1[1]."____";
//$D2 = $_POST['Date1'];

//$D3 = $_POST['Date1'];

$EDate = $D1[2]."/".$D1[1]."/".$D1[0];

echo "<th>";

echo $EDate;	 



echo "</th>";  //EDate FROM events table





echo "<th>{$row[3]}</th>";  //AmtPaid FROM events table
echo "<th>{$row[4]}</th>\n";  //EENotes FROM events table
echo "</tr>\n";  
		}
    $result->close();
	
}
echo "</table>";



/*$message = 'You have deleted '.$TBLrow.'  from your Oracle database.';
echo "<SCRIPT>
alert('$message');
</SCRIPT>";

*/
?> 



</body>
</html>