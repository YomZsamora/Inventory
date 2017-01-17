<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <title>DA|User Registration</title>
    </head>
    <body>
        <div class="container">
            <div class="form">
                
                        <form name="users" method="post" action="userjax.php">
                            <table>
                            <tr><td>First Name:</td><td><input type="text" class="input" id="fname" name="fname" required ></td></tr>
                            <tr><td>Last Name:</td><td><input type="text" class="input" id="lname" name="lname" required ></td></tr>
                            <tr><td>Station Name:</td><td><input type="text" name="station" id="station" class="input" ></td></tr>
                            </table>
                            <input type="submit" class="bts" name="submit" id="submit" value="Save">
                        </form>
                    
            </div>
        </div>
    </body>
</html>