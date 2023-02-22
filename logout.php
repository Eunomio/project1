<!-- Author: CST1909170 Zhao Xi  -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <!--Link to bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!--Link to self-created css-->
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <br/><br/><br/><br/>
        <?php
        session_start();
        if(session_destroy()){ // Destroying All Sessions
            header("Location: homepage.html"); // Redirecting To Home Page
        }
        ?>
        <br/><br/><br/><br/>
        </main>
        
        <!--Copyright-->
        <footer>
            copyright @CST1909170 Zhao Xi
            <p>CST310 Assignment 1</p>
        </footer>
        </div>
    </body>
</html>

