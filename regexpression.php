<!DOCTYPE html>
<head>
<center>
<style >
   body{
      background: url(panda.png);
      background-repeat: no-repeat;
      background-size: cover;
   }
   h1{
     color: white;
  text-shadow: 2px 2px 4px black;
   }
</style>
	<title>regular expression</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.mim.css">
</head>

<body>
<br><br><br><br><br>
<center><h3>
<?php
   if(isset($_POST['create'])){


      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
   	$password = $_POST['password'];
      $repassword = $_POST['repassword'];

      if(empty($firstname)){
         echo "Fill up your information";

      }
      elseif(!preg_match("/^[a-z A-Z\S]+$/",$firstname)){
         echo  "Please Enter Name As Only String. ";
      }
      elseif(empty($lastname)){
         echo "Please Enter Your Last Name.";

      }
      elseif(!preg_match("/^[a-z A-Z\S]$/",$lastname)){
         echo "Please Enter Last Name As Only String.";
      }

      elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*)(? =.*[^a-z A-Z 0-9]).{6,20}$/m",$password)){

         echo "Enter 1 Uppercase, 1 Lowercase, 1 Number ,1 Special Character.";

      }
      elseif($password != $repassword){
         echo "Password doesnt match.";

      }
      elseif ($password == $password && $repassword == $repassword && $firstname == $firstname  && $lastname == $lastname){
         echo "Successfully Register!";
      }
   	

   	}

   ?>
   
   </center>
   </h3>

  <div class  = "container">
     <div class = "log in-box">
     <h1>Registration</h1>
     <form action = "regexpression.php" method = "post">
        
        <input type="text" name="firstname" class="form-control" placeholder="First Name.."required><br>

        <input type="text" name="lastname" class="form-control" placeholder="Last Name.."requires><br>

        <input type="email" name="email" class="form-control" placeholder="email address.." required><br>

        <input type="password" name="password" class="form-control" placeholder="Password.."required><br>

        <input type="password" name="repassword" class="form-control" placeholder="Re-Enter Password.." required=""><br><br><br>


        <center>
           
           <input type="submit" class="btn btn-primary" name="create" value="Sign Up"></center>
        

</center>
     </form>
        
     </div>
  </div>


</body>
</html>