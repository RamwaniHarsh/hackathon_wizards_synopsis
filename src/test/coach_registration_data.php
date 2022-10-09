<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "khelmahakumbh";

        $registration_data = [
        "f_name" => $_POST['f-name'],
        "l_name" => $_POST['l-name'],
        "u_name" => $_POST['u-name'],
        "u_pass" => $_POST['u-pass'],
        "gender" => $_POST['gender'],
        "designation" => $_POST['designation'],
        "mobile" => $_POST['mobilenumber'],
        "email" => $_POST['emailid'],
        "city" => $_POST['city'],
        ];

        // print_r($signup_data);
        // header("Location:index.php?signup-successfully");
        $conn = mysqli_connect($hostname,$username,$password,$dbname);

        $select_query_coach_registration = mysqli_query( $conn,"select * from coach_details where username='". $registration_data['u_name'] ."'");
        $insert_query_coach_registration = "insert into coach_details (first_name, last_name, username, password, gender, designation, city, mobile, email) VALUES ('". $registration_data['f_name'] ."','". $registration_data['l_name'] ."','". $registration_data['u_name'] ."','". $registration_data['u_pass'] ."','". $registration_data['gender'] ."','". $registration_data['designation'] ."','". $registration_data['city'] ."',". $registration_data['mobile'] .",'". $registration_data['email']."')";


        $check_coach_registration = mysqli_num_rows($select_query_coach_registration);
        if(($check_coach_registration  > 0)){
                header("Location: coach_registration.php?error=userexist");
        }else{
                $result1 = mysqli_query($conn,$insert_query_coach_registration) or die("Error Querying Database.....");
                header("Location: coach_registration.php");
                mysqli_close($conn); 
        }
        



        // if(($conn -> query($insert_query_user_data) == TRUE) && ($conn -> query($insert_query_login_data) == TRUE )){
                // echo "Record Inserted Successfully";
                // header("Location: /index.php");
        // }else{
                // "Error : ". $sql ."<br>". $conn->error;
        // }
        // $conn -> close();
?>