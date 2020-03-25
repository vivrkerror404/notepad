<HTML>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>p{word-wrap: break-word;}body{word-wrap: break-word;}</style>
</head>
<BODY>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"><?php
session_start();
if(isset($_POST["authbtn"]))
{
	if($_POST["enckey"]==$_SESSION["enc_key"])
	{
 ?><div class="container"><br>
<u><h1>encrypteed data</h1></u>
<p>gngmvnmv</p>
<a href="http://localhost/notepadapp/web-notepad/">create a new note!</a>
</div>
</BODY></HTML>
 <?php
 }
 else
 {
 	?>
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
 ?>