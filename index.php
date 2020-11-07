<?php
    require('config/config.php');
    require('config/db.php');
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';
    $result = mysqli_query($conn, $query);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Blog</title>
</head>
<body>
    <div class= "container">
        <h1 class="text-center">My Blog</h1>
        <p class="text-center"> By Faith Child</p>
    </div>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="email" name="email" placeholder="Enter Email" >
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="login" value="login">
    </form>
   
        <div class ="row" class ="col-md-4" class ="single-blog">
            <h1> <?php echo $post['title']; ?></h1>
            <small>class = "blog-meta">Created on <?php echo $post['created at']; ?></small>
    
        </div>
    
</body>
</html>