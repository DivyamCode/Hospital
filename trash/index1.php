<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php

    include 'dbconn.php';
      if(isset($_POST["submit"])){
          $username = $_POST['username'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $pass = $_POST['password'];
          $cpass = $_POST['cpassword'];

          $pa = password_hash($pass,PASSWORD_BCRYPT);
          $cpa =password_hash($cpass,PASSWORD_BCRYPT);

         
    
              if($pass === $cpass){
                  $insertquery = "INSERT INTO `user`(`username`, `email`, `pass`, `cpass`, `phone`) VALUES ('$username','$email','$pa','$cpa','$phone')";
                  $iquery = mysqli_query($con,$insertquery);

                  if($iquery){
                      ?>
                        <script>
                            alert("connection successfull");
                        </script>
                      <?php
                  }else{
                      ?>
                                <script>
                                    alert("helllllllllooooooo");
                                 </script>
                      <?php
                   }


              }else{
                  echo "password not match";
                  }
          }
      
    ?>
<form action="" method="POST">
  <div class="form-group">
    <label >username</label>
    <input name="username" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label>email</label>
    <input name="email" placeholder="Password">
  </div>
  <div class="form-group">
    <label>phone</label>
    <input name="phone"  placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label>Password</label>
    <input  name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label >cpassword</label>
    <input  name="cpassword" aria-describedby="emailHelp" placeholder="Enter email">
  <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>