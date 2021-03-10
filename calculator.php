<?php 
extract($_POST);
if(isset($save))
{

	switch($ch)
	{
		
		case '*':
		$res=$fn*$sn;
		break;
		
	}
	
}
//The above is php code for calculating the two values the amount the user wishes to pay and the second variable is the ERC/EPRA rate which is fixed

?>
<!DOCTYP html>
<html>
	<head>
		<title>KPLC Prepaid Tokens Calculator</title>
		
	</head>
	<body>
			<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

				<div class="container center">
					<div class="heading-block mt-4 nobottomborder">
						<h1 class="nott t600" style="font-size: 35px; letter-spacing: -1px; text-align: center;">Kenya Power Tokens Calculator</h1>
						<small class="mb-5 h6 lead">how much is Kenya Power Prepaid Electricity Token Units<br>Last Update: March 1st, 2020</small>
					</div>
				</div>

		<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Units for Domestic Consumers (Kwh)</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
			
			<tr>
				<th>Amount in Ksh</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>ERC/EPRA Rates</th>
				<th><input type="number" name="sn" readonly="readonly"value="<?php  echo 0.03?>"/></th>
			</tr>
			<tr>
					<th></th>
				<th>
				<select name="ch">
					
					<option>*</option>
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>