<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
      <link rel="shortcut icon" href="./Favicon.png" type="image/png+xml">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Gruppo&display=swap">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
	<style type="text/css">
            body
            {
                  font-family: "Exo", sans-serif;
            }
		.container
		{
			background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('./assets/images/lgbg.jpeg');
			width: 100%;
			height: 100vh;
			background-position: center;
			background-size: cover;
			position: relative;
		}

            .form-box
            {
                  width: 90%;
                  max-width: 450px;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%,-50%);
                  background: #fff;
                  padding: 50px 60px 70px;
                  text-align: center;
            }

            .form-box h1
            {
                  font-size: 30px;
                  margin-bottom: 60px;
                  color: #fc9fab;
                  position: relative;

            }

            .form-box h1::after
            {
                  content: '';
                  width: 30px;
                  height: 4px;
                  border-radius: 3px;
                  background: #000;
                  position: absolute;
                  bottom: -12px;
                  left: 50%;
                  transform: translateX(-50%);
            }

            .input-field
            {
                  background: #eaeaea;
                  margin: 15px 0;
                  border-radius: 3px;
                  display: flex;
                  align-items: center;

            }

            input
            {
                  width: 100%;
                  background: transparent;
                  border: 0;
                  outline: 0;
                  padding: 18px 15px;
            }

            .input-field i
            {
                  margin-left: 15px;
                  color: #999;
            }

            form p
            {
                  text-align: left;
                  font-size: 13px;
            }

            form p a
            {
                  text-decoration: none;
                  color: #000;
            }

            .btn-field button
            {
                  padding: 1px;
                  width: 150px;
                  background: #FFB6C1;
                  color: #000;
                  border: none;
                  border-radius: 5px;
                  cursor: pointer;
                  font-size: 17px;
                  font-weight: 700;
            }
            .btn-field button input
            {
                  font-size: 20px;
                  font-weight: 600;
                  cursor: pointer;
            }
            .btn-field button:hover
            {
                  color: #FFB6C1;

            }
            .content p
            {
                  text-align: center;
                  font-size: 16px;
            }
            .content p i
            {
                  font-size: 20px;
                  color: #fc9fab;
                  cursor: pointer;
            }
            .content p a
            {
                  font-size: 18px;
                  color: #fc9fab;
            }
            .content p a:hover
            {
                  color: #fc9fab;
            }

	</style>
</head>
<body>
	<div class="container">
            <div class="form-box">
                  <img src="./assets/images/Logo.png" height="70px" width="120px">
                  <h1>New Registration</h1>
                  <form name="frm" action="reg2.php" method="post">
                        <div class="input-group">
                              <div class="input-field">
                                    <i class="ri-user-line"></i>
                                    <input type="text" placeholder="Name" name="nm" required autofocus>
                              </div>
                              
                              <div class="input-field">
                                    <i class="ri-user-line"></i>
                                    <input type="text" placeholder="Surname" name="sn" required autofocus>
                              </div>

                              <div class="input-field">
                                    <i class="ri-mail-line"></i>
                                    <input type="email" placeholder="Email" name="em" required>
                              </div>

                              <div class="input-field">
                                    <i class="ri-lock-line"></i>
                                    <input type="password" placeholder="Password" name="ps" required>
                              </div>

                              <div class="input-field">
                                    <i class="ri-phone-fill"></i>
                                    <input type="number" placeholder="Mobile Number" name="ph" required autofocus>
                              </div>

                              <div class="input-field">
                                    <i class="ri-user-line"></i>
                                    <input type="date" placeholder="DOB" name="dob" required autofocus>
                              </div>

                              <div class="btn-field">
                                  <button type="button"><input type="submit" name="rg" value="Signup"></button>
                              </div>
                              <div class="content">

                              <P>Already Have a Account </P><h3><a href="login1.php" style="text-decoration: none; color: black; ">Login Now!</a></h3>
                              <p>Or Sign in with <i class="ri-google-fill"></i></p>
                                 
                            
                              </div>
                        </div>
      
                  </form>
            </div>
		
	</div>

</body>
</html>