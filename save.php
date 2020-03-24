<?php

//getting the date
$a = date("y-m-d");

//declare variable
$headings=$_POST['headings'];
$contents=$_POST['contents'];
$save_as =$_POST['saveas'];

$repp = str_replace(' ','_',$save_as);

//saving the file
$rando=rand(0,999999);
$ss = "_";
$c = "save/".$repp.$ss.$a.$ss.$rando.".html";

//opening file stream
$fp=fopen($c,'w');
$lin = '<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
$met = '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
$sty = '<style>p{word-wrap: break-word;}body{word-wrap: break-word;}</style>';
$starting = "<HTML>\n<head>\n".$lin."\n".$met."\n".$sty."\n</head>\n<BODY>\n";
$con = '<div class="container"><br>';
$ending = "\n</div>\n</BODY></HTML>";
$headin = "\n<u><h1>".$headings."</h1></u>\n";

$postin = "<p>".$contents."</p>\n";
$create = '<a href="http://192.168.43.92/test/">create a new note!</a>';
//writing the data
fwrite($fp,"$starting$con$headin$postin$create$ending");

//closing the file
fclose($fp);
// echo "<h1>written to the ".$c." file successfully</h1>\n";
echo "<h2>Your note has been saved</h2>\n";
echo '<h1><a href="http://192.168.43.92/test/'.$c.'">click to open</a></h1>';
echo nl2br("\n <h2>copy below link to share your note </h2>\n");
echo "<h3>";
echo 'http://192.168.43.92/test/'.$c.'';

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
	<style type="text/css">
		body{font-family: arial;}
		h1{color: mediumseagreen;}
		a{color: black;
			background-color: pink;border: 1px solid black;border-radius: 05px;}
			h2{color: steelblue;}
			h3{color: red;}
	</style>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container">
	
</div>
</body>
</html>