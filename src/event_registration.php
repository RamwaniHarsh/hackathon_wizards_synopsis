

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .event{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            background-color: green;
            color: white;
            padding: 10px;
            width: 100%;
            border-radius: 5px;  
        }
        #message {
            display: none;
            background: #f1f1f1;
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

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Event Regisration Form</title>

</head>
<body>
<!-- <header> -->
<div class="container">

    <h1 style="margin-left:33%; color:grey;">Event Registration</h1>

    <form action="event_registration_data.php" method="POST">
        <div class="form first">
            <div class="details personal">
                <span class="title">Event Regisration Details</span><br>
                <div class="fields">
                    <div class="input-field">
                        <label>Team / Individual Player Name</label>
                        <input type="text" name="p-t-name" placeholder="Enter Team / Individual Player name" required>
                    </div>
                    
                    <?php
                        $hostname = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "khelmahakumbh";
                        $conn = mysqli_connect($hostname,$username,$password,$dbname);
                            
                        $query1 = "select * from event_name";
                        $result1 = mysqli_query($conn, $query1);
                    ?>
                    <div class="input-field">
                      <label>Event Name</label>
                      <select required name="event-name">
                            <option disabled selected>Select Event Name</option>
                            <?php if(isset($_GET['event'])){ ?>
                            <option value="<?php echo $_GET['event'];?>" selected><?php echo $_GET['event'];?></option>
                            <?php }else{ ?>
                            <?php while($row1 = mysqli_fetch_array($result1)):;
                            
                            ?>
                            
                            <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                            <?php endwhile;
                            } ?>
                      </select>
                    </div>
                    <div class="input-field">
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Enter your Age" required>
                    </div>


                    <?php 
                      $hostname = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "khelmahakumbh";
                      $conn = mysqli_connect($hostname,$username,$password,$dbname);
                      $query = "select name from cities where stateid = 12";
                      $result = mysqli_query($conn, $query);
                    ?>
                    <div class="input-field">
                      <label style="font-size:1.1em">City</label>
                      <select required name="city">
                          <option disabled selected>Select City</option>
                          <?php while($row = mysqli_fetch_array($result)):; ?>
                          <option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                          <?php endwhile; ?>
                      </select>
                  </div>
                    <div class="input-field">
                        <label>Your Choice</label>
                        <select required name="user-choice">
                            <option disabled selected>Select your Choice</option>
                            <option value="Individual">Individual</option>
                            <option value="Coach">Coach</option>
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
                </div>
            <div class="input-field">
                <input id="submit_btn" type="submit" value="submit">
            </div>
            <br>
            <h4><a href="login.php">Already have an account? Click Here to Login</a></h4>
        </div>
    </form>
</div>
<!-- </header> -->
</body>
<script src="../js/script1.js"></script>

</html>