<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Survey-page-1</title>
      <link rel="shortcut icon" href="./Favicon.png" type="image/png+xml">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Gruppo&display=swap">
      <style>
            

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
            .main-title
            {
                  margin-top: 40px;
                  color: #d45e70;
                  text-align: center;
            }
            .image
            {
                  display: block;
                  margin-left: auto;
                  margin-right: auto;
                  width: 40%;
            }
            .main-title2
            {
                  margin-top: 40px;
                 
            }
            .mt 
            {
                  text-align: center;
            }
            .mt p
            {
                  font-size: 18px;
                
                  color: #7c7373;
            }
            .title h2
            {
                  font-weight: 500;
                  font-size: 27px;
                  color: #cd6373;
            }
            .sub-title h5
            {
                  color: #d88793;
                  font-size: 20px;
            }
            ul
            {
                  justify-content: center;
                  text-decoration: none;
                  display:grid;
                  display: flex;
                  list-style-type: none;
                  gap: 15px;
            }
            .content
            {
                  margin-top: 40px;
                  text-align: center;
            }
            .content h3
            {
                  color: #cd6373;
                  margin-bottom: 20px;
            }
            .name input
            {
                  width: 240px;
                  height: 40px;
                  text-align: center;
                  margin-bottom: 18px;
            }
            .age input
            {
                  width: 25px;
            }
            .age label
            {
                  font-size: 19px;
                  font-weight: 500;
            }
            .gender input
            {
                  width: 25px;
            }
            .gender label
            {
                  font-size: 20px;
                  font-weight: 500;
            }
            .btn
            {
                  display: flex;
                  justify-content: center;
                  margin-top: 60px;
                  margin-bottom: 70px;
            }
            .btn button
            {
                  background-color: #ffb6c1;
                  border: 1px solid #cd6373;
                  border-radius: 8px;
                  height: 40px;
                  width: 90px;
                  margin-left: 30px;
            }
            .btn a
            {
                  text-decoration: none;
                  font-size: 19px   ;
                  color: black;
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



      <!-------------------------HEADING------------------- -->
      <div class="heading">
            <div class="main-title">
                  <h1>How SkinLab Works</h1>
            </div>
            <hr>
            
                   <img src="./assets/images/skin-types.png" class="image" alt="img">
            
            <div class="main-title2">
                  <div class="mt">
                        <h3>1. Take a Short Survey About Your Skin</h3>
                        <p>Answer The Questions Asked By SkinLab About Your<br>
                               Skin Type, Allergies & Skin Characteristics.</p>
                  </div>
      
                  <div class="mt">
                        <h3>2. Get Customized Solutions</h3>
                        <p>Explore The Products Which Are Recommended By <br>
                         Us with Knowing the Ingredients That Suits Your Skin.</p>
                  </div>
      
                  <div class="mt">
                        <h3>3. Shop and Have an Beautiful Skin!</h3>
                        <p>Get Products at Extra Discount and Have an Option of <br>
                              Exchange Within 5 days plus 24/7 Service Assistance.</p>
                  </div>

            </div>
            
      </div>
      <hr>


      <!------------------------------MAIN PAGE------------------------->

      <div class="content">
            <form action="" name="frm" method="post">
            <div class="title">
                  <h2>Let We Know Your Skin!</h2>
            </div>
                  <div class="sub-title">
                        <h5>Tell Us About Your Skin Type, Skin Concerns And Lifestyle So<p>
                        That We Can Formulate A Customized Skincare Regimen that suits You Best.</h5>
                  </div>

            <div class="name">
                  <h3>What Is Your Name?</h3>
                  <input type="text" placeholder="Your Name" name="nm" required>
            </div>
            
            <div class="age">
                  <h3>What Is Your Age?</h3>
                  <ul>
                        <li>
                              <input type="radio" id="<18" value="<18" required>
                              <label for="<18"><18</label>
                        </li>
      
                        <li>
                              <input type="radio" id="12-18" value="12-18" required>
                              <label for="12-18">12-18</label>
                        </li>
      
                        <li>
                              <input type="radio" id="18-25" value="18-25" required>
                              <label for="18-25">18-25</label>
                        </li>
      
                        <li>
                              <input type="radio" id="26-35" value="26-35" required>
                              <label for="26-35">26-35</label>
                        </li>
                  </ul>
                  <ul>
                        <li>
                              <input type="radio" id="36-45" value="36-45" required>
                              <label for="36-45">36-45</label>
                        </li>
      
                        <li>
                              <input type="radio" id="46-55" value="46-55" required>
                              <label for="46-55">46-55</label>
                        </li>
      
                        <li>
                              <input type="radio" id="55+" value="55+" required>
                              <label for="55+">55+</label>
                        </li>
                  </ul>
      
            </div>
           
            <div class="gender">
                  <h3>What is your Gender?</h3>
                  <input type="radio" id="Male" value="Male" required>
                  <label for="Male">Male</label>
                  <input type="radio" id="Female" value="Female" required>
                  <label for="Female">Female</label>
            </div>
            
            </form>

            <div class="btn">
                  <button class="back"><a href="homepage1.php">Back</a></button>
           
                  <button class="next"><a href="s2.php">Next</a></button>
            </div>

      </div>
      
      


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>