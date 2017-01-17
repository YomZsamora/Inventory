<html>
    <head>
    <title>
          DeepAfrica Inventory & Asset Tracking
    </title>
         <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <div class="header">
    <p>DeepAfrica Inventory & Asset Tracking</p>
            
    </div>
        <h6>CLICK ON A USER STATION TO VIEW DETAILED ASSET ALLOCATION DETAILS/HISTORY</h6>
<?php

$con=mysqli_connect("localhost","root","","dai")or die("Cannot connect");
if(isset($_GET['uid'])){ $stn_id = $_GET['uid'];  

$sel="SELECT `users`.`fname`, `users`.`lname`, `users`.`station`, `inventory`.`sno`, `inventory`.`identifier`, `inventory`.`vendor`, `inventory`.`description`
FROM `users` , `inventory`
WHERE (( `users`.`station` = $stn_id))";
                       
    $res=mysqli_query($con,$sel);
if (!$res) {
    die('Invalid query: ' . mysqli_error($con));
}
                        
    echo "<table border='1'  div class=disp>
            <tr><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Assigned Station</b></td><td><b>Inventory Desc.</b></td><td><b>Vendor</b></td><td><b>Model/Version</b></td><td><b>Serial No./Product Key</b></td></tr>";
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)>=1)
    {
        $fname=$row['users.fname'];
        $lname=$row['users.lname'];
        $station=$row['users.station'];
        $desc=$row['inventory.description'];
        $vendor=$row['inventory.vendor'];
        $model=$row['inventory.identifier'];
        $serial=$row['inventory.sno'];
        
        echo "<div>
            
            <tr><td>$fname</td><td>$lname</td><td>$station</td><td>$desc</td><td>$vendor</td><td>$model</td><td>$serial</td></tr>
        
        </div>";
       
    }
                       
    echo "</table>";
        
        }
?>
        </body>
    
    </html>