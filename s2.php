<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Survey-page2</title>
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
            .toggle
            {
                  color: #cd6373;
                  font-size: 19px;
                  
            }
            .switch
            {
                  position: relative;
                  display: inline-block;
                  width: 55px;
                  height: 29px;
                  margin-left: 8px;
            }

            .switch input
            { 
                  opacity: 0;
                  width: 0;
                  height: 0;
            }

            .slider
            {
                  position: absolute;
                  cursor: pointer;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  background-color: #ccc;
                  -webkit-transition: .4s;
                  transition: .4s;
            }

            .slider:before
            {
                  position: absolute;
                  content: "";
                  height: 19px;
                  width: 19px;
                  left: 4px;
                  bottom: 5px;
                  background-color: white;
                  -webkit-transition: .4s;
                  transition: .4s;
            }

            input:checked + .slider
            {
                  background-color: #cd6373;
            }

            input:focus + .slider
            {
                  box-shadow: 0 0 1px #cd6373;
            }

            input:checked + .slider:before
            {
                  -webkit-transform: translateX(26px);
                  -ms-transform: translateX(26px);
                  transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round
            {
                  border-radius: 34px;
            }

            .slider.round:before
            {
                  border-radius: 50%;
            }
            .c1,
            .c2,
            .c3,
            .c4
            {
                  margin-bottom: 14px;
            }
            .c4
            {
                  margin-bottom: 30px;
            }
            .c1,
            .c2,
            .c3,
            .c4 label
            {
                  color: #cd6373;
                  font-size: 19px;
            }
            .c1 input.ck1,
            .c2 input.ck2,
            .c3 input.ck3,
            .c4 input.ck4
            {
                  height: 16px;
                  width: 16px;
                  margin-right: 6px;
            }
            
            .type img
            {
                  height: 90px;
                  width: 110px;
            }

            .subtype h5
            {
                  color: #cd6373;
                  margin-bottom: 19px;
                  margin-top: 19px;
            }
            .allergy label
            {
                  color: #cd6373;
                  font-size: 19px;

            }
            .allergy input.ck1
            {
                  height: 16px;
                  width: 16px;
            }
            .btn
            {
                  display: flex;
                  justify-content: center;
                  margin-top: 60px;
                  margin-bottom: 70px;
            }
            .btn1 button,
            .btn2 button
            {
                  background-color: #ffb6c1;
                  border: 1px solid #cd6373;
                  border-radius: 8px;
                  height: 40px;
                  width: 90px;
                  margin-left: 30px;
            }
            .btn1 a,
            .btn2 a
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

      <!----------------------------MAIN PAGE 2------------------>
      <form name="frm">
      
      <div class="content">
            <!---------------------TITLE 1---------------------->
            <div class="title1">
                  <h3>1. Please Select Your skin Type:</h3>
            </div>


            <div class="toggle">
                  <div class="c1">
                        Oily
                        <label class="switch">
                              <input type="checkbox" required>
                              <span class="slider round"></span>
                        </label><br>    
                  </div>

                  <div class="c2">
                        Dry
                        <label class="switch">
                              <input type="checkbox" required>
                              <span class="slider round"></span>
                        </label><br>
                  </div>

                  <div class="c3">
                        Combination
                        <label class="switch">
                              <input type="checkbox" required>
                              <span class="slider round"></span>
                        </label><br>
                  </div>

                  <div class="c4">
                        Normal
                        <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                        </label><br>
                  </div>
            </div>



            <!----------------------------TITLE 2--------------------- -->
            <div class="title2">
                  <h3>2. Please Select Your Concerns:</h3>
            </div>


            <div class="toggle">
                  <div class="c1">
                        Acne
                        <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                        </label><br>    
                  </div>

                  <div class="c2">
                        Color & Tone
                        <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                        </label><br>
                  </div>

                  <div class="c3">
                        No Issues
                        <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                        </label><br>
                  </div>

                  <div class="c4">
                        Whiteheads
                        <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                        </label><br>
                  </div>
            </div>


            <!-- ------------------------TITLE 3--------------------- -->

            <div class="title3">
                  <h3>3. How Often Does Your Acne Appear?</h3>
            </div>

            <div class="check">

                  <div class="c1">
                        <input type="checkbox" id="1" value="Once A Month" class="ck1">
                        <label for="1">Once A Month</label>
                  </div>

                  <div class="c2">
                        <input type="checkbox" id="2" value="Once In Two Months" class="ck2">
                        <label for="2">Once In Two Months</label>
                  </div>

                  <div class="c3">
                        <input type="checkbox" id="3" value="Always Present" class="ck3">
                        <label for="3">Always Present</label>
                  </div>

                  <div class="c4">
                        <input type="checkbox" id="4" value="Have an Allergic Reaction" class="ck4">
                        <label for="4">Have an Allergic Reaction</label>
                  </div>
            </div>


            <!-- -----------------------TITLE 4------------------ -->

            <div class="title4">
                  <h3>4. How Was Your Skin Feels?</h3>
            </div>

            <div class="type">
                  <div class="subtype">
                        <h5>The Skin on The Forehead & Nose Feels</h5>
                        <div class="c1">
                              <img src="face.png" alt="face">  

                              <input type="checkbox" id="1" value="Oily" class="ck1">
                              <label for="1">Oily</label>

                              <input type="checkbox" id="1" value="Dry" class="ck1">
                              <label for="1">Dry</label><br>

                              <input type="checkbox" id="1" value="Normal" class="ck1">
                              <label for="1">Normal</label>
                        </div>   
                  </div>

                  <div class="subtype">
                        <h5>The Skin on The Sides Of Your Nose Feels</h5>
                        <div class="c1">
                              <img src="face.png" alt="face">  

                              <input type="checkbox" id="1" value="Oily" class="ck1">
                              <label for="1">Oily</label>

                              <input type="checkbox" id="1" value="Dry" class="ck1">
                              <label for="1">Dry</label><br>

                              <input type="checkbox" id="1" value="Normal" class="ck1">
                              <label for="1">Normal</label>
                        </div>   
                  </div>

                  <div class="subtype">
                        <h5>The Skin on Your Cheeks Feels</h5>
                        <div class="c1">
                              <img src="face.png" alt="face">  

                              <input type="checkbox" id="1" value="Oily" class="ck1">
                              <label for="1">Oily</label>

                              <input type="checkbox" id="1" value="Dry" class="ck1">
                              <label for="1">Dry</label><br>

                              <input type="checkbox" id="1" value="Normal" class="ck1">
                              <label for="1">Normal</label>
                        </div>   
                  </div>
            </div>


            <!-- ----------------------TITLE 5------------------- -->

            <div class="title5">
                  <h3>5. Have Any Allergies?</h3>
            </div>

            <div class="allergy">

                  <input type="checkbox" id="1" value="Oily" class="ck1">
                  <label for="1">Food</label><br>

                  <input type="checkbox" id="1" value="Dry" class="ck1">
                  <label for="1">Drug</label><br>

                  <input type="checkbox" id="1" value="Normal" class="ck1">
                  <label for="1">Skin</label><br>

                  <input type="checkbox" id="1" value="Oily" class="ck1">
                  <label for="1">Dust</label><br>

                  <input type="checkbox" id="1" value="Dry" class="ck1">
                  <label for="1">Air</label><br>

                  <input type="checkbox" id="1" value="Normal" class="ck1">
                  <label for="1">None</label>

            </div>
      </form>

      <!-----------------BUTTONS--------------->
      
      <div class="btn">
            <div class="btn1">
                  <button class="previous"><a href="s1.php">Previous</a></button>
            </div>
            <div class="btn2">
                  <button class="next"><a href="sr1.php">Next</a></button>
            </div>
      </div>







</body>
</html>