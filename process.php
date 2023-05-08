<?php
    include "conn.php";
    session_start();

    //admin login
    if(isset($_POST['SignIn'])){

        $email=$_POST['email'];
        $password=$_POST['password'];


        $SignIn=mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password' ");

        $S=mysqli_num_rows($SignIn);

        if($S >=1){
            $_SESSION['email']=$email;
            ?>
            <script>
                alert("Welcome Admin!");
                window.location.href="admin.home.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Invalid account! Please try again.")
                window.location.href="index.php";
                </script>
            <?php
        }
    }

?>