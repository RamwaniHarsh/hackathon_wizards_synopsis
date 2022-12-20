
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .error{
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    background-color: rgb(245, 58, 58);
    color: white;
    padding: 5px;
    width: 100%;
    border-radius: 7px;
}
.success{
  font-size: 20px;
  text-align: center;
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: bold;
  background-color: green;
  color: white;
  padding: 5px;
  width: 100%;
  border-radius: 7px;
}
#message {
  display: none;
  background: #f1f1 f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 10px;
}
.valid {
    display: block;
    color: green;
}

.valid:before {
    display: block;
    position: relative;
    left: -35px;
    content: "&#10004;";
}

.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006;";
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Regisration Form</title>

</head>
<body>
<!-- <header> -->
<div class="container">

    <h1 style="text-align:center; color:grey;">Individual Registration</h1>

    <form action="individual_registration_data.php" method="POST">
        <div class="form first">
            <div class="details personal">
                <span class="title">Individual Details</span>

                <div class="fields">
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" id="f_name" name="f-name" onblur="getusername()" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" id="l_name" name="l-name" onblur="getusername()" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-field">
                        <label>User Name</label>
                        <input type="text" id="u_name" name="u-name" placeholder="Enter your Username" required>
                    </div>

                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" id="psw" name="u-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>

                    </div>
                    <div class="pavalidate" id="message">
                        <h3>Password must contain the following: </h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="input-field">
                      <label>Date of Birth</label>
                      <input type="date" name="dateofbirth" placeholder="Enter birth date" required>
                  </div>
                    <div class="input-field">
                        <label>Gender</label>
                        <select required name="gender">
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Education</label>
                        <select required name="education">
                            <option disabled selected>Select Education</option>
                            <option>B.Tech.</option>
                            <option>B.COM</option>
                            <option>B.B.A.</option>
                            <option>B.A.</option>
                            <option>B.Ed.</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Designation</label>
                        <input type="text" name="designation" placeholder="Enter your current designation" required>
                    </div>
                    
                    <?php 
                      $hostname = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "khelmahakumbh";
                      $conn = mysqli_connect($hostname,$username,$password,$dbname);
                      $query = "select name from cities where stateId=12";
                      $result = mysqli_query($conn, $query);
                    ?>
                    <div class="input-field">
                      <label>City</label>
                      <select required name="city">
                          <option disabled selected>Select City</option>
                          <?php while($row = mysqli_fetch_array($result)):; ?>
                          <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                          <?php endwhile; ?>
                      </select>
                  </div>
                  <div class="input-field">
                    <label>Mobile Number</label>
                    <input type="number" name="mobilenumber" placeholder="Enter mobile number" required>
                </div>
                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="emailid" placeholder="Enter your email id" required>
                    </div>
                    <div class="input-field">
              
                        <label style="font-size: 20px;">Are you Specially Abled?</label>
                        <label class="radioex">Yes
                          <input type="radio" checked="checked" value="Yes" name="ability">
                          <span class="checkmark"></span>
                        </label>
                        <label class="radioex">No
                          <input type="radio" checked="checked" value="No" name="ability">
                          <span class="checkmark"></span>
                        </label>
                   </div>
                </div>
            <div class="input-field">
                <input id="submit_btn" type="submit" value="submit">
                <?php if(isset($_GET['error'])) { ?>
					          <div class="error">Username Already Available, Please use different Username</div>
                <?php } elseif(isset($_GET['success'])){ ?>
                  <div class="success">Registration Complete Successfully</div>
                  <?php } ?>

            </div>
            <h4><a href="login.html">Already have an account? Click Here to Login</a></h4>
        </div>
    </form>

</div>
<!-- </header> -->
</body>
<script src="../js/script1.js"></script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function getusername(){
  var fname = document.getElementById("f_name").value;
  var lname = document.getElementById("l_name").value;
  var uname = fname + lname;
  document.getElementById("u_name").value = uname;
}
</script>
</html>