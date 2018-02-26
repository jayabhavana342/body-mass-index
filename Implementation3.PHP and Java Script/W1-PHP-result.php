<?php
$formData = $_GET;
$height = $formData['i_h'];
$weight = $formData['i_w'];

$text1 = ' ';
$text2 = ' ';
if(isset($formData['project'])){
	if($formData['project']=='i')
	{
		$text1 = 'Height in Inches:'.$height.' inches.';
		$text2 = 'Weight in Pounds:'.$weight.' pounds.';		
		$result = 'BMI Imperial: '.($weight*703)/$height;
	}
	else
	{
		$text1 = 'Height in Meters:'.$height.' meters.';
		$text2 = 'Weight in Kilograms:'.$weight.' kg'.'s.';
		$result = 'BMI Metric: '.($weight)/$height;
	}
}


?>

<html>
<head>
<!--Title of the Page-->
	<title>Assignment W1-Implementation 1</title>
<!--Page styles are obtained from W1Q1style.css-->
	<link rel="stylesheet" type="text/css" href="W1Q1style.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="W1Q1style.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
  <script>
	$(function() {
    $( "#accordion" ).accordion();
	});
</script>
</head>

<body oncontextmenu="return false">



<center>
<h2><b>***Assignment W1-Implementation using PHP & JQuery***</b></h2>
</br>
<form action="W1-PHP-result.php" method="get">
  <div id="accordion">
  <h3>BMI<sub>Imperial</sub> & BMI<sub>Metric</sub> Formula's</h3>
  <div id="formula">
  <table>
	<tr>
		<td>
			<div>
				<b><i>BMI<sub>Imperial</sub></i></b>
			</div>
			<div>
				=
			</div>
			<div equation>
				<div numerator>
					(Weight in Pounds) x (703)
				</div>
				<div>
				------------------------------------
				</div>
				<div denominator>
					(Height in Inches)<sup>2</sup>
				</div>
            
			</div>
		</td>
		<td></td>
		<td>
			<div>
				<b><i>BMI<sub>Metric</sub></i></b>
			</div>
			<div>
				=
			</div>
			<div equation>
				<div numerator>
					(Weight in Kilograms)
				</div>
				<div>
				---------------------------
				</div>
				<div denominator>
					(Height in Meters)<sup>2</sup>
				</div>
            
			</div>
		</td>
	</tr>
  </table>
</div>
<h3>Result</h3>
<div id="i_value">
<div id="result">
<p>
<?php
	echo $text1;
	print "<br>";
	echo $text2;
	print "<br>";
	echo $result;
?>
</p>
</div>
 </div>
<!--
<div calculation>
	<h3><font color="red">Choose a Radio Button for BMI Calculation:</font></h3>
	
	<div id="radio">
	<input type="radio" name="v" value="i" id="i">BMI<sub>Imperial</sub>
	<br/>
	<input type="radio" name="v" value="m" id="m">BMI<sub>Metric</sub>
	<br/>
	</div>
	
	</br>
	
	<div>
	<b>Enter Height:</b> <input type = "text" name="height" id="h"/><br/>
	<b>Enter Weight:</b> <input type = "text" name="weight" id="w"/><br/>
	</div>
	
	</br>
	
	<input type="submit" value="Submit"/>
	
</div>-->

</form>
</center>

</body>
</html>