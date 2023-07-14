<?php 
include 'conn.php';
if(isset($_POST['name']))
{
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $mobile =$_POST['mobile'];
    $city =$_POST['city'];
    $address =$_POST['address'];
    $insertquery = "insert into homepage(name,email,password,mobile,city,address)value('".$name."','".$email."','".$password."','".$mobile."','".$city."','".$address."')";
    $rev=mysqli_query($con,$insertquery);
    if($rev)
    {
        echo "succesful";

    }
    else{
        echo "error";
    }
}
 

?>
