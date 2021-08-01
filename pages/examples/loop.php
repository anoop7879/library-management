
<!Doctype html>
<html>
	<head>
	</head>
	<body>
	
	<form>
		<label>date :</label>
		<select name="date" placeholder="please choose">
		<?php

for($x=1; $x<=31; $x++){

// echo $y ."<br>";

	


?>
		<option value="select date"><?php
if($x<=9){
		echo "0".$x;

}else{
echo $x;
}
		?></option>
<?php

}

?>
	</select>
	<select name="month" placeholder="please choose">
		<?php
$y= 1;
for($x=1; $x<=12; $x++){

// echo $y ."<br>";


?>
		<option value="select month"><?php echo date("F",mktime(0,0,0,$y)); ?></option>
<?php
$y++;
}

?>
	</select>	
			
		
		<select name="year" placeholder="please choose">
		<?php
$y=1990;
for($x=0; $x<=31; $x++){

// echo $y ."<br>";

?>
		<option value="select year"><?php echo $y."<br>"; ?></option>
<?php
$y++;

}
?>
		</select>
		</form>
	
		
	</body>

</html>
