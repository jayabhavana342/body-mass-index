<html>
<head>
<!--Title of the Page-->
	<title>Assignment W1-Implementation 3</title>
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
   $(function() {
    $( "#dialog" ).dialog({ autoOpen: false });
  });
  $(function() {
    $( "#progressbar" ).progressbar({
      value: false
    });
  });
  $(function() {
    $( document ).tooltip();
  });
  $(function() {
  $("#radio").buttonset();
  
  });
</script>  
</head>

<body oncontextmenu="return false">
<center>
<h2><b>***Assignment W1-Implementation using PHP and JQuery***</b></h2>
<h3><b><font color="red"><u>Body Mass Index Calculator</u></font></b></h3>

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
  <h3>Enter the Values</h3>
  
  <div id="i_value">
  <div id="radio">
      <input type="radio" id="i" value="i" name="project" checked="checked">
      <label for="i"><b><i>BMI<sub>Imperial</sub></i></b></label>
 
      <input type="radio" id="m" value="m" name="project">
      <label for="m"><b><i>BMI<sub>Metric</sub></i></b></label>

	<p><label for="autocomplete2"><b>Enter Weight:</b></label>
	<input id="i_w" name="i_w" title="Imperial:Pounds. or Metric:Kilograms."></p>
	<p><label for="i_autocomplete1"><b>Enter Height:</b></label>
	<input id="i_h" name="i_h" title="Imperial:Inches. or Metric:Meters."></p>
	<input type="submit" val="submit"/> 
</div> 
 </div>
  </div>
  <div id="dialog" title="Basic dialog">
  <p>BMI Result is:</p>
  </div>
  </br>
  <div id="progressbar"></div>
  
  
</form>
 
</center> 
</body>
</html>