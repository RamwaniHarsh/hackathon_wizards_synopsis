<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "khelmahakumbh";

$mysqli = new mysqli($hostname, $username, $password, $dbname);


$sql = "select * from mapping_data where event_name = 'Kho-Kho'";
$result = $mysqli->query($sql);
$mysqli->close();

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
 // $registration_data = [
    //     "name" => $row['name'],
    //     "event_name" => $row['event_name'],
    //     "mobile" => $row['mobile'],
    //     "city" => $row['city'],
    // ];
    
    // print_r($registration_data);
    // print_r($row);
?>


