<?php
session_start();
?>

<?php
$database = "khelmahakumbh";
$host = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($host, $user, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

mysqli_select_db($conn, $database);

$uname = $_POST['uname'];
$pass = $_POST['upass'];
// $email = $_POST['uemail'];

$sql1 = "select * from registration_individual where username ='". $uname ."' and password='". $pass ."'";
$sql2 = "select * from coach_details where username='". $uname ."' and password='". $pass ."'";
$sql3 = "select * from institute_registration where name='". $uname ."' and password='". $pass ."'";
$sql4 = "select * from admin_login where username='".$uname."' and password='".$pass."' ";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);

$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
$row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);





if(($row1['username'] == $uname) && ($row1['password'] == $pass)){
    
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row1['email'];
    $_SESSION['name'] = $row1['f_name'];
    header("Location: /harsh2/hackathon_synopsis/portfolio.php");

}
if(($row2['username'] == $uname) && ($row2['password'] == $pass)){
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row2['email'];
    $_SESSION['name'] = $row2['first_name'];
    header("Location: /harsh2/hackathon_synopsis/portfolio.php");
}
if(($row3['name'] == $uname) && ($row3['password'] == $pass)){
    header("Location: /harsh2/hackathon_synopsis/portfolio.php");
}
if(($row4['username'] == $uname) && ($row4['password'] == $pass)){
    header("Location: redirect.html?msg=admin");
}
else{
    echo "Error: ".mysqli_error($conn);
    // header("Location: login.html?msg=Error". $sql ." Error " .mysqli_error($conn));
}
?>