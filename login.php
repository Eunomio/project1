<!-- Author: CST1909170 Zhao Xi  -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--Link to self-created css-->
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <!--Link to bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
        <title>War and Humanity - Login</title>
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
            <li><a href="history.html">History</a></li>
            <li><a class="active" href="homepage.html">Home</a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a href="index.php">MyAccount</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        
        <!--Main Content--> 
        <main style="text-align: center;">
        <?php
            require('db.php');
            session_start();
            // If form submitted, insert values into the database.
            if (isset($_POST['username'])){

                $username = stripslashes($_REQUEST['username']); // removes backslashes
                $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con,$password);

            //Checking is user existing in the database or not
                $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
                $result = mysqli_query($con,$query) or die(mysqli_error());
                $rows = mysqli_num_rows($result);
                if($rows==1){
                    $_SESSION['username'] = $username;
                    header("Location: index.php"); // Redirect user to index.php
                    }else{
                        echo "<div class='form'><br/><br/><br/><br/><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a><br/><br/><br/><br/><br/><br/></div>";
                        }
            }else{
        ?>
        <div class="form">
            <br/><br/><br/><br/>
            <h1>Log In</h1>
            <br/>
            <form action="" method="post" name="login">
                <p><input type="text" name="username" placeholder="Username" required /></p>
                <br>
                <p><input type="password" name="password" placeholder="Password" required /></p>
                <br>
                <p><input name="submit" type="submit" value="Login" /></p>
            </form>
            <br/>
            <!--Link to other page-->
            <p>Not registered yet? <a href='registration.php'>Register Here</a></p>

            <br/><br/><br/><br/>
        </div>
        <?php } ?>
        </main>
        
        <!--Copyright-->
        <footer>
            copyright @CST1909170 Zhao Xi
            <p>CST310 Assignment 1</p>
        </footer>
        </div>
    </body>
</html>
