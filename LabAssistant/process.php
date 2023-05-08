<?php 
    include '../conn.php';
    session_start();


    if(isset($_POST['time']))
    {
        date_default_timezone_set('Asia/Manila');
        $click = $_POST['time'];
        $type = $_POST['type'];
        $date = date('Y-m-d');
        $time = date('H:i:s');

        echo $click;
        /*
        $login = mysqli_query($conn,"INSERT INTO timein VALUES('0','$click','$date','$time')");
        if($login == true)
        {
            ?>
                <script>
                    alert("Recorded");
                    location.href="timein.php";
                </script>
            <?php
        }
        */
        
    }
?>