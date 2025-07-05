<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="shortcut icon" href="./Favicon.png" type="image/png+xml">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Gruppo&display=swap">
      <style type="text/css">
		 body
            {
                  font-family: "Exo", sans-serif;
            }
            .navbar 
            {
                  background-color: #ffcccc;
                  
            }
            .navbar-brand img
            {
                  height: 60px;
                  width: 100%;
                  justify-content: left;
            }

            .container
            {
                  padding: 0;
                  margin-left: 20px;
            }
            .title
            {
            	margin-left: 70px;
            	margin-bottom: 30px;
            	margin-top: 40px;
            }
            .content-title
            {
            	margin-top: 50px;
            	margin-bottom: 50px;
            	font-weight: 600;
            	text-align: center;
            }
            .content 
            {
            	border: 1px solid #7c7373;
            	height: 150px;
            	width: 65%;
            	margin-left: 70px;
            	background-color: #eee4e4;
            }
            ul
            {
            	margin-top: 20px;
            }
            li 
            {
            	display: flex;
            }
            .content ul p 
            {
            	margin-left: 8px;
            	color: #7c7373;
            }
            .sub-title
            {
            	text-align: center;
            	background-color: #ffcccc;
            	font-weight: 600;
            	justify-content: center;
            	padding-top: 15px ;
            	margin-top: 40px;
            	height: 60px;
            	width: 100%;
            }
            .sub-content
            {
            	margin-top: 20px;
            	display: flex;
            	margin-left: 50px;
            	margin-right: 50px;
            	background-color: rgba(238, 228, 228, 0.5);
            	border: 1px solid #ff9999;
            }
            .home_perfil
		  {
		    width: 230px;
		    height: 280px;
		    background: black;
		    border-radius: 50%;
		    overflow: hidden;
		    display: flex;
		    justify-content: center;
		    align-items: flex-end;
		    margin-top: 70px;
		    margin-left: 30px;
		  }
		  .home_perfil img
		  {
		  	width: 230px;
		  	height: 280px;
		  }
		  .sub-content-text
		  {
		  	margin-top: 50px;
		  	margin-left: 50px;
		  }
		  .sub-content-text p 
		  {
		  	color: #4d4b4b;
		  	margin-right: 60px;
		  }
		  #payment
		  {
		  	margin-left: 160px;
		  	margin-top: 100px;
		  	margin-bottom: 40px;
		  }
		  #payment h2
		  {
		  	text-align: center;
		  	margin-right: 90px;
		  	background-color: #ffcccc;
		  	border: 1px solid black;
		  	font-weight: 700;
		  } 

		 #column1, #column2, #column3
		 {
		    display: inline-block;
		    margin-left: 90px;
		    height: 280px;
		    width: 300px;
		    margin: 20px;
		    background-color: rgba(238, 228, 228, 0.7);
		    border-radius: 25px;
		    padding: 15px;
		    padding-top: 20px;
		    text-align: center;
		    cursor: pointer;
		}
		 #payment #column1:hover
		 {
		 	
		 	border: 3px solid #ff9999;
		 	transition: .5s ease;
		 }
		 #payment #column2:hover
		 {
		 	
		 	border: 3px solid #ff9999;
		 	transition: .5s ease;
		 }
		 #payment #column3:hover
		 {
		 	
		 	border: 3px solid #ff9999;
		 	transition: .5s ease;
		 }

		#column1 h5
		{
			border: 1px solid black;
			
		}
		#column1 h4, h5, p 
		{
			margin-bottom: 20px;
			margin-top: 10px;
		}
		#column2 h5
		{
			border: 1px solid black;
			
		}
		#column2 h4, h5, p 
		{
			margin-bottom: 20px;
			margin-top: 10px;
		}
		#column3{
			height: 290px;
		}
		#column3 h5
		{
			border: 1px solid black;
			
		}
		#column3 h4, h5, p 
		{
			margin-bottom: 10px;
			margin-top: 10px;
		}
		.btn1
		{
			background-color: #ffcccc;
			border: 2px solid #ff9999;
			border-radius: 8px;
		}
		.btn
		{
			margin-bottom: 130px;
		}
		.btn a
		{
			text-decoration: none;
			text-align: center;
			font-size: 22px;
			font-weight: 600;
			color: black;
			background-color: #ffcccc;
			padding: 8px;
			border: 1px solid black;
			border-radius: 8px;
			position: absolute;
			left: 48%;
		}
      </style>
</head>
<body>
	
	<!------------------------------HEADER-------------------------->

      <nav class="navbar">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="./assets/images/Logo.png" alt="Bootstrap" width="30" height="24">
              </a>
            </div>
      </nav>


	<!-- ----------------------MAIN CONTENT--------------------- -->

	<div class="title">
		<h3>
			I. Your Current Skin Analysis
		</h3>
	</div>

	<div class="content">
		<ul>
			<li><h5>SKIN TYPE : </h5><p> Sensitive</p></li>

			<li><h5>SKIN  ISSUES : </h5><p> Oily Skin, Acne</p></li>

			<li><h5>PRIMARY CONCERN : </h5><p> Moderate Acne</p></li>
		</ul>
		
	</div>


	<h4 class="content-title">Our Recommendations</h4>


	<!----------------------CONTENT 2---------------- -->

	<div class="content2">
		
		<div class="sub-title">
			<h4>1. Smooth Face Cleanser</h4>
		</div>

		<div class="sub-content">
			<div class="home_perfil">
				<img src="./assets/images/po7.png" >
			</div>

			<div class="sub-content-text">
				<h5>1. Cleanses Face Without Sensitizing the Skin</h5>
				<h5>2.  Made with Natural Ingredients</h5>
				<h5>3.  Absorbs Excess Oil on the Face </h5><br>

				<p>The First Step of Your daily Skincare Routine is To Cleanse Your Skin with with SkinLab's Natural Face Cleanser.</p>

				<div class="elements">

					<h5>Made With : </h5>
					<h6>Jojoba Oil</h6>
					<h6>Tea Tree Oil</h6>
					<h6>Salicylic Acid</h6>
					<h6>Benzoyl Peroxide</h6>
					<h6>Lavander Oil</h6><br>

				</div>

				<p>This Face Cleanser Gently Removes the Dirt from your Skin and feels like a feather touch. Its a Soap-Free Liquid Cleanser for adding Softness to Your Skin.</p>

			</div>
		</div>
	</div>

	<hr>

	<!-- ----------------CONTENT 3--------------------- -->

	<div class="content2">
		
		<div class="sub-title">
			<h4>2. Natural Oils Serum</h4>
		</div>

		<div class="sub-content">
			<div class="home_perfil">
				<img src="./assets/images/po4.png" >
			</div>

			<div class="sub-content-text">
				<h5>1. Closes Pores of Your Skin</h5>
				<h5>2.  Made with Natural Ingredients</h5>
				<h5>3.  Gentle and Made with Natural Oils.</h5><br>

				<p>The Secone Step of Your daily Skincare Routine is To Protect Your Skin with SkinLab's Natural Face Serum.</p>

				<div class="elements">

					<h5>Made With : </h5>
					<h6>Jojoba Oil</h6>
					<h6>Tea Tree Oil</h6>
					<h6>Salicylic Acid</h6>
					<h6>Benzoyl Peroxide</h6>
					<h6>Lavander Oil</h6><br>

				</div>

				<p>This Face Serum give Your Face a Feather Lite Glow.</p>

			</div>
		</div>
	</div>

	<hr>

	<!-- -------------------CONTENT 4------------------ -->

	<div class="content2">
		
		<div class="sub-title">
			<h4>3. Ultra Hydrating Lotion</h4>
		</div>

		<div class="sub-content">
			<div class="home_perfil">
				<img src="./assets/images/po6.png" >
			</div>

			<div class="sub-content-text">
				<h5>1. Smoothns Your Skin and Help to Hydrating it.</h5>
				<h5>2. Made with Natural Ingredients</h5>
				<h5>3. Absorbs Excess Oil on the Face </h5><br>

				<p>The third Step of Your daily Skincare Routine is To Mosturizes Your Skin with with SkinLab's Natural Face Lotion.</p>

				<div class="elements">

					<h5>Made With : </h5>
					<h6>Almond Oil</h6>
					<h6>Almond Extracts</h6>
					<h6>Hylounic Acid</h6>
					<h6>Coca Butter</h6>
					<h6>Coconut Oil</h6><br>

				</div>

				<p>This Lotion is Made with Extracts of Almonds and Honey and all Natural Ingredients that Deeply Mosturizes your skin
				with Activating the Inner Glow.</p>

			</div>
		</div>
	</div>


	<hr>

	<!-- ----------------------CONTENT 5------------------ -->

	<div class="content2">
		
		<div class="sub-title">
			<h4>4. Acne Cream </h4>
		</div>

		<div class="sub-content">
			<div class="home_perfil">
				<img src="./assets/images/po1.png" >
			</div>

			<div class="sub-content-text">
				<h5>1. Helps in Removing Acne on Your Skin.</h5>
				<h5>2.  Made with Natural Ingredients</h5>
				<h5>3.  Absorbs Excess Oil on the Face </h5><br>

				<p>The Fourth Step of Your daily Skincare Routine is To Apply this SkinLab's Anti Acne Cream at Night After Washing Face with Warm Water.</p>

				<div class="elements">

					<h5>Made With : </h5>
					<h6>Salacylic Acid</h6>
					<h6>Vitamin E Oil</h6>
					<h6>Lemon Extracts</h6>
					<h6>Benzoyl Peroxide</h6>
					<h6>Coconut Oil</h6><br>

				</div>

				<p>The Acne Cream is a Excellent solution for Removing Acne's of your Skin.</p>

			</div>
		</div>
	</div>


	<hr>


	<!-------------------------PAYMENT --------------------- -->

	<main id="payment">

		<h2>Check Out</h2>
		<div id="column1">

			<h4>2 Step Skincare Kit</h4>

			<h5>&#8377;999</h5>

			<p>Includes a pack of Skin Cleanser and Acne Cream</p>
			<button class="btn1">Select</button>

		</div>

		<div id="column2">

			<h4>3 Step Skincare Kit</h4>

			<h5>&#8377;1399</h5>

			<p>Includes a pack of Skin Cleanser Mosturizing Lotion and  Acne Cream</p>
			<button class="btn1">Select</button>

		</div>

		<div id="column3">
			
			<h4>Complete Skincare Kit</h4>

			<h5>&#8377;1499</h5>

			<p>Includes a pack of Skin Cleanser, Natural Oil Serum, Mosturizing Lotion and Acne Cream</p>
			<button class="btn1">Select</button>

		</div>
	</main>

	<button class="btn"><a href="homepage1.php">Check Out</a></button>
				
</body>
</html>