<!-- Author: CST1909170 Zhao Xi  -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <!--Link to self-created css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Link to self-created css-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>War and Humanity - Register</title>
</head>
<body>
<div class="container-fluid" id="style">
    <!-- Banner -->
    <header>
             War and Humanity
    </header>
    <!-- Navigation -->
    <ul>
        <li><a></a></li>
        <li><a></a></li>
        <li><a href="works.html">Works</a></li>
        <li><a href="discussion.html">Discussion</a></li>
        <li><a href="humanity.html">Humanity</a></li>
        <li><a href="histroy.html">Histroy</a></li>
        <li><a class="active" href="homepage.html">Home</a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a href="index.php">MyAccount</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
<body>
    <!--Main Content-->
    <main style="text-align: center;">
    <br/>
    <?php
        require('db.php');
        // If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])){
            $username = stripslashes($_REQUEST['username']); // removes backslashes
            $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con,$email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);

            $trn_date = date("Y-m-d H:i:s");
            $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<div class='form'><br/><br/><br/><br/><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a><br/><br/><br/><br/><br/><br/><br/><br/></div>";
            }
        }else{
    ?>
    
    <div class="form">
        <br/>
        <h1>Registration</h1>
        <br/>
        <form name="registration" action="" method="post">
            <p><input type="text" name="username" placeholder="Username" required /></p>
            <br>
            <p><input type="email" name="email" placeholder="Email" required /></p>
            <br>
            <p><input type="password" name="password" placeholder="Password" required /></p>
            <br>
            <p><input type="submit" name="submit" value="Register" /></p>
            <br>
            <p>Already has an account? <a href='login.php'>Login Here</a></p>
        </form>
        <br/><br/>
    </div>
        
    <?php } ?>
    </main>
        
    <!--Copyright-->
    <footer>
        copyright @CST1909170 Zhao Xi
        <p>CST310 Assignment 1</p>
    </footer>
    
</body>
</html>
