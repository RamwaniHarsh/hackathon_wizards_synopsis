<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "khelmahakumbh";


        
        $conn = mysqli_connect($hostname,$username,$password,$dbname);
        $select_query_coach_registration = mysqli_query( $conn,"select * from aadhar_verification ");

?>