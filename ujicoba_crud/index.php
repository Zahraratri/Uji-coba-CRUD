<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id AsC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    
</head>
 
<body>
    <div class="container">
	    <br /> <br />
  	<div class="row">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Data Siswa</h2>
                </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="add.php">Add New User</a>
                    </div>
            </div>
    </div>
<br/>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIS</th>
            <th>Email</th>
            <th width="280px">Update</th>
        </tr>
 
    <?php  
    $nomer = 1;
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$nomer++."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['nis']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>