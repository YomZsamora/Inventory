

<?php
$quer=mysqli_connect("localhost","root","");
mysqli_select_db($quer,"dai");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$station=$_POST['station'];

$ins=mysqli_query($quer,"insert into users(fname,lname,station) values('$fname','$lname','$station')");
if($ins)
{
    header('location:index.php');
    echo "Data Inserted Successfully";
    
}
else{
    echo "Data could not be saved. Server said: ".mysqli_error($quer);
}
?>
