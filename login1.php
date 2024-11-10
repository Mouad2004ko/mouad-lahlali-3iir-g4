

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
      session_start();

      
      
      // Initialize variables for messages
      $emailError = $passwordError = $successMessage = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          $email = $_POST["emailName"];
          $password = $_POST["passName"];

          // Regex patterns
          $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
          $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";

          // Validate email
          if (!preg_match($emailPattern, $email)) {
              $emailError = "Invalid email format.";
          }

          // Validate password
          if (!preg_match($passwordPattern, $password)) {
              $passwordError = "Password must be at least 6 characters and contain a letter and a number.";
          }

          // If no errors, redirect to page1.php
          if (empty($emailError) && empty($passwordError)) {


           
            
      
            
      
            $_SESSION["email"] = $email;
      
            $_SESSION["password"] = $password;


            
              header("Location: page1.php");
              exit(); // Stop script execution after redirection
          }
      }
      ?>

<div class="container">
    <div class="brand-logo"> <img src="WIN_20241103_20_08_40_Pro.jpg" style="border-radius: 50%;  width: 100px; height: 100px;"  
        alt="Avatar"></div>

    <div class="brand-title" >My brand</div>
    <div class="inputs">
      <form  method="POST" >
      <label>EMAIL</label>
      <input type="text" name="emailName"  placeholder="Enter the email" />
      <span class="error"><?php echo $emailError; ?></span>
      <label>PASSWORD</label>
      <input type="password" name="passName" placeholder="Min 6 charaters long" />
      <span class="error"><?php echo $passwordError; ?></span>
      <button type="submit">LOGIN</button>
    </form>
    </div>
    
  </div>
  
  

  <?php


  ?>
















</body>



</html>