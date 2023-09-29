<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style type="text/css">
		*
  	{
  		margin: 0px;
  		padding:0px;
  	}

  	
  	.ab
  	{
  		background-color:#281f28;
    	height:550px;
    	width:100%;
    	border-bottom:4px solid white;
    	border-top:4px solid white;
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


    nav ul li a:hover
    {
      border-radius: px;
      color:rgb(0,255,255);
     
    }

    .blok
				{
					position: fixed;
					height:450px;
					width:100%;

				}

				*
				{
					margin:0;
					padding:0;
				}

				



				 .blok2 p
				{
					max-width:50%;
					font-size:25px;
					float:right;
					color:white;
					padding-top:130px;
					text-align:justify;
					padding-right: 10px;


				}

				.blok2 button
				{
					
					margin-top:20px;
					height:40px;
					width:10%;
					border-radius:20px;
					

				}


				.blok2 button a
				{
					text-decoration: none;
					font-size:20px;
					
				}

				.left img
				{
					height:450px;
					width:45%;
					float:left;
					
					margin:35px 30px;
					box-shadow: 0px 25px 45px rgba(0,0,0,.9);
					
					border-radius:20px;
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


<div class="ab">

    <div class="left">
				<img src="img/7.jpg">
			</div>


				<div class="blok">
					
					
				</div>
				<div class="blok2">	
				<p>Adopting is a fantastic option when it comes to adding a pet to your household or family. It requires a bit more effort than buying through a breeder or at the pet store, but it’s a decision with ethical benefits. By providing a fur-ever home to a pet from an adoption center or organization, you are basically saving that pet’s life.

				Traditionally, you’d need to go to a pet shelter or a rescue group to see the adoptable animals and start the adoption process. But thanks to the Internet, you can now view the adoptable animals in your area online. There are a huge variety of legitimate options, but we’ve gathered the best pet adoption websites below to make it easier for you to find your new best friend.</p>

				<button><a href="#">Learn More</a></button>

					</div>
					



</div>
    


<footer class="footer-distributed">


      <div class="footer-left">

        <p class="footer-links">
          <a class="link-1" href="#">Home</a>

          <a href="#">Animals</a>


          <a href="#">About us</a>

          <a href="Login.php">Login</a>

          <a href="signup.php">SignUp</a>


        </p>

        <p>Pet Adoption &copy; 2022</p>
      </div>






    </footer>


   
</body>
</html>