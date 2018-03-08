<?php session_start();
    include("connection.php");
    $query = "SELECT name FROM register WHERE email = '$_SESSION[userName]'";
    $result = mysqli_query($conn, $query);

    while($record = mysqli_fetch_assoc($result)){
        $_SESSION['name'] = $record['name'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <h1>Dashboard</h1>
            <span class="navbar-right">
                <h3><?php echo $_SESSION['name'] ?> | <a href="dashboard.php?log_out=true">Log Out</a></h3>
            </span>
        </div>
        
    </div>
</body>
</html>

<?php

    if (isset($_GET['log_out'])) {
       session_destroy();
       header("location:index.php");
    }
?>