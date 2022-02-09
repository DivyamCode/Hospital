<?php
 include 'dbconn.php';
 if(isset($_POST["buttn1"])){
     $fname = $_POST['first'];
     $lname = $_POST['last'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $pass = $_POST['password'];
     $cpass = $_POST['c-password'];
     

     $pa = password_hash($pass,PASSWORD_BCRYPT);

   /*VALUES ('$username','$email','$pa','$cpa','$phone')*/ 

         if($pass === $cpass){
             $insertquery = "INSERT INTO `patient1`( `fname`, `lname`, `email`, `phone no`, `password`) VALUES('$fname','$lname','$email','$phone','$pa')";
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
     name
    <input name='first'>
    last
    <input name='last'>
    email
    <input name='email'>
    phone
    <input name='phone'>
    password
    <input name='password'>
    c-password
    <input name='c-password'>
    <button type="submit" name ='buttn1'>
        signup
     </button>
</form>