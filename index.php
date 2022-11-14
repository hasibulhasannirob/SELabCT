<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM request_makeup");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Name</th> <th>Missed Course</th> <th>CT Date</th><th>Reason</th><th>Status</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['missed_course']."</td>";
        echo "<td>".$user_data['ct_date']."</td>";
        echo "<td>".$user_data['reason']."</td>";
        echo "<td>".$user_data['statu_s']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
    <br>

    <button type="button">Add Request</button> 
    <button type="button">Cancel Request</button> 
</body>
</html>