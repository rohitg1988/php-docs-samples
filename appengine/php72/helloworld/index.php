<?php

if(isset($_POST['sub']))

{

$mm=$_POST['mm'];

$dd=$_POST['dd'];

$yy=$_POST['yy'];

$dob=$mm."/".$dd."/".$yy;

$arr=explode('/',$dob);

//$dateTs=date_default_timezone_set($dob); 
$dateTs=strtotime($dob);

$now=strtotime('today');

if(sizeof($arr)!=3) die('ERROR:please entera valid date');

if(!checkdate($arr[0],$arr[1],$arr[2])) die('PLEASE: enter a valid dob');

if($dateTs>=$now) die('ENTER a dob earlier than today');

$ageDays=floor(($now-$dateTs)/86400);

$ageYears=floor($ageDays/365);

$ageMonths=floor(($ageDays-($ageYears*365))/30);

echo "<font color='red' size='10'> You are aprox $ageYears years and $ageMonths months old.  </font>";

}

?>

<form method="post"><center>
	
choose your DOB

	<select name="yy">
		<option value="">Year</option>
	        <?php
		for($i=1900;$i<=2014;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	

	<select name="mm">
		<option value="">Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	
	
	<select name="dd">
		<option value="">Date</option>
		<?php
		for($i=1;$i<=31;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}

		?>
	</select>
	
<input type="submit" name="sub" value="check it"/>

	</center>

	</form>
	

<?php

error_reporting(1);

$day=0;

$yr=0;

$mon=0;

if(isset($_POST['b1']))

{

$d1=$_POST['t1'];

$d2=$_POST['t2'];

$arr=explode("/",$d1);

$brr=explode("/",$d2);

if($arr[0]<$brr[0])

{

$arr[0]+=30;

$arr[1]-=1;

}

$day=$arr[0]-$brr[0];

if($arr[1]<$brr[1])

{

$m1+=12;

$arr[2]-=1;

}

$mon=$arr[1]-$brr[1];

$yr=$arr[2]-$brr[2];

}

?>

<form method="post">

<table border="2">

<tr>

<td align="center" colspan="2"><font color="orange"><h2><b>Age Calculator</b></h2></font></td>

</td>

<tr>

<td align="center"><b>enter current date (DD/MM/YYYY):</b></td>
<td align="center"><input type="text" name="t1" autofocus></td>

</tr>

<tr>

<td align="center"><b>enter your DOB (DD/MM/YYYY):</b></td>

<td align="center"><input type="text" name="t2"></td>

</tr>

<tr>

<td align="center" colspan="2"><input type="submit" name="b1" value="calculate"></td>

</tr>

<tr>

<td align="center"><b>Your Age is:</b></td>

<td align="center">

<?php 

error_reporting(1);

echo '<font color="blue" size="5">';

echo $yr.' years '.$mon.' months '.$day.' days ';

echo '</font>';

?>

</td>

</tr>

</table>

</form>
