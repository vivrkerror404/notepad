<?php

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>create a note</title>
 	<meta charset="UTF-8">
    	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

 	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
.secret
{
  display: none;


}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
 </head>

 <body>
 	<div class="container-fluid">

 <!-- nav bar -->
		<div class="topnav" id="myTopnav">
		  <a href="#home" class="active">Home</a>
		  <a href="#contact">Contact</a>
		  <a href="#about">About</a>
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		    <i class="fa fa-bars"></i>
		  </a>
		</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!-- nav bar ends -->

<!-- form -->
 <form class="form-group" method="POST" action="save.php">
 	<label>Heading</label></label><input class="form-control" type="text" name="headings" placeholder="some Heading....">
 	<div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="contents" rows="7" placeholder="something you want to save maybe...... a link or a movie name"></textarea>
	</div>
  <div class="form-group checks">
      <label class="btn btn-success mr-5">
        <span class="mr-2">Enable Encryption</span><input class="radio_button" type="radio" name="encryption" id="option1" autocomplete="off" value="encrypt">
        <span class="glyphicon glyphicon-ok"></span>
      </label>
            <label class="btn btn-success">
        <span class="mr-2">Disable Encryption</span><input class="radio_button" type="radio" name="encryption" id="option2" autocomplete="off" value="not-encrypt">
        <span class="glyphicon glyphicon-ok"></span>
      </label>
    </div>
    <div class=" secret">
     <label>Enter Secret Key to Encrypt:</label><input type="text" name="secretkey" class="form-control" placeholder="enter secret key" >
   </div>
  <label>Save as:</label><input type="text" name="saveas" class="form-control" placeholder="a name to save your note">
    <input type="submit" class="btn btn-success btn-lg btn-block" name="save" placeholder="save">
 </form>
   <!-- form ends -->
 </div>
 <script type="text/javascript">


    $('.radio_button').click(function(){
    
       if($(this).val()=='encrypt')
       {
        alert("ebcrypt is checked");
        $('.secret').css('display','block');
        // document.getElementsByClassName('secret')[0].style.display="block";
      }
      else{
        alert("not encrypt is clicked");
        $('.secret').css('display','none');
        // document.getElementsByClassName('secret')[0].style.display="none";
 }
    });
 

 </script>
 </body>
 </html>