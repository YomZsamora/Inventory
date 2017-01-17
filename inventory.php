<?php

    $con=mysqli_connect("localhost","root","","dai")or die("Cannot connect");
    $date=$_POST['datepicker'];
    $user=$_POST['user'];
    $station=str_replace(' ', '', $user);
    //$show_date = DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    
$insertq="INSERT INTO inventory(cat,description,vendor,identifier,sno,date,user) VALUES ('$_POST[category]','$_POST[desc]','$_POST[vendor]','$_POST[identifier]','$_POST[serial]','$date','$station')";
$result=mysqli_query($con,$insertq);

if(! $result){
die ('Could Not Enter Inventory Data. '.mysqli_error($con));
}else{ 
header('location:index.php');
}


?>