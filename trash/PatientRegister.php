<?php

/*
include 'dbconn.php'
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $pa = password_hash($pass,PASSWORD_BCRYPT);
    $cpa =password_hash($cpass,PASSWORD_BCRYPT);

   

        if($pass === $cpass){
            $insertquery = "INSERT INTO `user`(`username`, `email`, `pass`,`phone`) VALUES ('$username','$email','$pa','$phone')";
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
    <input name='first'>
    <input name='last'>
    <input name='email'>
    <input name='username'>
    <input name='phone no'>
    <input name='password'>
</form>
*/

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="pt.css">
</head>
<body>
<?php
echo 'hello';
?>
<div class='div'>

</div>

</body>
</html>


