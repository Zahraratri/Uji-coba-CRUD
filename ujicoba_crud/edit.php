<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $nis=$_POST['nis'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',nis='$nis' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: /ujicoba");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");


while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $nis = $user_data['nis'];
}
?>

<html>
<head>    
    <title>Edit User Data</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
 
<body>

    <form name="update_user" method="POST" action="edit.php">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <br></br>
                    <div class="pull-right">    
                        <a class="btn btn-success" href="index.php">Go to Home</a>
                    </div>
                        <br/>
                    <div class="form-group">
                        <h4>Edit - User</h4>
                        <br/>
                        <strong><h6>Name</h6></strong>
                        <input type="text" name="name" class="form-control" value=<?php echo $name;?>>
                        <br/>
                        <strong><h6>Email</h6></strong>
                        <input type="text" name="email" class="form-control" value=<?php echo $email;?>>
                        <br/>
                        <strong><h6>Email</h6></strong>
                        <input type="text" name="nis" class="form-control" value=<?php echo $nis;?>>
                        <br/>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <br/>
                        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                        <input class="btn btn-primary" type="submit" name="update" value="Update">
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>
</html>