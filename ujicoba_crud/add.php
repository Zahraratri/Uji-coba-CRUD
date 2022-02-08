<html>
<head>
    <title>Add Users</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
 
<body>

    <form action="add.php" method="POST">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <br></br>
                <div class="pull-right">
                <a class="btn btn-success" href="index.php">Go to Home</a>
            </div>
                <br/>
                <div class="form-group">
                 <strong><h4>Add New - User </h4></strong>
                 <strong><h6>Name</h6></strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    <br>
                    <strong><h6>Email</h6></strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    <br> 
                    <strong><h6>NIS</h6></strong>
                    <input type="text" name="nis" class="form-control" placeholder="NIS">
                    <br>
                </div>
            </div>
                <br></br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input class="btn btn-primary" type="submit" value="Submit" href="index.php" name="submit">
                </div>
        </div>
    </div>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nis = $_POST['nis'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        mysqli_query($mysqli, "INSERT INTO users(name,email,nis) VALUES('$name','$email','$nis')");
        header("location: /ujicoba");
    
    }
    ?>
</body>
</html>