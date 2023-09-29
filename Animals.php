<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADOPT ME</title>
 
  <style type="text/css">
  	*
  	{
  		margin: 0px;
  		padding:0px;
  	}
  	nav
    {
    
      background: rgba(0,0,0,0.9);
     
      height:100px;
      width:100%;
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

    .centre
    {
    background-color:white;
    text-decoration: none;
    cursor:pointer;
    color:black;

    }
    .centre:hover{
 color:rgb(0,255,255);

    }
    nav ul  li a:hover 
    {
      border-radius: px;
      color:rgb(0,255,255);

     
    }

    .one
    {
    	background-color:#281f28;
    	height:550px;
    	width:100%;
    	display: flex;
    	border-bottom:4px solid white;
    	border-top:4px solid white;
    }

    .one .oneimg
    {
    	height:500px;
    	width:30%;
    	background-color:rgba(0,0,0,0.5);
    	margin:25px;
    	border-radius:45px;
    }

    .one .twoimg
    {
    	height:500px;
    	width:30%;
    	background-color:rgba(0,0,0,0.5);
    	margin:25px;
    	border-radius:45px;
    }


    .one .threeimg
    {
    	height:500px;
    	width:30%;
    	background-color:rgba(0,0,0,0.5);
    	margin:25px;
    	border-radius:45px;
    }

    * h1
    {
    	color:white;
    	text-align: center;

    }

    * p

   {
   		color:white;
   		text-align: center;
   }
   	button
{
	height:30px;
	width:25%;
	border-radius:20px;
	margin-top:40px;

}

button p
{
	font-size:20px;
	color: black;


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
       <li><a href="signup.php">SignUp</a></li>
     </ul> 
    </nav>



    <div class="one">
    	
    	<div class="oneimg">
    		<img src="img/3.jpg" style="padding-left:100px; padding-top:10px">
    		<h1><b>Rupert</b></h1>
    		<p>
 				Age  : 2 Years 2 Months Old <br>
				Size  : (When Grown) Large 61-100 Lbs (28-45 Kg) <br>
				Breed : Beagle <br>
				Sex   : Male <br>
			<a  href="adoptme.php">	<button class="centre" >Adopt Me</button>
			</a>
    	</div>




    	<div class="twoimg" >
    		<img src="img/13.jpg" style="padding-left:100px; padding-top:10px">
    		<h1><b>Bruno</b></h1>
    		<p>
 				Age  : 2 Years  <br>
				Size  : (When Grown) Large 150-200 Lbs (45-60Kg) <br>
				Breed : Doberman Pinscher  <br>
				Sex   : Male <br>
      <a  href="adoptme.php">  <button class="centre" >Adopt Me</button>
       </a>
    	</div>



    	<div class="threeimg">
    		<img src="img/14.jpg" style="padding-left:100px; padding-top:10px">
    		<h1><b>Rico</b></h1>
    		<p>
 				Age  : 3 months  <br>
				Size  : (When Grown) Small 25 Lbs (11 Kg) Or Less <br>
				Breed : Chihuahua <br>
				Sex   : Female <br>
			 <a  href="adoptme.php">  <button class="centre" >Adopt Me</button>
     
      </a>
    	</div>


	</div>

	<footer class="footer-distributed">


      <div class="footer-left">

        <p class="footer-links">
          <a class="link-1" href="#">Home</a>

          <a href="#">Animals</a>


          <a href="#">About Us</a>

          <a href="Login.php">Login</a>

          <a href="signup.php">SignUp</a>

        </p>

        <p>Pet Adoption &copy; 2022</p>
      </div>






    </footer>







</body>
</html>