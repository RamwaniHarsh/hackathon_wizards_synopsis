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
        "dob" => $_POST['dateofbirth'],
        "education" => $_POST['education'],
        "designation" => $_POST['designation'],
        "mobile" => $_POST['mobilenumber'],
        "email" => $_POST['emailid'],
        ];

        // print_r($signup_data);
        // header("Location:index.php?signup-successfully");
        $conn = mysqli_connect($hostname,$username,$password,$dbname);

        $select_query_registration_individual = mysqli_query( $conn,"select * from registration_individual where username='". $registration_data['u_name'] ."'");
        $insert_query_registration_individual = "insert into registration_individual (f_name, l_name, username, password, gender, dob, education, designation, mobile, email) VALUES ('". $registration_data['f_name'] ."','". $registration_data['l_name'] ."','". $registration_data['u_name'] ."','". $registration_data['u_pass'] ."','". $registration_data['gender'] ."','". $registration_data['dob'] ."','". $registration_data['education'] ."','". $registration_data['designation'] ."',". $registration_data['mobile'] .",'". $registration_data['email']."')";


        $check_registration_individual = mysqli_num_rows($select_query_registration_individual);
        if(($check_registration_individual  > 0)){
                header("Location: individual_registration.php?error=userexist");
        }else{
                $result1 = mysqli_query($conn,$insert_query_registration_individual) or die("Error Querying Database.....");
                header("Location: individual_registration.php");
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