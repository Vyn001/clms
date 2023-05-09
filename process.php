<?php
    include "conn.php";
    session_start();

    //admin login
    if(isset($_POST['SignIn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = mysqli_query($conn,"SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        if(mysqli_num_rows($sql))
        {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            ?>

            <script>
                location.href="index.php";
            </script>
            <?php
        }

    }

?>