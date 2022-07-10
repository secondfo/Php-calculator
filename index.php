<?php
$val=0;
$value=0;
$op="";
if(isset($_POST['1'])){
	$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=1;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =1;
	}else
	{
		$val =$a . 1;
	}
}
if(isset($_POST['2'])){
	$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=2;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =2;
	}else
	{
		$val =$a . 2;
	}
}
if(isset($_POST['3'])){
		
		$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=3;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =3;
	}else
	{
		$val =$a . 3;
	}
}
if(isset($_POST['4'])){
		$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=4;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =4;
	}else
	{
		$val =$a . 4;
	}
}
if(isset($_POST['5'])){
		$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=5;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =5;
	}else
	{
		$val =$a . 5;
	}
}
if(isset($_POST['6'])){
		$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=6;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =6;
	}else
	{
		$val =$a . 6;
	}
}
if(isset($_POST['7'])){
	$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=7;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =7;
	}else
	{
		$val =$a . 7;
	}
}
if(isset($_POST['8'])){
		$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=8;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =8;
	}else
	{
		$val =$a . 8;
	}
}
if(isset($_POST['9'])){
		$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=9;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =9;
	}else
	{
		$val =$a . 9;
	}
}
if(isset($_POST['0'])){
	$screen2=$_POST['display-2'];
		
		if($screen2 !="0"){
		$value=$screen2;
		$val = $op;
		$op=$_POST['operator'];
	}if($op !=""){
			$val=0;}
			
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =0;
	}else
	{
		$val =$a . 0;
	}
}
/*if(isset($_POST['('])){
		$a=$_POST['display'];
		if ($a ==0)
	{
		$val ="(";
	}else
	{
		$val =$a . "(";
	}	
}
if(isset($_POST[')'])){
		$a=$_POST['display'];
		if ($a ==0)
	{
		$val =")";
	}else
	{
		$val =$a . ")";
	
	}
}*/
if(isset($_POST['/'])){
	$screen2=$_POST['display-2'];
	if($screen2 !="0"){
		$value=$screen2;
		$val = "/";
		$op = "/";
	}else{
	$value = $_POST['display'];
	$val = "/";
	$op = "/";
	}
}
if(isset($_POST['*'])){
	$screen2=$_POST['display-2'];
	if($screen2 !="0"){
		$value=$screen2;
		$val = "*";
		$op = "*";
	}else{
	$value = $_POST['display'];
	$val = "*";
	$op = "*";
	}
}
if(isset($_POST['+'])){
	$screen2=$_POST['display-2'];
	if($screen2 !="0"){
		$value=$screen2;
		$val = "+";
		$op = "+";
	}else{
	$value = $_POST['display'];
	$val = "+";
	$op = "+";
	}

}

if(isset($_POST['-'])){
	$value = $_POST['display'];
	
	$screen2=$_POST['display-2'];
	if($screen2 !="0"){
		$value=$screen2;
		$val = "-";
		$op = "-";
 }else{
	$value = $_POST['display'];
	$val = "-";
	$op = "-";
}
}
if(isset($_POST['dot'])){
	$a=$_POST['display'];
	if ($a ==0)
	{
		$val =$a . ".";
	}else
	{
		$val =$a . ".";
	}
	if (str_contains($val, "."))
	{
		
		$message = "dot already in string";
echo "<script type='text/javascript'>alert('$message');</script>";
		}
}

if(isset($_POST['='])){
	$i = $_POST['display'];
	$j=$_POST['operator'];
	$k=$_POST['display-2'];
	if ($j=="+"){
		$val = $i + $k;
		$value=0;
		$op="";
		}
	else if ($j=="-"){
		    $val = $k - $i;
			$value=0;
			$op="";
		}
	else if($j=="*"){
			$val =$i*$k;
			$value=0;
			$op="";
		}
	else if($j=="/"){
			$val=$k / $i;
			$value=0;
			$op="";
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
       <input type="text"  name="display" id="display" value="<?php echo $val; ?>" />
         <div id="hidden">
            <input type="number"  name="display-2" id="hide" value="<?php echo $value; ?>"  style= "display:none" />
            <input name="operator" type="text" value="<?php echo $op; ?>"  style= "display:none" >
         </div>
        <button class="button" name="7">7</button>
        <button class="button" name="8">8</button>
        <button class="button" name="9">9</button>
        <button id="delete">Del</button>
        <button class="button" name="4">4</button>
        <button class="button" name="5">5</button>
        <button class="button" name="6">6</button>
        <button class="button" name="/">/</button>
        <button class="button" name="1">1</button>
        <button class="button" name="2">2</button>
        <button class="button" name="3">3</button>
        <button class="button" name="*">*</button> 
        <button class="button" name="dot">.</button>
        <button class="button" name="0">0</button>
        <button class="button" name="-">-</button>
        <button class="button" name="+">+</button>
        <button id="clear" class="button">C</button>
        <button id="result" name="=">=</button>
        </form>
    </div>
</body>
</html>