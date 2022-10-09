<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "khelmahakumbh";
$mysqli = new mysqli($hostname, $username, $password, $dbname);

$sql1 = "SELECT event_registration_coach.name, event_registration_coach.event_name, event_registration_coach.mobile,event_registration_coach.city ,event_registration_individual.name , event_registration_individual.mobile,event_registration_individual.city from event_registration_coach INNER JOIN event_registration_individual ON event_registration_coach.event_name = event_registration_individual.event_name AND event_registration_coach.city = event_registration_individual.city"; #ON event_registration_coach.event_name = event_registration_individual.event_name
$result1 = $mysqli->query($sql1);

// $sql = "select event_registration_coach.name , event_registration_individual.name FROM  ";
// $sql = "select * from event_registration_coach";
// $sql = "select * from event_registration_individual";

$sql = "select * from mapping_data";
$result = $mysqli->query(($sql));


?>
<table>
    <tr>
        <th>Name</th>
        <th>Event Name</th>
        <th>Mobile Number</th>
        <th>City Name</th>
    </tr>
    <?php

while($rows=$result->fetch_assoc())
{ ?>
<tr>
    <td><?php echo $rows['name'];?></td>
    <td><?php echo $rows['event_name'];?></td>
    <td><?php echo $rows['mobile'];?></td>
    <td><?php echo $rows['city'];?></td>
<tr>
<?php
}
?>
</table>

<?php




while ($row = $result1->fetch_assoc()){
    $insert = "insert into mapping_data(name, event_name, mobile, city) values('".$row['name']."','".$row['event_name']."','".$row['mobile']."','".$row['city']."')";
    $result2 = mysqli_query($mysqli,$insert) or die("Error Querying Database.....");
}
$mysqli->close();
?>