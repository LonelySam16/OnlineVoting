<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Online Voting </h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 12.5%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>
            <div>
                Admin Login Passkey
                <form action="api/adminlog.php" method="POST">
                <input type="password" name="adminpass" placeholder="Enter admin passkey" required><br><br>
                </form>
            </div>

            </center> 
    </body>
</html>