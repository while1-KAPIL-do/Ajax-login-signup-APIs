<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: http://localhost/api_ajax/index.html");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- custom style -->
    <link rel="stylesheet" href="http://localhost/api_ajax/styles/home.css" >
</head>
<body>
    <?php echo $_SESSION['username']; ?>
    <a href="http://localhost/api_ajax/apis/logout.php">Logout</a>

    <div>
        <div class="nav">
        
        </div>

        <div class="stories">
        
        </div>

    
    </div>

</body>
</html>