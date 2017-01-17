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
        <h6>DETAILED RESOURCES ALLOCATION PER USER</h6>
<?php

    $con=mysqli_connect("localhost","root","","dai")or die("Cannot connect");
    
    $sel="SELECT * FROM inventory";
    $res=mysqli_query($con,$sel);

    //$num=mysqli_num_rows($res);
        
    echo "<table border='1'  div class=disp>
            <tr><td><b>Inventory Number</b></td><td><b>Type of Record</b></td><td><b>Description</b></td><td><b>Vendor</b></td><td><b>Model/Identifier</b></td><td><b>Serial Number/Product Key</b></td><td><b>Date Acquired</b></td><td><b>User Station</b></td></tr>";
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
    {
        $iid=$row['Inv_ID'];
        $type=$row['cat'];
        $desc=$row['description'];
        $vendor=$row['vendor'];
        $id=$row['identifier'];
        $serial=$row['sno'];
        $date=$row['date'];
        $user=$row['user'];
        
        /*Output of all the inventory data*/
        echo "<div>
            
            <tr><td>DA_INV$iid</td><td>$type</td><td>$desc</td><td>$vendor</td><td>$id</td><td>$serial</td><td>$date</td><td><a href=details.php?uid=$user>$user</td></tr>
        
        </div>";
       
    }
    echo "</table>";

?>
        </body>
    </html>