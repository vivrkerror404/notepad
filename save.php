
<?php

//getting the date
$a = date("y-m-d");
session_start();
//declare variable
$headings=$_POST['headings'];
$contents=$_POST['contents'];
$save_as =$_POST['saveas'];
$encryption =$_POST['encryption'];
$secretkey=$_POST['secretkey'];

$_SESSION["enc_type"] = $encryption;
$_SESSION["enc_key"] = $secretkey;

$repp = str_replace(' ','_',$save_as);

//saving the file
$rando=rand(0,999999);
$ss = "_";
$c = "save/".$repp.$ss.$a.$ss.$rando.".php";

//opening file stream
if($_SESSION["enc_type"]=='not-encrypt')
{
	$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}





	$sql2="select * from mytab where heading='$headings' and enc_key='$secretkey'";
	$result = $mysqli -> query($sql2);	
	$row=$result -> fetch_all(MYSQLI_ASSOC);
	if(mysqli_num_rows($result)<=1){
		$sql = "insert into mytab(id,heading,enc_key,filename) values('NULL','$headings','$secretkey','$save_as')";
$result = $mysqli -> query($sql);
	}


$fp=fopen($c,'w');
$lin = '<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
$met = '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
$sty = '<style>p{word-wrap: break-word;}body{word-wrap: break-word;}</style>';
$starting = "<HTML>\n<head>\n".$lin."\n".$met."\n".$sty."\n</head>\n<BODY>\n";
$con = '<div class="container"><br>';
$ending = "\n</div>\n</BODY></HTML>";
$headin = "\n<u><h1>".$headings."</h1></u>\n";

$postin = "<p>".$contents."</p>\n";
$create = '<a href="http://localhost/notepadapp/web-notepad/">create a new note!</a>';
//writing the data
fwrite($fp,"$starting$con$headin$postin$create$ending");
fclose($fp);
// echo "<h1>written to the ".$c." file successfully</h1>\n";
echo "<h2>Your note has been saved</h2>\n";
echo '<h1><a href="http://localhost/notepadapp/web-notepad/'.$c.'">click to open</a></h1>';
echo nl2br("\n <h2>copy below link to share your note </h2>\n");
echo "<h3>";
echo 'http://localhost/notepadapp/web-notepad/'.$c.'';
}
else
{
	$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}



?>

	<?php

	$sql="select * from mytab where heading='$headings' and enc_key='$secretkey'";
	$result = $mysqli -> query($sql);	
	$row=$result -> fetch_all(MYSQLI_ASSOC);
		if(mysqli_num_rows($result)<=1){
		$sql = "insert into mytab(id,heading,enc_key,filename) values('NULL','$headings','$secretkey','$save_as')";
$result = $mysqli -> query($sql);
	}

	// if($row['enc_key']==$_COOKIE['enc_key'])
	// {
		$fp=fopen($c,'w');
	
$phpstart='<?php
session_start();
if(isset($_POST["authbtn"]))
{
	if($_POST["enckey"]==$_SESSION["enc_key"])
	{
 ?>';
 $phpend='
 <?php
 }
 else
 {
 	?>
 	<h5>Encrytion key does not match</h5>
 	<button onclick="window.history.go(-1); return False;">GO BACK</button>
 	<?php
 	} 
 }
 else{
 	?>
 	<h1>Enter Encryption Key</h1>
 <form method="post">
<input type="text" name="enckey" class="form-control">
<input type="submit" class="btn btn-success" name="authbtn">
</form>

<?php
 }
 ?>';

//  $script='<script>

// document.getElementById("backbtn").addEventListener("click",function(){
// 	window.history.go(-1);
// 	})


// 	</script>';
$lin = '<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
$met = '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
$sty = '<style>p{word-wrap: break-word;}body{word-wrap: break-word;}</style>';
$starting = "<HTML>\n<head>\n".$lin."\n".$met."\n".$sty."\n</head>\n<BODY>\n";
$con = '<div class="container"><br>';
$ending = "\n</div>\n</BODY></HTML>";
$headin = "\n<u><h1>".$headings."</h1></u>\n";

$postin = "<p>".$contents."</p>\n";
$create = '<a href="http://localhost/notepadapp/web-notepad/">create a new note!</a>';
//writing the data
fwrite($fp,"$starting$met$lin$phpstart$con$headin$postin$create$ending$phpend");

//closing the file
fclose($fp);
// echo "<h1>written to the ".$c." file successfully</h1>\n";
echo "<h2>Your note has been saved</h2>\n";
echo '<h1><a href="http://localhost/notepadapp/web-notepad/'.$c.'">click to open</a></h1>';
echo nl2br("\n <h2>copy below link to share your note </h2>\n");
echo "<h3>";
echo 'http://localhost/notepadapp/web-notepad/'.$c.'';
	// }
	// else
	// {

	// 	echo "<script>alert('encryption key is incorrect')</script>";
	// 	echo "<script>window.location=`http://localhost/notepadapp/web-notepad/index.php`</script>";
	// }
}


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


