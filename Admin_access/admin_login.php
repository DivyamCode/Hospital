<?php
include 'dbconn.php';


 if(isset($_POST['loginkey'])){
    $key = $_POST['key'];
    

    $key_search = "select * from adminkey where adminkey ='$key' ";
    $query = mysqli_query($con,$key_search);

    $key_count = mysqli_num_rows($query);

    if($key_count){
        $key_pass = mysqli_fetch_assoc($query);
        $db_key = $key_pass['adminkey'];

       
        if($db_key){
            echo "login successfull";
            $_SESSION['fuser'] = $db_key;
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
    <input name= 'key'>
    <button name='loginkey' type="submit">
</form>


