<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "khelmahakumbh";

        $registration_data = [
        "p-t-name" => $_POST['p-t-name'],
        "event_name" => $_POST['event-name'],
        "user_choice" => $_POST['user-choice'],
        "age" => $_POST['age'],
        "mobile" => $_POST['mobilenumber'],
        "email" => $_POST['emailid'],
        ];

        // print_r($signup_data);
        // header("Location:index.php?signup-successfully");
        $conn = mysqli_connect($hostname,$username,$password,$dbname);

        $select_query_event_registration = mysqli_query( $conn,"select * from event_registration where name='". $registration_data['p-t-name'] ."'");
        $insert_query_event_registration = "insert into event_registration (name, event_name, age, user_choice, mobile, emailid) VALUES ('". $registration_data['p-t-name'] ."','". $registration_data['event_name'] ."',". $registration_data['age'] .",'". $registration_data['user_choice'] ."',". $registration_data['mobile'] .",'". $registration_data['email']."')";

        if($registration_datap['user_choice'] == "Individual"){
            
        }elseif($registration_datap['user_choice'] == "Coach"){

        }


        $check_event_registration = mysqli_num_rows($select_query_event_registration);
        if(($check_event_registration > 0)){
                header("Location: event_registration.html?error=userexist");
        }else{
                $result1 = mysqli_query($conn,$insert_query_event_registration) or die("Error Querying Database.....");
                header("Location: event_registration.html");
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