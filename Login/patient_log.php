<?php
session_start();
include 'dbconn.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from patient1 where email ='$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $id_name=$email_pass['fname'];

        $pass_decode = password_verify($password,$db_pass);
        $pa = password_hash($password,PASSWORD_BCRYPT);
        if($pass_decode){
            echo "login successfull";
            $_SESSION['fuser'] = $id_name;
            ?>
            <script>
                location.replace('home.php');
            </script>
            
            <?php

        }else{
            echo "password incorrect";
            echo $db_pass;
        }
    }else{
        echo "invalid email";
    }
}
?>

<form action='' method='post'>
    <input name= 'email'>
    <input name= 'password'>
    <button name='login' type="submit">
</form>