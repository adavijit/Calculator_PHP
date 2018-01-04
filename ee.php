<!DOCTYPE html>
<html>
<head>
	<title>calci</title>
	<h1><b><i><center>LET'S CALCULATE</center></i></b></h1>
</head>
<body>
<form  name="calc" method="post" >
<table border="4">
<tr>
			<td colspan="4"><input type="text" name="disp"/></td>
	</tr>
<tr>
	<td><input type="button" name="n" value="7" onclick="calc.disp.value+='7'"/></td>
	<td><input type="button" name="n" value="8" onclick="calc.disp.value+='8'"/></td>
	<td><input type="button" name="n" value="9" onclick="calc.disp.value+='9'"/></td>
	<td><input type="button" name="op" value="C" onclick="calc.disp.value+=' '"/></td>
</tr>
<tr>
	<td><input type="button" name="n" value="4" onclick="calc.disp.value+='4'"/></td>
	<td><input type="button" name="n" value="5" onclick="calc.disp.value+='5'"/></td>
	<td><input type="button" name="n" value="6" onclick="calc.disp.value+='6'"/></td>
	<td><input type="button" name="op" value="+" onclick="calc.disp.value+='+'"/></td>
</tr>
<tr>
	<td><input type="button" name="n" value="1" onclick="calc.disp.value+='1'"/></td>
	<td><input type="button" name="n" value="2" onclick="calc.disp.value+='2'"/></td>
	<td><input type="button" name="n" value="3" onclick="calc.disp.value+='3'"/></td>
	<td><input type="button" name="op" value="-" onclick="calc.disp.value+='-'"/></td>
</tr>
	<tr>
	<td><input type="button" name="op" value="*" onclick="calc.disp.value+='*'"/></td>
	<td><input type="button" name="n" value="0" onclick="calc.disp.value+='0'"/></td>
	<td><input type="button" name="op" value="/" onclick="calc.disp.value+='/'"/></td>
	<td><input type="submit" name="=" value="=" /></td>
</tr>
<?php
$a=$_POST['n'];
if(isset($_POST['op']))
{
	$b=$_POST['n'];
}
$a=$_POST[0];
$b=$_POST[2];
echo $a;
echo $b;
if(isset($_POST['=']))
{
	switch($_POST['op'])
	{
	case '+':
		//onclick="calc.disp.value+=$a+$b";
    break;
	case '-':
			calc.disp.value+=($a-$b);
      break;
	case '*':
			calc.disp.value+=$a*$b;break;
	case '/':
	calc.disp.value+=$a/$b;break;
	}

}
?>



</table>
</form>


</body>
</html>
