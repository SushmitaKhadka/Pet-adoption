<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<script>
function myFunction() {
  alert(" Thank you! \n Your message has been received. \n We will soon contact you !");
}
</script>
	<style type="text/css">
			*
{
	margin:0px;
	padding:0px;
}

body
{
	
	background-size: cover;
	background-image: url('img/21.jpg') ;
	
	
		

}

.container
{
	padding-left:450px;
	padding-top:100px;

	
	
}

.container .first
{
	position: relative;
	width:650px;
	height:700px;
	background-color:rgba(0,0,0,0.5);

	overflow: hidden;
	border-radius: 50px;
	box-shadow: 0px 25px 55px;


}






.first form
{
	
	margin-top:40px;
	padding-left:20px;	
}

.first h1
{
	text-align: center;
	font-size:40px;
	font-family:arial;
}


label p
{

	line-height:50px;
	font-size: 25px;
	color:white;
	font-family: arial;

}

input
{
	border-radius: 10px;
	height:60px;
	width:80%;
	background-color:rgba(0,0,0,0.5);
	color: white;

}

textarea
{
	border-radius: 10px;
	height:60px;
	width:80%;
	background-color:rgba(0,0,0,0.5);
	color: white;

}
button
{
	height:40px;
	width:20%;
	border-radius:20px;
	margin-top:40px;

}

button p
{
	font-size:20px;


}
.points{
        cursor:pointer;

}

nav
    {
    
      background: rgba(0,0,0,0.9);
     
      height:100px;
      width:100%;
     border-bottom:4px solid white;
    }


nav ul 
    {
      list-style: none;
      float:right;
      margin:0;
      padding:0;
      display:flex;
    }

    nav ul li a
    {
      padding:105px;
      line-height:80px;
      text-decoration:none;
      color:white;
      font-weight: bold;
    }


    nav ul li a:hover
    {
      border-radius: px;
      color:rgb(0,255,255);
     
    }

    	.footer-distributed {
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: normal 16px sans-serif;
  padding: 45px 50px;
}

.footer-distributed .footer-left p {
  color: #8f9296;
  font-size: 14px;
  margin: 0;
}
/* Footer links */

.footer-distributed p.footer-links {
  font-size: 18px;
  font-weight: bold;
  color: #ffffff;
  margin: 0 0 10px;
  padding: 0;
  transition: ease .25s;
}

.footer-distributed p.footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
  transition: ease .25s;
}

.footer-distributed .footer-links a:before {
  content: "·";
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

.footer-distributed .footer-right {
  float: right;
  margin-top: 6px;
  max-width: 180px;
}

.footer-distributed .footer-right a {
  display: inline-block;
  width: 35px;
  height: 35px;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;
  margin-left: 3px;
  transition:all .25s;
}

.footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

.footer-distributed p.footer-links a:hover{text-decoration:underline;}

/* Media Queries */

@media (max-width: 600px) {
  .footer-distributed .footer-left, .footer-distributed .footer-right {
    text-align: center;
  }
  .footer-distributed .footer-right {
    float: none;
    margin: 0 auto 20px;
  }
  .footer-distributed .footer-left p.footer-links {
    line-height: 1.8;
  }
}



	</style>
</head>
<body>  
		<nav>
     <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="animals.php">Animals</a></li>
       <li><a href="aboutus.php">About Us</a></li>
       <li><a href="logIn.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
     </ul> 
    </nav>


	<div class="container">
		
		<div class="first">
			<form method ="POST">

					<label><p>Full Name</p></label>
				<input type="text" name="fname">

				<br>

				<label><p>Contact number</p></label>
				<input type="phone" name="contactnumber">

				<br>

				<label><p>Address</p></label>
				<input type="text" name="address">

				<br>

				<label><p>Queries</p></label>
			<!-- 	<input type="textarea" name="message" rows="10" cols="30"> -->

				<textarea name="message" rows="10" cols="30"></textarea>
						<br> <br> <br>

					<input type="button" class="points" onclick="myFunction()" value="Submit" style="font-size:20px;" >

			</form>


 
</body>
</html>