<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "khelmahakumbh";

$conn = mysqli_connect($hostname,$username,$password,$dbname);

$email = $_GET['email'];
$v_code = $_GET['v_code'];




if(isset($email) && isset($v_code)){
    $query = "SELECT * FROM registration_individual where email='". $email ."' AND verification_code='". $v_code ."'";
    $result = mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result)==1){
             $result_fetch = mysqli_fetch_assoc($result);
             if($result_fetch['is_verified'] == 0){
                $update = "UPDATE registration_individual SET is_verified='1' WHERE email='".$result_fetch['email']."'";
                if(mysqli_query($conn,$update)){
                    echo "Email Verification Successful";
                    header("Location: login.html?success=userverified");
                }else{
                    echo "Email Verification cannot be Doned";
                    header("Location: individual_registration.php?error=notverifeid");
                }
             }else{
                echo "User already Verified";
             }
        }
    }else{
        echo "Query could not be Execute";
    }
}
?>