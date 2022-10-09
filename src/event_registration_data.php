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
        "city" => $_POST['city'],
        "mobile" => $_POST['mobilenumber'],
        "email" => $_POST['emailid'],
        ];

        // print_r($registration_data);
        // header("Location:index.php?signup-successfully");
        $conn = mysqli_connect($hostname,$username,$password,$dbname);

        $select_query_event_registration_coach = mysqli_query( $conn,"select * from event_registration_coach where name='". $registration_data['p-t-name'] ."'");
        $select_query_event_registration_individual = mysqli_query( $conn,"select * from event_registration_individual where name='". $registration_data['p-t-name'] ."'");
        $insert_query_event_registration_coach = "insert into event_registration_coach (name, event_name, age, city, user_choice, mobile, emailid) VALUES ('". $registration_data['p-t-name'] ."','". $registration_data['event_name'] ."',". $registration_data['age'] .",'". $registration_data['city'] ."','". $registration_data['user_choice'] ."',". $registration_data['mobile'] .",'". $registration_data['email']."')";
        $insert_query_event_registration_individual = "insert into event_registration_individual (name, event_name, age, city, user_choice, mobile, emailid) VALUES ('". $registration_data['p-t-name'] ."','". $registration_data['event_name'] ."',". $registration_data['age'] .",'". $registration_data['city'] ."','". $registration_data['user_choice'] ."',". $registration_data['mobile'] .",'". $registration_data['email']."')";

        $check_event_registration_coach = mysqli_num_rows($select_query_event_registration_coach);
        $check_event_registration_individual = mysqli_num_rows($select_query_event_registration_individual);

        if($check_event_registration_coach > 0){
                header("Location: event_registration.html?error=userexist");
        }elseif($check_event_registration_individual > 0){
                header("Location: event_registration.html?error=userexist");
        }else{        
                if($registration_data['user_choice'] == "Coach"){
                        $result1 = mysqli_query($conn,$insert_query_event_registration_coach) or die("Error Querying Database.....");
                        header("Location: event_registration.php");
                        mysqli_close($conn); 
                }elseif($registration_data['user_choice'] == "Individual"){
                        $result2 = mysqli_query($conn,$insert_query_event_registration_individual) or die("Error Querying Database.....");
                        header("Location: event_registration.php");
                        mysqli_close($conn); 
                }
        }
        
        // if(($conn -> query($insert_query_user_data) == TRUE) && ($conn -> query($insert_query_login_data) == TRUE )){
                // echo "Record Inserted Successfully";
                // header("Location: /index.php");
        // }else{
                // "Error : ". $sql ."<br>". $conn->error;
        // }
        // $conn -> close();
?>